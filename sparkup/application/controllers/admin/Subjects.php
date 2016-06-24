<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @param Subjects
 */
class Subjects extends Admin_Controller {

    function __construct() {
        parent::__construct();

        // Check login
        if(!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $data['subjects'] = $this->Subject_model->get_list();

        // Load Template
        $this->template->load('admin', 'default', 'subjects/index', $data);
    }

    public function add() {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');

        if($this->form_validation->run() == FALSE) {
            // Load Template
            $this->template->load('admin', 'default', 'subjects/add');
        }
        else {
            // Create Post Array
            $data = array(
                'name' => $this->input->post('name')
            );

            // Insert Subject
            $this->Subject_model->add($data);

            // Activity Array
            $data = array(
                'resource_id' => $this->db->insert_id(),
                'type'        => 'subject',
                'action'      => 'added',
                'user_id'     => $this->session->userdata('user_id'),
                'message'     => 'A new Subject was created ('.$data['name'].')'
            );

            // Insert Activity
            $this->Activity_model->add($data);

            // Set message
            $this->session->set_flashdata('success', 'Subject has been added');

            // Redirect
            redirect('admin/subjects');
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');

        if($this->form_validation->run() == FALSE) {
            // Get Current Subject
            $data['item'] = $this->Subject_model->get($id);

            // Load Template
            $this->template->load('admin', 'default', 'subjects/edit', $data);
        }
        else {
            $old_name = $this->Subject_model->get($id)->name;
            $new_name = $this->input->post('name');

            // Create Post Array
            $data = array(
                'name' => $this->input->post('name')
            );
            // Update Subject
            $this->Subject_model->update($id, $data);

            // Activity Array
            $data = array(
                'resource_id' => $this->db->insert_id(),
                'type'        => 'subject',
                'action'      => 'updated',
                'user_id'     => $this->session->userdata('user_id'),
                'message'     => 'A Subject ('.$old_name.') was renamed to ('.$new_name.')'
            );

            // Insert Activity
            $this->Activity_model->add($data);

            // Set message
            $this->session->set_flashdata('success', 'Subject has been updated');

            // Redirect
            redirect('admin/subjects');
        }
    }

    public function delete($id) {
        $name = $this->Subject_model->get($id)->name;

        // Delete the Subject
        $this->Subject_model->delete($id);

        // Activity Array
        $data = array(
            'resource_id' => $this->db->insert_id(),
            'type'        => 'subject',
            'action'      => 'deleted',
            'user_id'     => $this->session->userdata('user_id'),
            'message'     => 'A Subject ('.$name.') was deleted'
        );

        // Insert Activity
        $this->Activity_model->add($data);

        // Set message
        $this->session->set_flashdata('success', 'Subject has been deleted');

        // Redirect
        redirect('admin/subjects');
    }
}
