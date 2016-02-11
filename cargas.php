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
  <script src="https://cdn.jsdelivr.net/bootstrap.filestyle/1.1.0/js/bootstrap-filestyle.min.js"></script>
</head>
<body>

<div class="page-header">
  <h1>Demo de carga asincrona <small> y previo de imagen sin carga de imagen</small></h1>
</div>

<?php
foreach(glob('./temp/*.*') as $file) {
?>
<div class="media">
  <div class="media-left media-middle">
    <a href="<?php echo $file ?>">
      <img class="media-object" width="150" height="150" src="<?php echo $file ?>" alt="<?php echo str_replace("./temp/", "", $file) ?>">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo str_replace("./temp/", "", $file)." (".number_format(((filesize($file)/1024)/1024),2)."MB)" ?></h4>
  </div>
</div>
<?php
} ?>

