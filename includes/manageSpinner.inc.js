/*

	@author => Adedoyin Emmanuel Adeniyi

*/

//init jquery


$(document).ready(($) => {
    //prevent libraries conflict
    $.noConflict();

    //create a function to produce a random number
    function randomNumber(max, min) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }



    //get the pulse spinner, and other required items  and store in  constant
    const $pulseSpinner = $("#pulseSpinner");
    const $btnSpinner = $("#btnSpinner");
    const $getStartedBtn = $("#getStarted");
    const $logoImg = $("#logoImg");
    const $randomNumber = randomNumber(5000, 3000);
    const logo_legit = document.getElementById("logoImg");


    function hideElem(args) {
        //add the d-none class with bootstrap
        args.style.display = "none";
    }


    function navigate_user() {
        location.href = "homePage.php";
    }

    $getStartedBtn.click(() => {
        //display the spinner
        $btnSpinner.removeClass("d-none");
        // $pulseSpinner.removeClass("d-none");
        $logoImg.addClass("logo_animate");




        // Code for Chrome, Safari and Opera
        logo_legit.addEventListener("webkitAnimationEnd", navigate_user);

        // Standard syntax
        logo_legit.addEventListener("animationend", navigate_user);



    });






});