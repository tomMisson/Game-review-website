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
}