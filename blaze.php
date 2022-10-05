<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <title>Blaze Intro</title>

    <style>
        
    @media (max-width:567.98px) {
    
        .img_small{
            
        }

        body{
            background: ;
        }

        #content-contain{
            display: flex;
            flex-direction: column;
        }

        #img_container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        
    ul > li.nav-item:hover {
        background: lightblue;
        outline: none;
        border-radius: 20px;
        border: none;
        cursor: pointer;

    }

    ul > li > a: hover{
      border: none;
      outline: none;
    }



    }

    </style>
</head>

<body>
    <?php require_once("includes/nav.inc.php")?>

    <div  id="spinner" class="">

            <div class="dot-pulse text-danger"></div>


    </div>


    <div class="container-fluid m-auto py-5">

                <h4 class="fs-4 text-capitalize text-center my-5">get to know blaze <img src="logo.png" style="width:60px;"></h4>

                <section class="text-capitalize p-4 my-3">
                    before using blaze, we want you to know the basics, <strong>blaze</strong> is a web app designed to bootstrap development, after a series of questions and answers, blaze would generate an executable file which you can download and run.

                    <h5 class="text-capitalize fs-5 py-4">how do i use blaze ?</h5>
                    if you are a developer, you should be familiar with always having to launch you code editor, browsers, servers like (wamp, xampp, node js) etc during development/coding, it could be tedious and that's what Blaze is solving. give it a try 
                    <br/>
                    <button class="btn btn-primary my-4 text-capitalize text-center"><a class="text-decoration-none text-light">use blaze</a><img src="logo.png" style="width: 40px;"></button>
                </section>

    </div>

    

<?php require_once "includes/footer.inc.php" ?>
</body>

</html>