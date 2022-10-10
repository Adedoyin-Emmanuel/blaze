$(document).ready(($)=>{
	$.noConflict();

	$blazeForm = document.querySelector("form")

	$("form").on("submit",(e)=>{
		//prevent form submission
		e.preventDefault();

		const $formData = new FormData($blazeForm);

		const $xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");

		$xhttp.onreadystatechange = ()=>{
			if($xhttp.readyState == 4 && $xhttp.status == 200){
				console.log($xhttp.responseText);
			}
		}



		$xhttp.open("post","includes/blazeForm.inc.php",true);
		$xhttp.send($formData);
	})
})