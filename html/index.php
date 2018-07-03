<?php require_once 'php/init.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Homepage - Front-end</title>

    <!-- #### CSS #### -->

    <!-- Font icon -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/css/font-awesome.min.css"></link>

    <!-- #### BOOTSTRAP FW - DO NOT REMOVE #### -->
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- m extend -->
    <link href="assets/js/m-extend/m-extend.css" rel="stylesheet"/>
    <!-- select option -->
    <link href="assets/js/nice-select/nice-select.css" rel="stylesheet"/>
    <!-- slick -->
    <link href="assets/js/slick/slick.css" rel="stylesheet"/>
    <link href="assets/js/slick/slick-theme.css" rel="stylesheet"/>
    <!-- owl carousel -->
    <link rel="stylesheet" type="" href="assets/js/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" type="" href="assets/js/owlcarousel/owl.theme.default.min.css">
    <!-- mcustomscrollbar -->
    <link href="assets/js/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>
    <!-- main -->
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
<aside id="header" class="sticky">
    <?php require_once 'header.php';?>
</aside><!-- #header-poseur -->

<main id="main">
    <?php require_once 'php/control.php';?>
</main><!-- #main -->

<main id="footer">
    <?php require_once 'footer.php';?>
</main><!-- #main -->

<!-- #### Import JS File #### -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<!-- Bootstrap FW - JS -->
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.tabify.js"></script>
<!-- fix extend -->
<script src="assets/js/m-extend/jquery.mobile-events.min.js"></script>
<script src="assets/js/m-extend/m-extend.js"></script>
<!-- slick -->
<script src="assets/js/slick/slick.min.js"></script>
<!-- mcustomscrollbar -->
<script src="assets/js/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="assets/js/nice-select/jquery.nice-select.min.js"></script>

<script type="text/javascript" src="assets/js/owlcarousel/owl.carousel.min.js"></script>


<!-- main -->
<?php require_once 'php/js-file.php';?>
<script src="assets/js/main.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=184134565466481&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- #### /END Import JS File #### -->

</body>
</html>