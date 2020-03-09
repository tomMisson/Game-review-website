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

    public function searchForReview($term)
    {
        $query = $this->db->query("SELECT DISTINCT GameName, GameBlurb, slug FROM activereviews WHERE slug LIKE '%$term%'");
        return $query->result();
    }

    public function getComments($slug)
    {
        $query = $this->db->query("SELECT UserComment,UserName FROM gamescomments INNER JOIN users on users.UID = gamescomments.UserID WHERE ReviewID = (SELECT ID FROM activereviews WHERE slug='$slug')");
        return $query->result();
    }

    public function postComment($commentText,$username ,$slug)
    {
        $query = $this->db->query("INSERT INTO `gamescomments`(`UserID`, `ReviewID`, `UserComment`) VALUES ((SELECT UID FROM users WHERE UserName='$username' LIMIT 1), (SELECT ID FROM activereviews WHERE slug='$slug'), '$commentText')");
    }
}