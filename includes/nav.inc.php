<style>
  


.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color:white;

}


  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  .sidenav::-webkit-scrollbar{
    width:5px;
    height:5px;
    background:#121212;

  }

  .sidenav::-webkit-scrollbar-thumb{
    border-radius:10px;
    opacity:.7;
    background:dodgerblue;
    width:2px;
  }

   .sidenav::-webkit-scrollbar-button{
    display:none;
   }

   .sidenav::-webkit-scrollbar-corner{
    display: none;
   }

    ul >li{
      list-style-type: none;
    }

    ul > li.nav-item:hover {
        background: lightblue;
        outline: none;
        border-radius: 23px;
        border: none;
        cursor: pointer;


    }

    ul > li > a.nav-link: hover{
      border: none;
      outline: none;
    }
    ul > li > a.nav-link{
      border: none;
      padding: 12px;
      outline: none;
      margin: auto;

    }

    .bg-cs{
      background: lightskyblue;
    }


</style>
<nav class="hor-nav w-100  " style="position:fixed; width:100%; z-index:1000;">


<ul class="nav d-flex align-items-start justify-content-start px-3" style=" background: lightblue;">
<span class="                                                                           text-light text-center p-1 my-1  rounded-3 d-md-none" style="cursor:pointer; width:40px; height:40px; font-size:20px; background: gray;" onclick="openNav()">&#9776</span>
<div id="mySidenav" class="sidenav bg-primary">
  
  <a href="javascript:void(0)" class="closebtn  text-center text-danger" onclick="closeNav()">&times;</a>

  <h4 class="text-capitalize text-center bg-transparent " id="nav_text_sm" style="color: white;">Blaze <img src="./logo.png" width="40px"></h4> 
     <!--  <ul>
 --> 
 <br/>



        <li class="nav-item py-3 ">



        
          <a class="nav-link  text-capitalize text-light px-3" id="home" href="homePage.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house text-light mx-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg> 
            Home


          </a>

        </li>

 

  <li class="nav-item py-3">
    <a class="nav-link text-capitalize text-light px-3" id="docs" href="blazeDocs.php">

          
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen mx-2" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
      </svg>
    Docs</a>
  </li>
 
   <li class="nav-item py-3 modes" id="mode">
    <a class="nav-link text-capitalize text-light px-3"  href="#">


        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lamp mx-2" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z"/>
          <path d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.052.075l-.001.004-.004.01V14l.002.008a.147.147 0 0 0 .016.033.62.62 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411Z"/>
        </svg>
    Mode</a>
  </li>


  <li class="nav-item py-3">
    <a class="nav-link text-capitalize text-light px-3" id="aboutUs" href="about.php">

                 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book mx-2" viewBox="0 0 16 16">
        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
      </svg>

    About </a>
  </li>

     <li class="nav-item py-3">
    <a class="nav-link text-capitalize text-light px-3" id="support" href="#">

         
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share mx-2" viewBox="0 0 16 16">
          <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
        </svg>

    Support</a>
  </li>




<!-- </ul> -->
</div>
<li class="nav-item  m-auto text-center d-md-none">
    <div class="text-capitalize py-2 text-light fs-5">Blaze  <img src="./logo.png" width="40px"></div>
  </li>
</ul>
<!-- big screen nav -->
<ul class="nav nav-tabs d-flex align-items-center justify-content-around big_screen_nav d-sm-none d-md-flex" style="background: lightskyblue;">
    <a class="navbar-brand text-light px-2" href="homePage.php">
                     <img src="logo.png" alt="blaze logo" style="width:60px;">
                 </a>

            <li class="nav-item big_screen">
                  <a class="nav-link  text-capitalize text-light" style="border:none; outline:none">

                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house text-light mx-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg> 
                  Home</a>
            </li>

            <li class="nav-item big_screen">
                  <a class="nav-link  text-capitalize text-light"  style="border:none; outline:none" href="about.php">

                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book mx-2" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
                  About</a>
            </li>

              <li class="nav-item big_screen">
                  <a class="nav-link  text-capitalize text-light" style="border:none; outline:none" href="blazeDocs.php">


                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-pen mx-2" viewBox="0 0 16
                  16"> <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707
                  1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0
                  0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0
                  1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5
                  0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1
                  1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764
                  3.057 3.057-.764L14.44 3.854a.5.5 0 0 0
                  0-.708l-1.585-1.585z"/> </svg>

                  Docs</a>
            </li>

              <li class="nav-item big_screen modes">
                  <a class="nav-link  text-capitalize text-light" style="border:none; outline:none">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lamp mx-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z"/>
                    <path d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.052.075l-.001.004-.004.01V14l.002.008a.147.147 0 0 0 .016.033.62.62 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411Z"/>
                  </svg>
                  Mode</a>
            </li>

              <li class="nav-item big_screen">
                  <a class="nav-link  text-capitalize text-light" style="border:none; outline:none">

                           
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share mx-2" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                  </svg>
                  Support</a>
            </li>



