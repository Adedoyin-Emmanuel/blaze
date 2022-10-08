$(document).ready(($)=>{
	$.noConflict();

	const $form = document.querySelector("form");

	//check if form was submitted
	$("form").on("submit",(e)=>{
		//stop form submission
		e.preventDefault();

		const $formData = new FormData($form);

		//prepare the AJAX
		const $xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");

		$xhttp.onreadystatechange= () =>{

			if($xhttp.readyState == 4 && $xhttp.status == 200){
				console.log($xhttp.responseText);
			}
		}


		$xhttp.open("post","includes/formHandle.inc.php", true);
		$xhttp.send($formData);
		
	});
});