<?php
include_once("4_config_book.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM book_tb WHERE id=$id");

header("Location:index.php");
?>