</ul>
</nav>


<style>
  

  .nav-item{
    border:none;
  }




  @media (max-width: 576px) {
    .big_screen_nav{
      display: none !important;
    }
 
  }
</style>

<script>
  


    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }   

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }



    

    $(document).ready(($)=>{


    function darkMode(){




          //get all the elements
        let $mainBody = $(".container-fluid, #body, #heading_typing, .quick-desc, #nd_type, .sidenav, #article, .section, #section, .option, h1, h3, h4, h5, h6, #btn-toggle, .card, table, td, th");

      
        let $footer = $("#footer");
        let $footer_desc =  $("#footer_text");

        
        let $sideNav = $("#mySidenav");
        $sideNav.addClass("text-light");
        $sideNav.removeClass("bg-primary");
        $sideNav.css({"background":"#121117", "color":"#fff"});
        $("#form").addClass("bg-dark");
        $("#form").css({"border":"none"});

        $("#waitlist").removeClass("text-dark");
        $("#waitlist").addClass("text-light");
        $("#waitlist").removeClass("bg-light");
        $("#waitlist").addClass("bg-dark");
        $("select,#input").removeClass("text-dark");
        $("select,#input").addClass("text-light");

        $("select,#input").css({"background":"#343a40 ","border":"none"});

       // $(".accordion-item").css({"background":"#121117", "color":"#fff"});
        // $(".input").css({"-webkit-box-shadow": "0 0 0 30px #343a40  inset !important"});
        $mainBody.css({"background":"#121117", "color":"#fff"});

              
    }


    function lightMode(){




          //get all the elements
        let $mainBody = $(".container-fluid, #body, #heading_typing, .quick-desc, #nd_type, .sidenav, #article, .section, #section, .option, h1, h3, h4, h5, h6, #btn-toggle, .card, table, td, th");

        let $sideNav = $("#mySidenav");
        
        $sideNav.addClass("text-light");
        $sideNav.css({"color":"white"});
        $sideNav.addClass("bg-primary");

        $("#nav_text_sm").css({"color":"white","background":"none"});
        $("#nav_text_sm").addClass("text-light"); 
        document.body.style.background = "azure";
        $("#form").removeClass("bg-dark");
        $("#waitlist").removeClass("text-light");
        $("#waitlist").addClass("text-dark");
        $("#waitlist").removeClass("bg-dark");
        $("#waitlist").addClass("bg-light");

        $("#form").addClass("shadow-sm");
        $("#form").css({"border":"1px solid black"});

        $("select,#input").removeClass("text-light");
        $("select,#input").addClass("text-dark");

        $("select,#input").css({"background":"aliceblue","border":"1px solid grey"});

        // $(".input").css({"-webkit-box-shadow": "0 0 0 30px azure inset !important"});
        $mainBody.css({"background":"azure", "color":"#000"});

      
    }



       setInterval(()=>{

           let $mode = localStorage.getItem("ModeToggle") || "light";
       
            if($mode === "dark"){

              darkMode();
              
            }else{
              lightMode();
            }

       },100);

        $(".modes, #mode").click(()=>{
         $mode = localStorage.getItem("ModeToggle");
             if($mode === "dark"){

              darkMode();
              localStorage.setItem("ModeToggle", "light");
              //location.reload();
              
            }else{

              lightMode();
              localStorage.setItem("ModeToggle", "dark");
              //location.reload();
            }

                                
        });








    });



</script>
