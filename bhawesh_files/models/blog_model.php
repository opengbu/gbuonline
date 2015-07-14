<?php 
class Blog_model extends CI_Model
{
function insert_into_db()
{
$roll = $_POST['roll'];
$title = $_POST['title'];
$description = $_POST['description'];
$this->db->query("INSERT INTO blog (roll_number,title,description) VALUES('$roll','$title','$description')");
}
}