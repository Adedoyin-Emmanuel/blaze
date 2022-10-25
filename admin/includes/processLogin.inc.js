$(document).ready(($)=>{

	$.noConflict();


	const $form = document.querySelector("form");

	$("form").on("submit",(e)=>{

		//prevent form submission 
		e.preventDefault();

		const $formData = new FormData($form);

		//create the AJAX object

		const $xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");

		$xhttp.onreadystatechange = ()=>{

			if($xhttp.readyState == 4 && $xhttp.status == 200){
				
				//check if login was successful
				if($xhttp.responseText.includes("login successful")){

					//disable login button
					$("#submit").disabled = true;
					swal.fire({
						title:"Login Successful",
						text:$xhttp.responseText,
						icon:"success",
						allowOutsideClick:false,
						timer:2000

					}).then((willProceed)=>{
						$("#spinner").addClass("d-flex");
						setTimeout(()=>{
						    $("#spinner").addClass("d-none");
							location.href = "index.php";
						},4000);
					})
				}else if($xhttp.responseText.includes("invalid")){

					swal.fire({
						title:"Login Failed",
						text:$xhttp.responseText,
						icon:"error",
						timer:2000,
						confirmButtonText:"Try Again ",
						allowOutsideClick:false
					})

				}
			}
		}

		$xhttp.open("post","includes/processLogin.inc.php",true);
		$xhttp.send($formData);	


	});
});