<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <title>Blaze For Non Developers Documentation</title>

    <style>
        


    </style>
</head>

<body id="body" >
  <script >
    setTimeout(()=>{

        swal.fire({
          title:"Blaze For Devs",
          text:"Are you a developer?",
          allowOutsideClick:false,
          allowEscapeKey:false,
          showCancelButton:true,
          cancelButtonText:"Cancel",
          cancelButtonColor:"tomato",
          confirmButtonColor:"lightskyblue",
          confirmButtonText:"Read Dev Docs!",




        }).then((willProceed)=>{
          if(willProceed.isConfirmed){
            location.href = "blazeDocs.php";
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

    
        <h5 class="fs-5 text-capitalize px-1">STEP 1=> Operating system </h5>
    <section class="m-auto py-2 py-md-3 px-3">
        The first step to generate the blaze file is to generate the blaze file is to select your operating system, blaze functionalty is the same accross all operating system but for proper configuration, you have to select the operating system your machine is running on
    </section>

      <h5 class="fs-5 text-capitalize px-1">STEP 2=> Quick browser tab </h5>

    <section class="m-auto py-2 py-md-3 px-3">
          This isn't mandatory but you can specify the websites you want to launch once you start Blaze software. Eg netflix.com, youtube.com, web.facebook.com, web.whatsapp.com etc.
    </section>

    <h5 class="fs-5 text-capitalize px-1">STEP 3=> Default Application Configuration</h5>

      <section class="m-auto py-2 py-md-3 px-3">
        <p class="fw-bold py-3">Step 1</p>
       At this point, you have to copy the absolute path where the software lies
        <p class="fw-bold py-3">Step 2</p>
       You also have to enter the name of the application and its extension usually (exe) for windows, you can do this for up to 6 different applications

       <p class="text-danger">Please not it isn't mandatory to do this for all 6 applications, you can configure for at least 2 different softwares!</p>
    </section>

    <button class="btn btn-lg bg-cs">
      <a href="blazeNonDev.php" class="text-capitalize text-light">use blaze!</a>
    </button>


    <h5 class="fs-5 text-capitalize px-1">Are you a developer ?</h5>

      <section class="m-auto py-2 py-md-3 px-3">
            Great! There is a special version of blaze for developers <a class="text-uppercase text-decoration-none" href="blaze.php">Blaze for developers</a>
    </section>





</div>

<?php require_once "includes/footer.inc.php" ?>
</body>

</html>