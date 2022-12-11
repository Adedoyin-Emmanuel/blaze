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
        


    .carousel {
      margin-bottom: 4rem;
    }
  
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }
    .carousel-item {
      height: 32rem;
    }


    </style>
</head>

<body id="body" >

    <?php require_once "includes/nav.inc.php";?>
    <div  id="spinner" class="">

            <div class="dot-pulse text-danger"></div>


    </div>

<!-- hero section -->

<div class="container-fluid text-dark col-xl-12 col-xxl-8 px-2 py-5" style="overflow-x:hidden" id="hero">


    <div class="row align-items-center g-lg-5 g-md-3 py-5 justify-content-around my-md-2">

      <div class="col-md-6 col-sm-8 col  mx-auto col-lg-5 d-flex align-items-center m-auto my-md-2 my-5" id="img-container">

          <img src="logo.png" class="img-fluid m-auto" >


      </div>


      <div class="col-lg-7 text-center text-lg-start my-md-3">
        <h1 class="display-6 fw-bold  lh-1 mb-3 text-capitalize text-start text-md-center text-lg-start px-2 px-md-0">Launch multiple softwares at once</h1>
        <p class="col-lg-10 fs-5 p-2 text-start text-lg-start text-dark">Blaze is a free web application built to bootstrap development. with blaze, you can get your code editors, servers, files, browsers set up within seconds at a blazing speed 🔥</p>

          <button class="btn btn-primary bg-cs border-0 btn-lg text-capitalize mx-md-2 get_started">Join the waitlist</button>

      </div>


    </div>

  
  </div>



<!-- second hero section -->
  <div id="myCarousel" class="carousel slide bg-cs-caurosel" data-bs-ride="carousel" data-bs-config='{"interval":2000,"ride":carousel}'>
    <div class="carousel-indicators" >
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner bg-cs-caurosel">

      <div class="carousel-item active bg-cs-caurosel">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" class="p-0 m-0 wave" style="overflow-x: hidden;"><path fill="#fff" fill-opacity="1" d="M0,64L720,160L1440,96L1440,0L720,0L0,0Z"></path></svg>
        <div class="container">

          <div class="carousel-caption text-start">
            <h2 class="fs-2 text-capitalize py-md-5 py-3 fw-bold">open multiple softwares with blaze!</h2>
            <p class="fs-5 py-3">With blaze, you can open multiple software applications at once!</p>
            <p><a class="btn btn-lg btn-light text-dark" href="#">Join the waitlist</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item bg-cs-caurosel">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" class="p-0 m-0 wave" style="overflow-x: hidden;"><path fill="#fff" fill-opacity="1" d="M0,64L720,160L1440,96L1440,0L720,0L0,0Z"></path></svg>
        <div class="container">
          <div class="carousel-caption">
            <h2 class="fs-2 text-capitalize py-md-5 fw-bold">Built for every computer user!</h2>
            <p class="fs-5 py-3">Yes! blaze was built for developers and non developers</p>
            <p><a class="btn btn-lg btn-light text-dark" href="#">Learn more</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item bg-cs-caurosel">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" class="p-0 m-0 wave" style="overflow-x: hidden;"><path fill="#fff" fill-opacity="1" d="M0,64L720,160L1440,96L1440,0L720,0L0,0Z"></path></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h2 class="fs-2 text-capitalize py-md-5 fw-bold">Software with minimal configurations!</h2>
            <p class="fs-5 py-3">With minimal or zero configurations, you can start using blaze today!</p>
            <p><a class="btn btn-lg btn-light text-dark" href="#">Read the docs!</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item bg-cs-caurosel">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" class="p-0 m-0 wave" style="overflow-x: hidden;"><path fill="#fff" fill-opacity="1" d="M0,64L720,160L1440,96L1440,0L720,0L0,0Z"></path></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h2 class="fs-2 text-capitalize py-md-5 fw-bold">Built with rich features for developers</h2>
            <p class="fs-5 py-3">Are you a developer? Yes, Blaze was built with rich support for developers :)</p>
            <p><a class="btn btn-lg btn-light text-dark" href="#">Read the docs!</a></p>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




        <div class="faqs my-5 py-5 ">
             <h3 class="text-capitalize fs-3 my-4 text-md-right text-sm-center p-2">frequently asked questions (FAQ's)</h3>

            <div class="accordion " id="accordionExample" >
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button text-capitalize " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         What is blaze ?
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body text-capitalize">
                        <strong>blaze</strong> is a free web application that is built for developers to  bootstrap  development.
                      </div>
                    </div>
                  </div>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Is Blaze Free ? 
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-capitalize">
                   There would always be a free version of <strong>Blaze 😋</strong>
                  </div>
                </div>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How do i use blaze ?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-capitalize">
                          <strong>blaze</strong> isn't complicated to use, blaze would build based on your preference, you ask for it, blaze does the development for you, the technology works based on users preference, we've got you covered.
                  </div>
                </div>
              </div>





              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                       How can i contribute to blaze ? 
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-capitalize">
                          you can contribute to <strong>blaze</strong> in many ways, you can build along with us but you have to join our community and you would be reviewed for that. Otherwise you can help share the gosple of blaze and the never ending benefits it offers to developers and non developers.
                  </div>
                </div>
              </div>





              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed text-capitalize" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                         who developed blaze
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-capitalize">
                         <strong>Blaze</strong> was developed by <a href="https://www.facebook.com/adedoyin.emmanuel.180">Adedoyin Emmanuel </a> a full stack developer, game developer and a passion oriented developer
                  </div>
                </div>
              </div>






</div>     

</div>
</div>
</div>



      <div class="container-fluid bg-cs-caurosel p-0">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" class="p-0 m-0 " style="overflow-x: hidden;"><path fill="#fff" fill-opacity="1" d="M0,64L120,85.3C240,107,480,149,720,144C960,139,1200,85,1320,58.7L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
          <h2 class="text-capitalize text-center text-light fw-bold">contact us!</h2>

      <form class="form m-auto p-3">
        <div class="mb-3">
          <label for="name" class="form-label text-capitalize">full name</label>
          <input type="name" class="form-control p-3" id="name" aria-describedby="nameHelp">
          
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-capitalize">email address</label>
          <input type="email" class="form-control p-3" id="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        
        <button type="submit" class="btn btn-light">Submit</button>
    </form>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319" class="p-0 m-0"><path fill="#fff" fill-opacity="1" d="M0,192L720,128L1440,96L1440,320L720,320L0,320Z"></path></svg>
      </div>

<script>

    function navigate_user (args) {
         location.href = args;
    }
        
    $(document).ready(($)=>{
        $.noConflict();


        $(".get_started").click(()=>{
            navigate_user("waitlist.php");
        });

    });


</script>
<?php require_once "includes/footer.inc.php" ?>
</body>

</html>