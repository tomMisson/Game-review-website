<?php

class UsersModel extends CI_Model
{

    public function retrive_user_data($username)
    {
        $query = $this->db->query("SELECT UID, UserName, DarkMode, IsAdmin FROM users WHERE UserName='$username'");//Gets all User data

        return $query->result();
    }

    public function validate_user($username, $password)
    {
        $query = $this->db->query("SELECT UserName, UserPassword FROM users WHERE UserName='$username' and UserPassword='$password'");//validates that the users credentials match on login

        return count($query->result());
    }
}

?>