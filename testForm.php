<!DOCTYPE html>
<html>
<head>

	<?php require_once "includes/component.inc.php"?>

	<?php require_once "includes/style.inc.php"?>
	<script src="includes/manageSpinner.inc.js"></script>
	
	<title>Subscribe To Our Newsletter</title>
	<meta name="author" content="Adedoyin Emmanuel Adeniyi">
	<meta name="keyword" content="A web app that helps to bootstrap development, kickstart your projects today by using blaze, software that opens multiple software, software development, next big thing, bootstraping desktop applications, a software that opens multiple softwares"/>
	<meta name="keyword" content="blaze, full stack application, php, php project, php programming, bootstrap project, bootstraping development blaze web app, BlazeWebApp, BlazeWeb, Blaze, multiple software opener"/>
</head>

<body class="container-fluid p-0 d-flex align-items-center justify-content-center m-auto flex-column" id="body">

	<div  id="spinner" class="">

			<div class="dot-pulse text-danger"></div>

	</div>


	

<iframe width="600" height="600" src="https://bcab6ffd.sibforms.com/serve/MUIEAIa6705MbYbVmZcd7okuj_u63hW6Zxi2OGf1K7J_L8z1ZNcKiBVj9XiIHTdqRIfsh6fR2k33-i4agu7VhWTalgI7mxjR_ERK3gtmr5oT1LdC0BGBHK1Hh2L5P-6uRK8iVXmzKf1HnmlIoayVkH0gVnxJsfeKtZGDL16v165WWJL7g6KrUlvMVogGXebhCxnFgZHPFPL8TBuS" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>
		
	<button class="text-capitalize text-center btn my-5" style="background:lightskyblue;" id="homeButton">
	Home</button>



</body>


<script>

	jQuery(($)=>{
		$.noConflict();

		$("#homeButton").click(()=>{
			location.href="homePage.php";
		})
	})

</script>

</html>


