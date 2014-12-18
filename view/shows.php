<!doctype html>
<html lang="en">
<meta charset="utf-8">
<head>
      <!-- Style -->
  <!-- <link rel="stylesheet" href="../resources/tools/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="../resources/shows-style.css" />
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
    <!-- Body -->

<div id="showsWrp">


  <?php
  include '../model/host-model.php';
  ?>

<h1 id="current-show-name">
  <?php
  echo $host['showName'];
  ?>
</h1>
<p class="event" id="current-show-description">
  <?php
  echo $host['showDescription'];
  ?>
</p>

<h1 id="upcoming-headline">Upcoming</h1>
<div id="upcoming">
  <?php
  include '../model/upcoming.php';
  ?>
</div>

  <div id="appeal">
  <h1 id="appeal-headline">Seeking Hosts</h1>
  <p class="appeal">Want to host the room for a few hours?</p>
  <p class="appeal">goosetube on skype</p>
  <p class="appeal">goosepostbox@gmail.com</p>
  </div>

</div>

<!-- Script -->
    <!-- <script type="text/javascript" src="../resources/tools/jquery-1.8.3.min.js"></script> -->
    <!-- <script type="text/javascript" src="../resources/tools/bootstrap.min.js"></script> -->
    <!-- <script type="text/javascript" src="../resources/script.js"></script> -->

   </body>
   </html>