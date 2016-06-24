<?php

/**
 *  @param Activity_model class
 */
class Activity_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->table = 'activities';
    }

    public function get_list() {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('create_date', 'desc');
        $this->db->limit(15, 0);
        $query = $this->db->get();

        return $query->result();
    }

    public function add($data) {
        $this->db->insert($this->table, $data);
    }
}
