
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "includes/component.inc.php" ?>

    <?php require_once "includes/style.inc.php" ?>
    <script src="includes/blazeNonDevForm.inc.js"></script>
    <title>Blaze For Non Developers</title>

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
                
                <h4 class="fs-4 text-center text-capitalize py-2 bg-transparent">Blaze Setup for Non developers</h4>
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

                    <!-- browser tabs-->
                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                        enter websites to open by default, seperate by commas
                    </label>
                        <input type="text" name="default_sites" class="form-control p-3" placeholder="eg www.facebook.com, www.tictok.com, www.netflix.com" id="input">
                </div>


                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                       1. Application Directory Eg
                    </label>
                        <input type="text" name="default_application_1" class="form-control p-3 my-md-4 my-3" placeholder="C:/ProgramData/Application/Blender" id="input">
                     <label for="browserType" class="text-capitalize py-2">
                       Application Exe File Name
                    </label>
                        <input type="text" name="default_application_name_1" class="form-control p-3 my-md-4 my-3" placeholder="blender.exe" id="input">

                </div>

                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                       2. Application Directory Eg
                    </label>
                        <input type="text" name="default_application_2" class="form-control p-3 my-md-4 my-3" placeholder="C:/ProgramData/Application/Vlc" id="input">
                     <label for="browserType" class="text-capitalize py-2">
                       Application Exe File Name
                    </label>
                        <input type="text" name="default_application_name_2" class="form-control p-3 my-md-4 my-3" placeholder="vlc.exe" id="input">

                </div>

                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                       3. Application Directory Eg
                    </label>
                        <input type="text" name="default_application_3" class="form-control p-3 my-md-4 my-3" placeholder="C:/ProgramData/Application/CorelDraw" id="input">
                     <label for="browserType" class="text-capitalize py-2">
                       Application Exe File Name
                    </label>
                        <input type="text" name="default_application_name_3" class="form-control p-3 my-md-4 my-3" placeholder="corelDraw.exe" id="input">

                </div>

                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                       4. Application Directory Eg
                    </label>
                        <input type="text" name="default_application_4" class="form-control p-3 my-md-4 my-3" placeholder="C:/ProgramData/Application/Adobe" id="input">
                     <label for="browserType" class="text-capitalize py-2">
                       Application Exe File Name
                    </label>
                        <input type="text" name="default_application_name_4" class="form-control p-3 my-md-4 my-3" placeholder="adobeillustrator.exe" id="input">

                </div>

                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                       5. Application Directory Eg
                    </label>
                        <input type="text" name="default_application_5" class="form-control p-3 my-md-4 my-3" placeholder="C:/ProgramData/Application/Whatsapp" id="input">
                     <label for="browserType" class="text-capitalize py-2">
                       Application Exe File Name
                    </label>
                        <input type="text" name="default_application_name_5" class="form-control p-3 my-md-4 my-3" placeholder="whatsapp.exe" id="input">

                </div>

                <div class="form-group my-4">
                    <label for="browserType" class="text-capitalize py-2">
                       6. Application Directory Eg
                    </label>
                        <input type="text" name="default_application_6" class="form-control p-3 my-md-4 my-3" placeholder="C:/ProgramData/Application/Excel" id="input">
                     <label for="browserType" class="text-capitalize py-2">
                       Application Exe File Name
                    </label>
                        <input type="text" name="default_application_name_6" class="form-control p-3 my-md-4 my-3" placeholder="msexcel.exe" id="input">

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