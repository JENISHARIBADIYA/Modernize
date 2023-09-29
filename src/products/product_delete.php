<?php
include('../connect.php');

$sql = "DELETE FROM product where id=" . $_REQUEST['id'];

if ($conn->query($sql) === TRUE) {
	echo "Data deleted Successfully.!";
} else {
	echo "Error in Data Deletion.!";
}
?>