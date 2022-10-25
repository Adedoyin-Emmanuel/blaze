$(document).ready(($)=>{

	const $form = document.querySelector("form");

	$("form").on("submit",(e)=>{
		e.preventDefault();

		const $xhttp3 = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");

		const $formData = new FormData($form);

		$xhttp3.onreadystatechange = () =>{
			if($xhttp3.readyState == 4 && $xhttp3.status == 200){

				console.log($xhttp3.responseText);
			}


		}

		$xhttp3.open("post","includes/sendBulkEmail.inc.php",true);
		$xhttp3.send($formData);
	})

});