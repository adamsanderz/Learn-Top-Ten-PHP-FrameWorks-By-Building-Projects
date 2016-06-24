<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @param Users
 */
class Users extends Admin_Controller {

    function __construct() {
        parent::__construct();

    }

    public function index() {
        // Check login
        if(!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }

        $data['users'] = $this->User_model->get_list();
        // Load Template
        $this->template->load('admin', 'default', 'users/index', $data);
    }

    public function add() {
        // Check login
        if(!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }

        // Set Rules
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[7]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|min_length[6]|matches[password2]');

        if($this->form_validation->run() == FALSE) {
            // Load Template
            $this->template->load('admin', 'default', 'users/add');
        }
        else {
            $data = array(
                'first_name'    =>  $this->input->post('first_name'),
                'last_name'     =>  $this->input->post('last_name'),
                'email'         =>  $this->input->post('email'),
                'username'      =>  $this->input->post('username'),
                'password'      =>  md5($this->input->post('password'))
            );

            // Add User
            $this->User_model->add($data);

            // Activity Array
            $data = array(
                'resource_id' => $this->db->insert_id(),
                'type'        => 'user',
                'action'      => 'added',
                'user_id'     => $this->session->userdata('user_id'),
                'message'     => 'A new User was created ('.$data['username'].')'
            );

            // Add Activity
            $this->Activity_model->add($data);

            // Create message
            $this->session->set_flashdata('success', 'User has been added');

            // Redirect to user/page
            redirect('admin/users');
        }


    }

    public function edit($id) {
        // Check login
        if(!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }

        // Set Rules
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[7]|valid_email');

        if($this->form_validation->run() == FALSE) {
            // Get Current User
            $data['item'] = $this->User_model->get($id);

            // Load Template
            $this->template->load('admin', 'default', 'users/edit', $data);
        }
        else {
            $data = array(
                'first_name'    =>  $this->input->post('first_name'),
                'last_name'     =>  $this->input->post('last_name'),
                'email'         =>  $this->input->post('email'),
                'username'      =>  $this->input->post('username')
            );

            // Add User
            $this->User_model->update($id, $data);

            // Activity Array
            $data = array(
                'resource_id' => $this->db->insert_id(),
                'type'        => 'user',
                'action'      => 'updated',
                'user_id'     => $this->session->userdata('user_id'),
                'message'     => 'The User ('.$data['username'].') has been updated'
            );

            // Add Activity
            $this->Activity_model->add($data);

            // Create message
            $this->session->set_flashdata('success', 'User has been updated');

            // Redirect to user/page
            redirect('admin/users');
        }

    }

    public function delete($id) {
        // Check login
        if(!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }

        $username = $this->User_model->get($id)->username;

        // Delete the Page
        $this->User_model->delete($id);

        // Activity Array
        $data = array(
            'resource_id' => $this->db->insert_id(),
            'type'        => 'page',
            'action'      => 'deleted',
            'user_id'     => $this->session->userdata('user_id'),
            'message'     => 'A User ('.$username.') was deleted'
        );

        // Insert Activity
        $this->Activity_model->add($data);

        // Set message
        $this->session->set_flashdata('success', 'User has been deleted');

        // Redirect
        redirect('admin/users');
    }

    public function login() {
        // Set Rules
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');

        if($this->form_validation->run() == FALSE) {

            // Load Template
            $this->template->load('admin', 'login', 'users/login');
        }
        else {
            // Get Post data
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $enc_password = md5($password);

            $user_id = $this->User_model->login($username, $enc_password);

            if($user_id) {
                $user_data = array(
                    'user_id'   => $user_id,
                    'username'  => $username,
                    'logged_in' => true
                );
                // Set Session data
                $this->session->set_userdata($user_data);

                // Create message
                $this->session->set_flashdata('success', 'You are logged in');

                // Redirect to user/page
                redirect('admin');
            }
            else {
                // Create message
                $this->session->set_flashdata('error', 'Invalid Login');

                // Redirect to user/page
                redirect('admin/users/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        $this->session->sess_destroy();

        // Set Message
        $this->session->set_flashdata('success', 'You are logged out');
        redirect('admin/users/login');
    }
}
