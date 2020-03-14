<?php
class HomeModel extends CI_Model{

    public function __construct()
    {
    }

    //Get for all games
    public function getGame()
    {
        //gets all game data
        $query = $this->db->query("SELECT * FROM activereviews");
        return $query->result();
    }

    public function changeDarkMode($value)
    {
        $user = $this->session->userdata('username');
        $this->db->query("UPDATE users SET DarkMode = $value WHERE UserName = '$user';");//updates the dark mode when toggled
    }

    public function changeAdmin($value)
    {
        $user = $this->session->userdata('username');
        $this->db->query("UPDATE users SET IsAdmin = $value WHERE UserName = '$user';");//updates the admin mode when toggled
    }

    public function isAdmin()
    {
        $user = $this->session->userdata('username');
        if($user == NULL)
        {
            return "0";
        }
        $query = $this->db->query("SELECT IsAdmin FROM users WHERE UserName LIKE '$user';"); //returns a 1 or 0 if the user is an admin or not and if they're not logged in then it defaults to 0
        return $query->result();
    }
}