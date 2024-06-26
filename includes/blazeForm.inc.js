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
				if($xhttp.responseText.includes("generated successfully")){
					swal.fire({
						title:"Generated successfully ",
						text:"Congrats 👊 Blaze file generated successfully",
						showCancelButton:false,
                        icon:"success",
						confirmButtonText:"Download Blaze File",
						confirmButtonColor:"lightskyblue",
						allowOutsideClick:false,
						allowEscapeKey:false
					}).then((willProceed)=>{
						if(willProceed.isConfirmed){
							location.href="blazeFileDownload.php";
						}
					})
				}else{
					swal.fire({
						title:"Error",
						text:$xhttp.responseText,  
						showConfirmButton:true,
						showCancelButton:true,
						confirmButtonColor:"lightskyblue",
						confirmButtonText:"Regenerate",
						cancelButtonColor:"tomato"
						

					}).then((willProceed)=>{
						//scroll to the top
						
						window.scrollTo({
							top:0,
							behavior: "smooth"
						});
					})
				}
			}
		}



		$xhttp.open("post","includes/blazeForm.inc.php",true);
		$xhttp.send($formData);
	})
})