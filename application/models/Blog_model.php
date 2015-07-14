<?php 
class Blog_model extends CI_Model
{
function insert_into_db()
{
$title = $_POST['title'];
$description = $_POST['description'];
$this->db->query("INSERT INTO blog (title,description) VALUES('$title','$description')");
}
}