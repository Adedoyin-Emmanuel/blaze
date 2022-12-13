$(document).ready(($)=>{
	$.noConflict();

	$form.on("submit",(e)=>{
		e.preventDefault();

		const $form = document.querySelector("form");
		const $formData = new FormData($form);


		// emailjs.sendForm('contact_service', 'contact_form', $formData).then((function() ){
        //      console.log('SUCCESS!');
        //  }, function(error) {
        //                 console.log('FAILED...', error);
        // });

		emailjs.sendForm('service_nj0ntp6', 'blaze-contact_form',$formData).then(()=>{
			console.log("SUCCESS!")
		}, (err)=>{
			console.log("FAILED!",err);
		});

	});


	
})