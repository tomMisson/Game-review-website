<?php
class HomeModel extends CI_Model{

    public function __construct()
    {
    }

    //Get for all games
    public function getGame()
    {
        // You can use the select, from, and where functions to simplify this as seen in Week 13.
        $query = $this->db->query("SELECT * FROM activereviews");
        return $query->result();
    }

    public function changeDarkMode($value)
    {
        $user = $this->session->userdata('username');
        $this->db->query("UPDATE users SET DarkMode = $value WHERE UserName = '$user';");
    }

    public function changeAdmin($value)
    {
        $user = $this->session->userdata('username');
        $this->db->query("UPDATE users SET IsAdmin = $value WHERE UserName = '$user';");
    }

    public function isAdmin()
    {
        $user = $this->session->userdata('username');
        if($user == NULL)
        {
            return "0";
        }
        $query = $this->db->query("SELECT IsAdmin FROM users WHERE UserName LIKE '$user';");
        return $query->result();
    }
}