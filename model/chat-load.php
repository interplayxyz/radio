<div id="chatFade">

<?php 

include '../connect.php';

// Get chat data
$query = "SELECT *
        from chat
        ORDER BY id DESC;";
if ($result = mysqli_query($con, $query))
{
          while($row = mysqli_fetch_assoc($result)) 
          {
                  if (! $row['name'] == "" && ! $row['message'] == "") {
                    $message = $row['message'];
                    $message = htmlentities($message);
                    $message = preg_replace("/([\w]+:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/i","<a target=\"_blank\" href=\"$1\">$1</a>", $message);
// Prevent running html
// Load name and message
                    echo '<font class="chatName"><strong>'.$row['name'].' </strong></font>
                    <font class="timestamp"> on '.$row['timestamp'].' EST</font>
                    
                    <font class="chatMsg">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    '.nl2br($message).'</font>';
                    }
          }
}

?>

</div>