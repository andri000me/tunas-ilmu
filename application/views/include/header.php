<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
    <title>Tunas Ilmu</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/img/favicon.png">
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/pages/signin.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url() ?>assets/css/pages/dashboard.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/pages/reports.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/style-gue.css" rel="stylesheet">
	<script src="<?php echo config_item('js'); ?>jquery.min.js"></script>
	<script>
		var habiscuy;
		$(document).on({
			ajaxStart: function() { 
				habiscuy = setTimeout(function(){
					$("#LoadingDulu").html("<div id='LoadingContent'><i class='fa fa-spinner fa-spin'></i> Mohon tunggu ....</div>");
					$("#LoadingDulu").show();
				}, 500);
			},
			ajaxStop: function() { 
				clearTimeout(habiscuy);
				$("#LoadingDulu").hide(); 
			}
		});
	</script>

</head>
<body>
	<div id='LoadingDulu'></div>