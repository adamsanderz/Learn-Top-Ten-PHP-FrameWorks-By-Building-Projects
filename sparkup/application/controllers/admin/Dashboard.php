<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @param Dashboard
 */
class Dashboard extends Admin_Controller {

    function __construct() {
        parent::__construct();

        // Check login
        if(!$this->session->userdata('logged_in')) {
            redirect('admin/login');
        }
    }

    public function index() {
        // Get Activities
        $data['activities'] = $this->Activity_model->get_list();

        // Load Template
        $this->template->load('admin', 'default', 'dashboard', $data);
    }
}
