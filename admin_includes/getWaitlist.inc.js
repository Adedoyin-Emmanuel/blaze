$(document).ready(($)=>{


	$.noConflict();


	setInterval(()=>{

		const $xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");
		const $waitlist_div = $("#waitlist_table_body");
		$xhttp.onreadystatechange = () =>{
			if($xhttp.readyState == 4 && $xhttp.status == 200){
				
				$waitlist_div.html($xhttp.responseText);
			}
		}


		$xhttp.open("get","admin_includes/getWaitlist.inc.php",true);
		$xhttp.send();

	},1000)
})