<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>carga de archivos</title>
  <!-- Bootstrap Table -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script src="resumable.js"></script>
  <script src="loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
foreach(glob('./temp/*.*') as $file) {
    echo "<a href='".$file."'>".str_replace("./temp/", "", $file)." (".number_format(((filesize($file)/1024)/1024),2)."MB)</a><br>";
}
