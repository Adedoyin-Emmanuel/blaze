$(document).ready(($)=>{

	$.noConflict();


	setInterval(()=>{




		const $xhttp2 = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");
		const $welcome_header = $("#welcome_header");

		$xhttp2.onreadystatechange = () =>{

			if($xhttp2.readyState == 4 && $xhttp2.status == 200){
				const $data_from_server = JSON.parse($xhttp2.responseText);

				$welcome_header.text( `Welcome ${$data_from_server.username}` )

			}
		}
		$xhttp2.open("get","includes/getAdminDetails.inc.php",true);
		$xhttp2.send();


	},1000);

});