$(document).ready(($) => {
    $.noConflict();

    const $form = document.querySelector("form");

    //check if form was submitted
    $("form").on("submit", (e) => {
        //stop form submission
        e.preventDefault();

        const $formData = new FormData($form);

        //prepare the AJAX
        const $xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");

        $xhttp.onreadystatechange = () => {

            if ($xhttp.readyState == 4 && $xhttp.status == 200) {
                console.log($xhttp.responseText);
                if ($xhttp.responseText.includes("Invalid email format")) {
                    swal.fire({
                        title: "Error",
                        text: $xhttp.responseText,
                        icon: "error",
                        allowOutsideClick: false,
                        showCancelButton: true,



                    })
                } else if($xhttp.responseText.includes("successfully")) {
                     swal.fire({
                        title: "Success",
                        text:$xhttp.responseText,
                        icon: "success",
                        allowOutsideClick: false,
                        showCancelButton: true,
                        


                    });
                }else{

                     swal.fire({
                        title: "Request Timed Out",
                        text:$xhttp.responseText,
                        icon: "warning",
                        allowOutsideClick: false,
                        showCancelButton: true,
                        confirmButtonText:"Ok",
                        cancelButtonColor:"tomato"


                    });
                }

            }
        }


        $xhttp.open("post", "includes/formHandle.inc.php", true);
        $xhttp.send($formData);

    });
});