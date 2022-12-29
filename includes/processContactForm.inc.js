$(document).ready(($)=>{
	$.noConflict();

	$("#blaze-contact-form").on("submit",(e)=>{

		e.preventDefault();

		const $form = document.querySelector("#blaze-contact-form");
		
		//disable the button
		const $submit_btn = document.getElementById("submit_btn");

		$submit_btn.disabled = true;

		emailjs.sendForm('service_mtg916s', 'blaze_contact_form', $form)
			.then(function() {
				swal.fire({
					title:"Successful",
					text:"Email sent successfully",
					icon:"success",
					confirmButtonColor:"lightskyblue",
					cancelButtonColor:"tomato",
					
				});

				$submit_btn.disabled = false;

			}, function(error) {
				swal.fire({
					title:"Error",
					text:error.text,
					icon:"error",
					confirmButtonColor:"lightskyblue",
					cancelButtonColor:"tomato",
					
				});

				$submit_btn.disabled = false;
			});


	});


	
})
