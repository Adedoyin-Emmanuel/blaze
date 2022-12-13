<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <title>Blaze For Developers Documentation</title>

    <style>



    </style>
</head>

<body id="body" >
  <script >
    
      setTimeout(()=>{
            swal.fire({
            title:"Blaze For Non Devs",
            text:"Not a developer, read the docs for non developers",
            allowOutsideClick:false,
            allowEscapeKey:false,
            showCancelButton:true,
            cancelButtonText:"Cancel",
            cancelButtonColor:"tomato",
            confirmButtonColor:"lightskyblue",
            confirmButtonText:"Read Non Dev Docs!",




          }).then((willProceed)=>{
            if(willProceed.isConfirmed){
              location.href = "blazeDocsNonDevs.php";
            }
          });
      },3000);

  </script>

    <?php require_once "includes/nav.inc.php";?>
    <div  id="spinner" class="">

            <div class="dot-pulse text-danger"></div>


    </div>

<div class="container-fluid m-auto py-5">

    <h3 class="fs-3 text-capitalize py-3 text-center fw-bold">blaze documentation </h3>

    
        <h5 class="fs-5 text-capitalize px-1">STEP 1=> Operating system</h5>
    <section class="m-auto py-2 py-md-3 px-3">
        The first step to generate the blaze file is to generate the blaze file is to select your operating system, blaze functionalty is the same accross all operating system but for proper configuration, you have to select the operating system your machine is running on
    </section>

      <h5 class="fs-5 text-capitalize px-1">STEP 2=> Code editor</h5>

    <section class="m-auto py-2 py-md-3 px-3">
          You need to have a code editor selected before you can generate any blaze file, we would release another version for non programmers later. we have built blaze to support multiple popular and beginner friendly code editors like vs code, sublime text, brackets, notepad ++, notepad etc.   
    </section>

    <h5 class="fs-5 text-capitalize px-1">STEP 3=> Default Browser</h5>

      <section class="m-auto py-2 py-md-3 px-3">
        We are assuming you are a web developer for you to enable blaze to run the browser of your choice for you when you want to code.. if you aren't a web developer but would love to have multiple tabs of stackover flow pages on your browser, Blaze also supports that.

    </section>

    <h5 class="fs-5 text-capitalize px-1">STEP 4=> default server</h5>

      <section class="m-auto py-2 py-md-3 px-3">
       Step 4 would assume you are a backend developer using PHP, Laravel, Codeigniter, or NODE JS for server side programming, if you would love to start your servers when you launch blaze software, you can also enable this by selecting your server type.

    </section>


    <h5 class="fs-5 text-capitalize px-1">STEP 5=> quick browser tab</h5>

      <section class="m-auto py-2 py-md-3 px-3">
        This feature is for those developers who would love to have stackover flow tabs, github tabs, google tabs opened by default to help aid development. Also for those who would love to have their programming language community tab open by default, you can enable this by typing the URL you want to load automatically, you seperate by commas.

    </section>


    <h5 class="fs-5 text-capitalize px-1">Not a developer ?</h5>

      <section class="m-auto py-2 py-md-3 px-3">
            We've got you covered... there is another version of blaze for non developers, please read the documentation before using it! <a href="blazeDocsNonDevs.php">Blaze for non developers</a>
    </section>





</div>

<?php require_once "includes/footer.inc.php" ?>
</body>

</html>