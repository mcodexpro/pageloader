<?php
   ini_set("error_reporting", 1);
   header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
   header("Cache-Control: pre-check=0, post-check=0", false);
   header("Pragma: no-cache");

   if ( $_GET["rel"]!="page") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Without refresh change url and content</title>
   <link rel="stylesheet" href="./src/style.css">
</head>
<body>
   <div class="menu">
      <a href="index" rel="page">Home</a>
      <a href="about" rel="page">About</a>
      <a href="contact" rel="page">Contact</a>
   </div>
   <div class="content" id="load">
<?php } ?>