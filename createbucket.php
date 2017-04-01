<?php
//copyright 2017 - Robodiaobodia.
//connection string
include 'connecttoaws.php';
// Create a unique bucket name
$bucket = uniqid("robodia", true);
// Create our bucket using our unique bucket name
$result = $client->createBucket(array(
    'Bucket' => $bucket
));
//HTML to Create our webpage
echo "<h1 align=\"center\">Hello Robodia!</h1>";
echo "<div align = \"center\"><img src=\"https://www.google.co.in/search?q=robodia+logo&rlz=1C1GNAM_en-GBIN730IN730&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiU3cnG2YDTAhXIpY8KHWopA9QQ_AUICCgB&biw=1366&bih=676#imgrc=bDwoIf0FphUeDM:\"></img></div>";
echo "<h2 align=\"center\">You have successfully created a bucket called {$bucket}</h2>";
echo "<div align=\"center\"><a href=\"createfile.php?bucket=$bucket\">Click Here to Continue</a></div>";
?>