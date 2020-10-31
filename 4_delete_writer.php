<?php
include_once("4_config_writer.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM writer_tb WHERE writer_id=$id");

header("Location:4_index_writer.php");
?>