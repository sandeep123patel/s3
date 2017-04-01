<?php
//Copyright 2017 Robodia
//Connection string
include 'connecttoaws.php';
/*
Files in Amazon S3 are called "objects" and are stored in buckets. A specific
object is referred to by its key (or name) and holds data. In this file
we create an object called robodia.txt that contains the data 
'Hello Robodia!'
and we upload/put it into our newly created bucket.
*/
//get the bucket name
$bucket = $_GET["bucket"];
//create the file name
$key = 'robodia.txt';
//put the file and data in our bucket
$result = $client->putObject(array(
    'Bucket' => $bucket,
    'Key'    => $key,
    'Body'   => "Hello Robodia!"
));
//HTML to create our webpage
echo "<h2 align=\"center\">File - $key has been successfully uploaded to $bucket</h2>";
echo "<div align = \"center\"><img src=\"https://www.google.co.in/search?q=robodia+logo&rlz=1C1GNAM_en-GBIN730IN730&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiU3cnG2YDTAhXIpY8KHWopA9QQ_AUICCgB&biw=1366&bih=676#imgrc=bDwoIf0FphUeDM:\"></img></div>";
echo "<div align = \"center\"><a href=\"readfile.php?bucket=$bucket&key=$key\">Click Here To Read Your File</a></div>";
?>