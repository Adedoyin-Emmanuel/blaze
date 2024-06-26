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
						title:"Generated successfully ✨",
						text:"Congrats 👊 Blaze file generated successfully",
						showCancelButton:false,
                        icon:"success",
						confirmButtonText:"Download Blaze File",
						confirmButtonColor:"lightskyblue",
						allowOutsideClick:false,
						allowEscapeKey:false
					}).then((willProceed)=>{
						if(willProceed.isConfirmed){

						}else{
							return
						}
					})
				}else{
					swal.fire({
						title:"Error",
						text:$xhttp.responseText,
					
						showConfirmButton:true,
						showCancelButton:true,
						confirmButtonText:"Regenerate",
						cancelButtonColor:"tomato"
						

					});
				}
			}
		}



		$xhttp.open("post","includes/blazeNonDevForm.inc.php",true);
		$xhttp.send($formData);
	})
})