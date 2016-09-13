<!DOCTYPE html>
<html>
<head>
<title>Curriculum vitae<?php if(isset($_SESSION['auth'])) echo ' - '. $_SESSION['auth']['email']?></title>

<!-- CSS -->

<!-- bootstrap -->
<link href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url()?>assets/bootstrap/css/style.css" rel='stylesheet' type='text/css' />
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/readable/bootstrap.min.css" rel="stylesheet" integrity="sha384-/x/+iIbAU4qS3UecK7KIjLZdUilKKCjUFVdwFx8ba7S/WvxbrYeQuKEt0n/HWqTx" crossorigin="anonymous"> -->
<!-- /bootstrap -->

<!-- font-awesome -->
<link rel="stylesheet" type='text/css' href="<?=base_url()?>assets/font-awesome/css/font-awesome.css">
<!-- font-awesome -->
<!-- /CSS -->

<!-- Ckeditor -->
<script src="<?= base_url()?>assets/ckeditorFull/ckeditor.js"></script>
<!-- /Ckeditor -->

</head>
<body>
	