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
      
       <br/>
         <section class="my-4 text-capitalize text-md-center">
       
            Note, before you configure blaze below, please ensure you have read the <a href="blazeDocs.php">docs</a>.
         </section>
        <section class="use_blaze text-capitalize" id="blaze">

            <form class="p-5  rounded-3  m-auto form" method="post" action="" id="form" autocomplete="off" enctype="multipart/form-data">
                
                <h4 class="fs-4 text-center text-capitalize py-2 bg-transparent">Blaze Setup for developers</h4>
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

                    <!-- browser tabs-->
                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                        enter websites to open by default, seperate by commas
                    </label>
                        <input type="text" name="default_sites" class="form-control p-2" placeholder="eg stackoverflow.com, php.net, github.com" id="input">
                </div>

                <!-- version controlling system  setup -->
                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                        choose the version control system to open by default
                    </label>

                    <select class="form-control text-light" id="sel1" style="background: #343a40 " name="version_control_system">
                        <option class="option px-2 text-capitalize text-center m-auto" value="0">-SELECT-</option>

                        <option class="option px-2 text-capitalize " value="1">Github </option>
                        <option class="option px-2 text-capitalize " value="2">Bitbucket</option>
                        <option class="option px-2 text-capitalize " value="3">Git Lab </option>
                       
                    </select> 
                </div>


                 <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                        version control system
                    </label>
                    <br/>

                    <input type="checkbox" name="git_start" class="form-check-input"> start git bash default
                </div>


                 <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                        command line setup
                    </label>
                    <br/>

                    <input type="checkbox" name="terminal_start" class="form-check-input"> start CMD (command Prompt) / Terminal by default
                </div>




               




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