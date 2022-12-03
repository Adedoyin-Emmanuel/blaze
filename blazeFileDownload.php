<?php

if(extension_loaded('zip')){

	$zip = new ZipArchive(); 
	$zip_name = "BlazeApp".time().".zip"; 

	if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){ 
	
		echo '<script>

			swal.fire({
				title:"Error",
				text:"An error occured during download",
				icon:"error",
				showCancelButton:false,
				confirmButtonText:"Try again",

			}).then((willProceed)=>{
				if(willProceed.isConfirmed){
					location.href ="blaze.php";
				}else{
					location.href ="blaze.php";
				}
			})

		</script>';
		die();
	}
	$file1 = 'download/BLAZE.bat';  
	$file2 = 'download/Blaze.exe'; 

	$zip->addFile($file1);
	$zip->addFile($file2);

	$zip->close();

	if(file_exists($zip_name)){

	   #change header content
	   header('Content-type: application/zip');
	   header('Content-Disposition: attachment; filename="'.$zip_name.'"');
	   readfile($zip_name);
		
	   unlink($zip_name);

	}
}

?>