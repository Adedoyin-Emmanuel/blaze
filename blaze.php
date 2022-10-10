<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <script src="includes/blazeForm.inc.js"></script>
    <title>Blaze</title>

    <style>
        @media (max-width:567.98px) {

            .img_small {}

            body {
                background: ;
            }

            #content-contain {
                display: flex;
                flex-direction: column;
            }

            #img_container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }


            ul>li.nav-item:hover {
                background: lightblue;
                outline: none;
                border-radius: 20px;
                border: none;
                cursor: pointer;

            }

            ul>li>a: hover {
                border: none;
                outline: none;
            }



        }
    </style>
</head>

<body>
    <?php require_once("includes/nav.inc.php") ?>

    <div id="spinner" class="">

        <div class="dot-pulse text-danger"></div>


    </div>


    <div class="container-fluid m-auto py-5">
        <button class="btn btn-secondary text-center rounded-3 my-2"><a href="homePage.php" class="text-decoration-none text-light "><strong>&lt; &lt;</strong></a></button>
        <h4 class="fs-4 text-capitalize text-center my-5">get to know blaze <img src="logo.png" style="width:60px;"></h4>

        <section class="text-capitalize p-4 my-3 m-auto section">
            before using blaze, we want you to know the basics, <strong>blaze</strong> is a web app designed to bootstrap development, after a series of questions and answers, blaze would generate an executable file which you can download and run.

            <h5 class="text-capitalize fs-5 py-4">how do i use blaze ?</h5>
            if you are a developer, you should be familiar with always having to launch you code editor, browsers, servers like (wamp, xampp, node js) etc during development/coding, it could be tedious and that's what Blaze is solving. give it a try

            <section>
                <strong>Note:</strong>
                blaze would configure the executable file for you based on what you select (your preference), please try not to select what you don't use or isn't available on your system. <strong class="text-capitalize">for example</strong>, if you aren't a backend developer, you wouldn't need to configure blaze to start your server when you want to code.
            </section>
            <br />
            <button class="btn btn-primary my-4 text-capitalize text-center"><a class="text-decoration-none text-light" href="#blaze">use blaze</a><a href="#blaze"><img src="logo.png" style="width: 40px;"></a></button>
        </section>


        <section class="use_blaze text-capitalize" id="blaze">

            <form class="p-5  rounded-3  m-auto form" method="post" action="" id="form" autocomplete="off" enctype="multipart/form-data">
                
                <h4 class="fs-4 text-center text-capitalize py-2 bg-transparent">Blaze Setup⚡</h4>
                <div class="text-light fw-2 text-center d-flex align-items-center justify-content-center m-auto rounded-3 p-2 d-none" id="error_alert" style="background: tomato; ">
                    <!-- *This is an error message* -->
                </div>
                <!-- operating system -->
                <div class="form-group my-4">
                    <label for="operatingSystem" class="text-capitalize py-2">Select your operating system *</label>
                    <select class="form-control text-light" style="background: #343a40 " name="operating_system" required>
                        <option class="option px-2 text-capitalize text-center m-auto" value="0">-SELECT-</option>
                        <option class="option px-2 text-capitalize " value="1">windows OS</option>
                        <option class="option px-2 text-capitalize " value="2">Linux OS</option>
                        <option class="option px-2 text-capitalize " value="3">Chromebook OS</option>
                        <option class="option px-2 text-capitalize " value="4">Mac OS</option>
                    </select>
                </div>

                <!-- code editor -->
                <div class="form-group my-4">
                    <label for="codeEditor" class="text-capitalize py-2">Select Text / Code Editor *</label>

                    <select class="form-control text-light" style="background: #343a40 " name="code_editor" required>
                        <option class="option px-2 text-capitalize text-center m-auto" value="0">-SELECT-</option>

                        <option class="option px-2 text-capitalize " value="1">Visual studio (VS Code) </option>
                        <option class="option px-2 text-capitalize " value="2">Sublime Text</option>
                        <option class="option px-2 text-capitalize " value="3">Bracket</option>
                        <option class="option px-2 text-capitalize " value="4">Notepad ++</option>
                        <option class="option px-2 text-capitalize " value="5">Notepad</option>
                        <option class="option px-2 text-capitalize " value="6">Atom</option>
                        <option class="option px-2 text-capitalize " value="7">Text Edit</option>
                    </select>
                </div>

                <!-- browser setup -->
                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">Select Browser *</label>

                    <select class="form-control text-light" id="sel1" style="background: #343a40 " name="browser_type">
                        <option class="option px-2 text-capitalize text-center m-auto" value="0">-SELECT-</option>

                        <option class="option px-2 text-capitalize " value="1">Chrome (recommended)</option>
                        <option class="option px-2 text-capitalize " value="2">Firefox</option>
                        <option class="option px-2 text-capitalize " value="3">Microsoft Edge</option>
                        <option class="option px-2 text-capitalize " value="4">Operamini</option>
                        <option class="option px-2 text-capitalize " value="5">Safari</option>
                        <option class="option px-2 text-capitalize " value="6">Internet Explorer</option>
                    </select>
                </div>


                <!-- server  setup -->
                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">Select server type</label>

                    <select class="form-control text-light" id="sel1" style="background: #343a40 " name="server_type">
                        <option class="option px-2 text-capitalize text-center m-auto" value="0">-SELECT-</option>

                        <option class="option px-2 text-capitalize " value="1">Xampp Server</option>
                        <option class="option px-2 text-capitalize " value="2">Wamp Server</option>
                        <option class="option px-2 text-capitalize " value="3">Mamp Server</option>
                        <option class="option px-2 text-capitalize " value="4">Node JS</option>

                    </select>
                </div>



                  <!--   <h6 class="text-capitalize text-center fs-6 my-2">coming soon</h6>

                    <ul>
                        <li>open default directory </li>
                    </ul>
 -->
                <!-- folder  setup -->
       <!--          <div class="form-group my-4 ">
                    <label for="browserType" class="text-capitalize py-2">Default project directory</label>
                    
                    <select class="form-control text-light" id="sel1" style="background: #343a40 " name="browser_type" disabled>
                        <option class="option px-2 text-capitalize text-center m-auto" value="0">DISABLED</option>

                        <option class="option px-2 text-capitalize " value="1">Xampp Server</option>
                        <option class="option px-2 text-capitalize " value="2">Wamp Server</option>
                        <option class="option px-2 text-capitalize " value="3">Mamp Server</option>
                        <option class="option px-2 text-capitalize " value="4">Node JS</option>

                    </select>


                    <input type="text" name="folder_name " class="form-control px-2 text-light" placeholder="enter folder to start by default">


                    <div class="m-auto py-3">
                        <p>folders in desktop</p>
                        <ul>
                            <li>coding_test</li>
                            <li>programming</li>
                            <li></li>
                        </ul>

                    </div>
                </div>

             
            
                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">file extension to open by default</label>

                    <input type="text" class="form-control px-2 text-light" placeholder="eg .php, .html, .js" />
                </div> -->




                <div class="form-group my-2">

                    <button class="btn btn-danger text-center text-capitalize" name="submit" id="submit">
                        <span class="spinner-border spinner-border-sm  bg-primary d-none" id="spinner"></span>
                        Generate Blaze File
                    </button>


                </div>
            </form>


        </section>

    </div>



    <?php require_once "includes/footer.inc.php" ?>
</body>

</html>