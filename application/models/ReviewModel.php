<?php
class ReviewModel extends CI_Model{

    public function __construct()
    {
    }

    //Get the details for a game once it has been clicked on.
    public function getReview($slug)
    {
        $query = $this->db->query("SELECT DISTINCT * FROM `activereviews` WHERE slug ='$slug' LIMIT 1");
        return $query->result();
    }

    public function search($term)
    {
        $query = $this->db->query("SELECT DISTINCT GameName, GameBlurb FROM `activereviews` WHERE slug LIKE '%$term%'");
        return $query->result();
    }
}