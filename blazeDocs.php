<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <title>About Blaze</title>

    <style>
        


    </style>
</head>

<body id="body" >

    <?php require_once "includes/nav.inc.php";?>
    <div  id="spinner" class="">

            <div class="dot-pulse text-danger"></div>


    </div>

<div class="container-fluid m-auto py-5">

    <h3 class="fs-3 text-capitalize py-3 text-center">blaze documentation </h3>

    
        <h5 class="fs-5 text-capitalize px-1">STEP 1=> Operating system config</h5>
    <section class="m-auto py-2 py-md-3 px-3">
        The first step to generate the blaze file is to generate the blaze file is to select your operating system, blaze functionalty is the same accross all operating system but for proper configuration, you have to select the operating system your machine is running on
    </section>

      <h5 class="fs-5 text-capitalize px-1">STEP 2=> Code editor config</h5>

    <section class="m-auto py-2 py-md-3 px-3">
          you need to have a code editor selected before you can generate any blaze file, for now blaze is focused on programmers, we would release another version for non programmers later. we have built blaze to support multiple popular and beginner friendly code editors.   
    </section>

    <h5 class="fs-5 text-capitalize px-1">STEP 3=> Default Browser Config</h5>

      <section class="m-auto py-2 py-md-3 px-3">
        We are assuming you are a web developer for you to enable blaze to run the browser of your choice for you when you want to code.. if you aren't a web developer but would love to have multiple tabs of stackover flow pages on your browser, Blaze also supports that.

    </section>

    <h5 class="fs-5 text-capitalize px-1">STEP 4=> default server config</h5>

      <section class="m-auto py-2 py-md-3 px-3">
       Step 4 would assume you are a backend developer using PHP, Laravel, Codeigniter, or NODE JS for server side programming, if you would love to start your servers when you launch blaze file, you can also enable this by selecting your server type.

    </section>


    <h5 class="fs-5 text-capitalize px-1">STEP 5=> quick browser tab config</h5>

      <section class="m-auto py-2 py-md-3 px-3">
        This feature is for those developers who would love to have stackover flow tabs, github tabs, google tabs opened by default to help aid development. Also for those who would love to have their programming language community tab open by default, you can enable this by typing the URL you want to load automatically, you seperate by commas.

    </section>


    <h5 class="fs-5 text-capitalize px-1">Not a developer ?</h5>

      <section class="m-auto py-2 py-md-3 px-3">
            Wait for blaze 2.0, we would support all the apps you want to start by default when you want to work.... Till then, read more about <a class="text-uppercase text-decoration-none" href="homePage.php">BLAZE</a>
    </section>





</div>

<?php require_once "includes/footer.inc.php" ?>
</body>

</html>