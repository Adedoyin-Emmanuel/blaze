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

<body id="body">

    <?php require_once "includes/nav.inc.php";?>
    <div  id="spinner" class="">

            <div class="dot-pulse text-danger"></div>


    </div>

<div class="container-fluid text-dark">

<div class="row d-flex py-5  flex-md-row" id="content-contain">

                            
          
        <div class="img-container col p-3 " id="img_container">
                <img src="logo.png" height="400" width="400" class="img-fluid rounded" id="logo_legit">
        </div>
            
        <div class="text-container col  p-3 text-center">

 <h3 class="text-capitalize py-4 m-auto text-center m-auto" id="heading_typing">blaze <img class="img-fluid text-center" src="logo.png" height="40" width="50"></h3>
                
                            <article class="text-capitalize m-auto py-3 quick-desc" id="article">
                                blaze is a free web application that is built for developers to <code class=" fs-6 rounded-1 p-1 text-primary text-danger">BOOTSTRAP</code> development. with blaze, you can get your code editors, servers, files, browsers set up within seconds at a blazing speed 🔥
                            </article>
               
                   
                                       <div class="get_started d-flex flex-column  justify-content-around align-items-start ">
                                


                                        <h5 class="fs-5 text-capitalize text-center my-3" id="nd_type">
                                           let's Get you started!
                                        </h5>

                                        <button class="btn btn-primary m-auto text-center text-capitalize my-2 get_started "><span class="fs-6 get_started">try blaze!</span> <img class="img-fluid get_started" src="logo.png" height="40" width="50" id="get_started"></button>



                        </div>
                </section>
        </div>

</div>

       



</div>




<script>

    function navigate_user (args) {
         location.href = args;
    }
        
    $(document).ready(($)=>{
        $.noConflict();


        $("#get_started, .get_started").click(()=>{

            $("#animation_logo").addClass("logo_animate");
               const $legit_logo = document.getElementById("logo_legit");

                   // Code for Chrome, Safari and Opera
                $legit_logo.addEventListener("webkitAnimationEnd", navigate_user("blaze.php"));

                // Standard syntax
                $legit_logo.addEventListener("animationend", navigate_user("blaze.php"));

              
        });

    });


</script>
<?php require_once "includes/footer.inc.php" ?>
</body>

</html>