<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Namaste</title>

<link href="<?php echo URL; ?>/css/dash.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo URL; ?>/js/jq.js"></script>

<!--<script type="text/javascript" src="<?php echo URL; ?>/js/modernizr.custom.04022.js"></script>
<!--[if lt IE 9]>
<style>
.content{
height: auto;
margin: 0;
}
.content div {
position: relative;
}
</style>
<![endif]-->

</head>
<body>
<div class="container">
	<?php if($login->isUserLoggedIn()) {
    require 'links/admin/menu.php';
} ?>