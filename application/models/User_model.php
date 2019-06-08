<?php 

class User_model extends CI_Model {

    public $user;
    public $password;
    public $created_at;

    public function add_user($user, $password)
    {
        $now = date('Y-m-d H:i:s');

        $this->user = $user;
        $this->password = $password;
        $this->created_at = $now;

        $this->db->insert('users', $this);
    }
    
    public function get_last_user_id()
    {
        return $this->db->query('SELECT MAX(id) as id FROM users')->row()->id;
    }

    public function login($user, $pass){
        $query = $this->db->get_where('users', array('user'=>$user, 'password'=>md5($pass)));
        return $query->row_array();
    }
}