$(document).ready(($)=>{
    $.noConflict();

    const $form = document.querySelector("#subscriber-form");
    const $formData = new FormData($form);

    $("#subscriber-form").on("submit", (e) =>{
        //prevent form submission
        e.preventDefault();
        

        const $xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");

        $xhttp.onreadystatechange = () =>{

            if($xhttp.readyState == 4 && $xhttp.status == 200){
                console.log($xhttp.responseText);
            }else{
               // console.log("something bad occured");
            }

            
        }


        $xhttp.open("post","includes/addSub.inc.php",true);
        $xhttp.send($formData);
    });
})