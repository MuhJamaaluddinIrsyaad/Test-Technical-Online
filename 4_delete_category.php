<?php
include_once("4_config_category.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM category_tb WHERE category_id=$id");

header("Location:4_index_category.php");
?>