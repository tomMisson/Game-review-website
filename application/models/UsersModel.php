<?php

class UsersModel extends CI_Model
{

    public function retrive_user_data($username)
    {
        $query = $this->db->query("SELECT UID, UserName, DarkMode, IsAdmin FROM users WHERE UserName='$username'");

        return $query->result();
    }

    public function validate_user($username, $password)
    {
        $query = $this->db->query("SELECT UserName, UserPassword FROM users WHERE UserName='$username' and UserPassword='$password'");

        return count($query->result());
    }

    public function update_dark_mode($data)
    {
        $query = $this->db->query("SELECT UserName, UserPassword FROM users WHERE UserName='$username' and UserPassword='$password'");
    }
}

?>