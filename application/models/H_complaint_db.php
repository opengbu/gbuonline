<?php 
class H_complaint_db extends CI_Model
{
function insert_into_db()
{
$roll = $_POST['roll'];
$complaint = $_POST['complaint'];
$this->db->query("INSERT INTO h_complaint VALUES('$roll','$complaint')");
}
}