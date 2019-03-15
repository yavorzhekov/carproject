<?php
include 'db.php';
include 'functions.php';

$newsTitle=saveFields($_POST['title']);
$newsDate=saveFields($_POST['date']);
$newsPic=saveFields($_POST['picture']);
$newsContent=saveFields($_POST['content']);

$sql="INSERT INTO news(news_heading, news_date, news_pic, news_text)
 VALUES ('".$newsTitle."','".$newsDate."','".$newsPic."','".$newsContent."')";

$result=mysqli_query($linkDB,$sql);
header('Location: allnews.php?');
?>