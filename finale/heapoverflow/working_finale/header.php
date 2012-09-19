<?php
    header( "Content-Type: text/html; charset=utf-8" );
    include "db.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<script type="text/javascript" src="jquery-1.7.1.js"></script>
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".login").hover(function() {
			$(this).attr("src","images/login_hover.png");
				}, function() {
			$(this).attr("src","images/login.png");
		});
	});
	</script>
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".register").hover(function() {
			$(this).attr("src","images/register_hover.png");
				}, function() {
			$(this).attr("src","images/register.png");
		});
	});
	</script>
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".view_topics").hover(function() {
			$(this).attr("src","images/view_topics_hover.png");
				}, function() {
			$(this).attr("src","images/view_topics.png");
		});
	});
	</script>
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".help").hover(function() {
			$(this).attr("src","images/help_hover.png");
				}, function() {
			$(this).attr("src","images/help.png");
		});
	});
	</script>		
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".create_topic").hover(function() {
			$(this).attr("src","images/create_topic_hover.png");
				}, function() {
			$(this).attr("src","images/create_topic.png");
		});
	});
	</script>
	</script>		
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".logout").hover(function() {
			$(this).attr("src","images/logout_hover.png");
				}, function() {
			$(this).attr("src","images/logout.png");
		});
	});
	</script>	
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".vote_up").hover(function() {
			$(this).attr("src","images/vote-up.png");
				}, function() {
			$(this).attr("src","images/no-vote-up.png");
		});
	});
	</script>	
	<script  type='text/javascript'>
	$(document).ready(function(){
		$(".vote_down").hover(function() {
			$(this).attr("src","images/vote-down.png");
				}, function() {
			$(this).attr("src","images/no-vote-down.png");
		});
	});
	</script>
        <title>HeapOverflow</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div class="universe">
            <h1><a href="index.php">Heap Overflow</a></h1>
            <div class="content">
			
