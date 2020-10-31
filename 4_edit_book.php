<?php
include_once("4_config_book.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $category_id=$_POST['category_id'];
    $writer_id=$_POST['writer_id'];
    $publication_year=$_POST['publication_year'];
    $img=$_POST['img'];

    $result = mysqli_query($mysqli, "UPDATE book_tb SET name='$name',category_id='$category_id',writer_id='$writer_id',publication_year='$publication_year',img='$img' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM book_tb WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $category_id = $user_data['category_id'];
    $writer_id = $user_data['writer_id'];
    $publication_year = $user_data['publication_year'];
    $img = $user_data['img'];
}
?>
<html>

<head>
    <title>add book</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../css_form/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css_form/css/util.css">
    <link rel="stylesheet" type="text/css" href="../css_form/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <div class="container-contact100">
        <div class="wrap-contact100">
            <a href="index.php">Go to Home</a>
    <br/><br/>
            <form class="contact100-form validate-form" name="update_user" method="post" action="4_edit_book.php">
                <span class="contact100-form-title">
                    EDIT CATEGORY
                </span>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="name" placeholder="Enter name" value="<?php echo $name; ?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">category_id</span>
                    <input class="input100" type="text" name="category_id" placeholder="Enter category_id" value="<?php echo $category_id;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">writer_id</span>
                    <input class="input100" type="text" name="writer_id" placeholder="Enter writer_id" value="<?php echo $writer_id;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">publication_year</span>
                    <input class="input100" type="text" name="publication_year" placeholder="Enter publication_year" value="<?php echo $publication_year;?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">img</span>
                    <input class="input100" type="text" name="img" placeholder="Enter img" value="<?php echo $img;?>">
                    <span class="focus-input100"></span>
                </div>

                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="submit" name="update" value="Update">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="../css_form/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="../css_form/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="../css_form/vendor/bootstrap/js/popper.js"></script>
    <script src="../css_form/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="../css_form/vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="../css_form/vendor/daterangepicker/moment.min.js"></script>
    <script src="../css_form/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="../css_form/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../css_form/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>