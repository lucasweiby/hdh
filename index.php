<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bower_components/hover/css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
</head>

<body>
  <?php include 'assets/nav.php' ?>

  
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/gdragon.jpg"> <!-- random image -->
      </li>
      <li>
        <img src="img/cl.jpg"> <!-- random image -->
      </li>
      <li>
        <img src="img/bts.jpg"> <!-- random image -->
      </li>
      <li>
        <img src="img/kard.jpg"> <!-- random image -->
      </li>
    </ul>
  </div>

  <?php include 'assets/countdown.php' ?>

  <?php include 'assets/about.php' ?>

  <?php include 'assets/contact.php' ?>

  <?php include 'assets/footer.php' ?>

  <a href="#" class="scrollToTop btn-floating btn-large waves-effect waves-light"><i class="material-icons">arrow_upward</i></a>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bower_components/materialize/dist/js/materialize.min.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  <!-- FUNCTIONS -->
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" src="js/function_countdown.js"></script>
</body>
</html>