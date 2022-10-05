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

                <section class="text-capitalize p-4 my-3 m-auto section">
                    before using blaze, we want you to know the basics, <strong>blaze</strong> is a web app designed to bootstrap development, after a series of questions and answers, blaze would generate an executable file which you can download and run.

                    <h5 class="text-capitalize fs-5 py-4">how do i use blaze ?</h5>
                    if you are a developer, you should be familiar with always having to launch you code editor, browsers, servers like (wamp, xampp, node js) etc during development/coding, it could be tedious and that's what Blaze is solving. give it a try 
                    <br/>
                    <button class="btn btn-primary my-4 text-capitalize text-center"><a class="text-decoration-none text-light">use blaze</a><img src="logo.png" style="width: 40px;"></button>
                </section>


                <section class="use_blaze text-capitalize" id="section">

                  <form class="p-5  rounded-3  m-auto form" method="post" action="" id="form" autocomplete="off" enctype="multipart/form-data">
            <h4 class="fs-4 text-center text-capitalize py-2">Blaze Setup⚡</h4>
            <div class="text-light fw-2 text-center d-flex align-items-center justify-content-center m-auto rounded-3 p-2 d-none" id="error_alert" style="background: tomato; ">
                <!-- *This is an error message* -->
            </div>
      
            <div class="form-group my-4">
                  <label for="operatingSystem" class="text-capitalize py-2">Select your operating system</label>
                  <select class="form-control text-light" id="sel1" style="background: #343a40 " name="operating_system">
                    <option class="px-2 text-capitalize text-center" value="0">-SELECT-</option>
                    <option class="px-2 text-capitalize " value="1">windows OS</option>
                    <option class="px-2 text-capitalize " value="2">Linux OS</option>
                    <option class="px-2 text-capitalize " value="3">Chromebook OS</option>
                    <option class="px-2 text-capitalize " value="4">Mac OS</option>
                  </select>
            </div>

            <div class="form-group my-4">
                <label for="productDescription" class="text-capitalize py-2">product description</label>
                <input type="text" name="productDesc" class="form-control text-light text-start text-capitalize input" style="background:#343a40;" id="productDesc"  placeholder="Enter product description." autocomplete="off" required />
                
            </div>

            <div class="form-group my-4">
                <label for="productPicture" class="text-capitalize py-2">product picture</label>
                <input type="file" name="productImg" class="form-control text-light" style="background: #343a40;" id="productImg" required>
            </div>

            <div class="form-group my-2">
                
                    <button class="btn btn-danger text-center text-capitalize" name="submit" id="submit">
                    <span class="spinner-border spinner-border-sm  bg-primary d-none" id="spinner"></span>  
                    add product
                    </button>
                

            </div>
        </form> 

                    
                </section>

    </div>

    

<?php require_once "includes/footer.inc.php" ?>
</body>

</html>