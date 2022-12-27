<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4GPGZ5DFP8"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-4GPGZ5DFP8');
	</script>
    <title>Join Waitlist</title>

    <style>
        


    </style>


    <script src="includes/formHandle.inc.js"></script>
</head>

<body id="body" >

    <?php require_once "includes/nav.inc.php";?>
    <div  id="spinner" class="">

            <div class="dot-pulse text-danger"></div>


    </div>

<div class="container-fluid text-dark">

<div class="row d-flex py-5  flex-md-row" id="content-contain">


        <div class="img-container col p-3 " id="img_container">
                <img src="images/waitlist.png" height="" width="550" class="img-fluid bg-transparent" id="logo_legit">
        </div>
            
        <div class="text-container col  p-3 ">

 <h3 class="text-capitalize py-1 m-auto text-center m-auto my-3" id="heading_typing">Join waitlist<img class="img-fluid text-center" src="logo.png" height="40" width="50"></h3>
                
                            <article class="text-capitalize py-3 quick-desc m-auto" id="article">
                                
                             <span class="text-capitalize text-center m-auto d-block">
                                    do you want to be the first to try out blaze and its never ending benefits ? if yes, join the waitlist now

                             </span>

                                <br/>

                            <form  method="post" class="waitlist_email d-flex flex-column flex-wrap">

                                

                               
                                <label for="email" class="py-2 text-capitalize text-center px-5">enter your email:</label>
                             <!--     <input type="email" name="" class=" m-auto rounded m-control w-75 p-2 px-2 text-light text-sm " placeholder="enter your email" name="email" id="waitlist"> -->
                             <input type="email" class="form-control form m-auto w-75 p-3 px-4 text-dark small" id="exampleFormControlInput1" placeholder="name@example.com" name="email" id="waitlist"required>
                                   

                                 <button class="btn bg-cs border-0 btn-dark text-capitalize my-3 form m-auto">join waitlist</button>



                          </form>

                            </article>
               
              
                </section>
        </div>


                                        
</div>
</div>     
  

<?php require_once "includes/footer.inc.php" ?>
</body>

</html>