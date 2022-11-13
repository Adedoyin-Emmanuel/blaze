<?php


/*


    get the user input from the respective form input


*/
$client_operating_system = $_POST["operating_system"];

$default_websites_launch = $_POST["default_sites"];



$default_application_dir_1 = $_POST["default_application_1"];
$default_application_dir_2 = $_POST["default_application_2"];
$default_application_dir_3 = $_POST["default_application_3"];
$default_application_dir_4 = $_POST["default_application_4"];
$default_application_dir_5 = $_POST["default_application_5"];
$default_application_dir_6 = $_POST["default_application_6"];


$default_application_exe_filename_1 = $_POST["default_application_name_1"];
$default_application_exe_filename_2 = $_POST["default_application_name_2"];
$default_application_exe_filename_3 = $_POST["default_application_name_3"];
$default_application_exe_filename_4 = $_POST["default_application_name_4"];
$default_application_exe_filename_5 = $_POST["default_application_name_5"];
$default_application_exe_filename_6 = $_POST["default_application_name_6"];



#error checking
$default_operating_system = "";
if(empty($client_operating_system)){
    die("Please select an operating system");
}

switch ($client_operating_system) {
    case '0':
        die("Please select a valid operating system");

        break;

    case '1':
        $default_operating_system = "windows";
        break;

    case '2':
        $default_operating_system = "linux";

        break;
    
    case '3':
        $default_operating_system = "chromebook";
    
        break;

    case '4':
        $default_operating_system = "mac os";

        break;
    
    default:
        die("Please select a valid operating system");
        break;
}


#program folder configuration

$all_project_folder = array($default_application_dir_1,$default_application_dir_2,$default_application_dir_3,$default_application_dir_4,$default_application_dir_5,$default_application_dir_6);

$all_program_exe_files = array($default_application_exe_filename_1,$default_application_exe_filename_2,$default_application_exe_filename_3, $default_application_exe_filename_4,$default_application_exe_filename_5,$default_application_exe_filename_6);





    #loop and check if less than 2 elements are empty
    $empty_folders =  0;
    
    for($i = 0; $i < count($all_project_folder); $i++){
        if(empty($all_project_folder[$i])){
            $empty_folders ++;
        }

        #check if the empty folder directories is less than 2
        if($empty_folders > 4){
            die("you can't open open just one or no software with blaze");
        }
    }

    

    


    #loop and check if less than 2 elements are empty
    $empty_exe_filename = 0;
    
    for($i = 0; $i < count($all_program_exe_files); $i++){
        if(empty($all_program_exe_files[$i])){
            $empty_exe_filename ++;
        }

        #check if the empty folder directories is less than 2
        if($empty_exe_filename > 4){
            die("please configure more than one software to open with blaze");
        }
    }


    #check if the number of config folder equals the number of config exe file name

    if($empty_folders != $empty_exe_filename){
        die("software directory/folder numbers doesn't match with corresponding exe file name");
    }
    
   

    #check for the webistes the client want to start by default when they launch blaze
    $default_sites_to_open = " ";
    if(!empty($default_websites_launch)){
        $default_sites_to_open = explode(",", $default_websites_launch);
        $url_errors = array();
        #loop through all the sites name and check if they have valid url
            for($i=0; $i < count($default_sites_to_open); $i++){

                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$default_sites_to_open[$i])) {
                    
                        die($default_sites_to_open[$i]. " is not a valid website URL");

                }
        }
    }




    #initialize the non blaze controller
    




?>