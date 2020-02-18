<?php

class Users extends CI_Model
{
    public function insert_user()
    {
        $data['username'] = 'TomMisson';
        $data['password'] = 'Password';

        $this->db->insert('users', $data);
    }

    public function select_users()
    {
        $this->db->query("SELECT username FROM users WHERE user_id = 1");

        return $query->result();
    }

    public function validate_user($username, $password)
    {
        $this->db->query("SELECT username FROM users WHERE user_id = 1");

        return $query->result();
    }
}

?>