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
            <a href="4_index_category.php">Go to Home</a>
    <br/><br/>
            <form class="contact100-form validate-form" action="4_add_category.php" method="post" name="form1">
                <span class="contact100-form-title">
                    ADD CATEGORY
                </span>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Name</span>
                    <input class="input100" type="text" name="name" placeholder="Enter name">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="submit" name="Submit" value="Add">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
            <?php

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];

        include_once("4_config_category.php");

        $result = mysqli_query($mysqli, "INSERT INTO category_tb(name) VALUES('$name')");

        echo "User added successfully. <a href='4_index_category.php'>View Users</a>";
    }
    ?>
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