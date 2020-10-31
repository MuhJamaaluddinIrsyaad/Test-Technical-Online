<?php
include_once("4_config_category.php");

$result = mysqli_query($mysqli, "SELECT * FROM category_tb ORDER BY category_id DESC");
?>

<html>
<head>
    <title>crud category</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="../css_tabel/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_tabel/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_tabel/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_tabel/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_tabel/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_tabel/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_tabel/css/util.css">
    <link rel="stylesheet" type="text/css" href="../css_tabel/css/main.css">
<!--===============================================================================================-->
</head>

<body>
<div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <a href="4_add_category.php">Add New category</a>&emsp;
                    <a href="4_index_writer.php">Crud writer</a>&emsp;
                    <a href="index.php">Crud book</a>&emsp;<br/><br/>
                    <table data-vertable="ver1" border="1">
                        <thead>
                            <tr class="row100 head">
                                <th class="column100 column2" data-column="column2">Name</th>
                                <th class="column100 column3" data-column="column3">action</th>
                            </tr>

                        <tbody>
                            <?php
                            while($user_data = mysqli_fetch_array($result)) {
                            echo "<tr class='row100'>";
                                echo "<td class='column100 column2' data-column='column2'>".$user_data['name']."</td>";
                                echo "<td class='column100 column7' data-column='column7'><a href='4_edit_category.php?id=$user_data[category_id]'>Edit</a> | <a href='4_delete_category.php?id=$user_data[category_id]'>Delete</a></td>";
                            echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->  
    <script src="../css_tabel/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../css_tabel/vendor/bootstrap/js/popper.js"></script>
    <script src="../css_tabel/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../css_tabel/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="../css_tabel/js/main.js"></script>
</body>
</html>