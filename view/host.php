<!doctype html>
<html lang="en">
<meta charset="utf-8">
<head>
      <!-- Style -->
  <link rel="stylesheet" href="../resources/bootstrap.min.css" />
  <link rel="stylesheet" href="../resources/upload-style.css" />
  <link rel="stylesheet" type="text/css" href="/jquery.datetimepicker.css"/ >
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="../resources/favicon.ico">
  <title>
  HOST center
  </title>
</head>

<body>
    <!-- Body -->

<?php 
session_start();
?>

<div id="hostFormCnt">

<h2 id="welcome">Welcome to your hosting center</h2>
<h4>Enter password, make changes, then press enter or click submit</h4>

<form name="uploadForm" id="hostForm" action="../controller/host-form-post.php" method="post" enctype="multipart/form-data">
<div class="form-group">

<div class="input-group hostPassword">
    <div class="input-group-addon passwordAddon">Enter Password</div>
      <input class="input-lg" type="input" name="passwordInput" value="1234"/><br />
    </div>

<input class="btn btn-primary hostSubmit" type="submit" name="hostSubmitForm" value="Submit Changes" />

<h5 class="note-lg">Changes can take up to 30 seconds to take effect</h5>

<h3>Host Uploads</h3>
<h5 class="note">Host uploads go to the front of the queue | Host uploads have no length and size limits</h5>

    <div class="input-group">
  <div class="input-group-addon">Enter Youtube URL</div>
  <input class="form-control" type="input" name="hostYoutubeInput" /><br />
</div>

<button class="btn" disabled="disabled"><strong>OR</strong></button>

<div class="input-group">
  <div class="input-group-addon">Upload Audio</div>
  <input class="form-control" name="hostAudioInput" type="file" />
</div>

<div class="input-group">
  <div class="input-group-addon">Attach Image</div>
  <input class="form-control" name="hostImageInput" type="file" />
</div>

<button class="btn" disabled="disabled"><strong>OPTIONAL</strong></button>

<div class="input-group">
    <div class="input-group-addon">Start time</div>
      <input class="form-control" type="input" name="hostStart" placeholder="YYYY-MM-DD HH:MM:SSPM" /><br />
    </div>
<h5 class="note">Format is YYYY-MM-DD HH:MM:SSPM | All times are EST (New York Time)</h5>

<h3>Host Settings</h3>

<h5 class="note">Turn Length and Queue to 0 to turn off user uploads</h5>

<div class="input-group">
    <div class="input-group-addon">Headline</div>
      <input class="form-control" type="input" name="hostHeadlineInput" /><br />
    </div>

<div class="input-group">
  <div class="input-group-addon">Background Image</div>
  <input class="form-control" name="hostBackgroundInput" type="file" />
</div>

<h3>Navbar</h3>
<h5 class="note">For Navbar Viewers, enter any HTML you want loaded on click.</h5>
<h5 class="note">Use <a href"http://www.htmlbasix.com/iframe.shtml">this iframe generator</a> to embed websites.</h5>
<h5 class="note">HTML elements are strongly recommended to have max-height and max-width of 100%</h5>

<div class="input-group">
    <div class="input-group-addon">Navbar Viewer Purple</div>
      <input class="form-control" type="input" name="hostNavPurple" /><br />
    </div>

<div class="input-group">
    <div class="input-group-addon">Navbar Viewer Orange</div>
      <input class="form-control" type="input" name="hostNavOrange" /><br />
    </div>

<div class="input-group">
    <div class="input-group-addon">Navbar Viewer Green</div>
      <input class="form-control" type="input" name="hostNavGreen" /><br />
    </div>

<h3>Upload Maintenance</h3>

<div class="input-group">
    <div class="input-group-addon">Max Upload Length in Seconds</div>
      <input class="form-control" type="input" name="hostLengthInput" /><br />
    </div>

<div class="input-group">
    <div class="input-group-addon">Max Queue in Seconds</div>
      <input class="form-control" type="input" name="hostQueueLimitInput" /><br />
    </div>


<div class="input-group">
    <div class="input-group-addon">Remove Queue Item by ID</div>
      <input class="form-control" type="input" name="hostDeleteItem" /><br />
    </div>

<div class="input-group">
    <div class="input-group-addon">Clear Currently Playing</div>
      <input class="checkbox" class="" type="checkbox" name="hostClearCurrent" value="yes" />
</div>

<div class="input-group">
    <div class="input-group-addon">Clear Upcoming Queue</div>
      <input class="checkbox" class="" type="checkbox" name="hostClearQueueInput" value="yes" />
</div>

<h3>Current Queue</h3>
<h5 class="note">Ordered by start time, not by ID</h5>

  <div id="currentQueue">
  <?php 
  include '../model/current-queue.php';
    ?>
  </div>

<div id="reloadQueue" class="btn btn-success">Refresh</div>

<h3>Schedule A Show</h3>

<div class="input-group">
    <div class="input-group-addon">Title</div>
      <input class="form-control" type="input" name="hostShowTitle" /><br />
    </div>

<div class="input-group">
    <div class="input-group-addon">Timeframe</div>
      <input class="form-control" type="input" name="hostShowTimeframe" /><br />
    </div>

<div class="input-group">
    <div class="input-group-addon">Start time</div>
      <input class="form-control" type="input" name="hostShowStart" placeholder="YYYY-MM-DD HH:MM:SSPM"/><br />
    </div>
<h5 class="note">Format is YYYY-MM-DD HH:MM:SSPM | All times are EST (New York Time)</h5>
  
<h3>Scheduled to Play</h3>

  <div id="timedQueue">
  <?php 
  include '../model/timed-queue.php';
    ?>
  </div>

<div id="reloadQueue" class="btn btn-success">Refresh</div>

</div>
</form>
</div>

<!-- Script -->
    <script type="text/javascript" src="../resources/jquery-1.8.3.min.js"></script>
    <script src="../resources/bootstrap.min.js"></script>
    <script type="text/javascript" src="../resources/host-script.js"></script>
    <script src="/jquery.datetimepicker.js"></script>

   </body>
   </html>