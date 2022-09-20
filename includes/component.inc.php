		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <meta name="author" content="Adedoyin Emmanuel Adeniyi">
		 <meta name="keyword" content="A web app that helps to bootstrap development, kickstart your projects today by using blaze"/>
		 <meta name="keyword" content="blaze, full stack application, php, php project, php programming, bootstrap project"/>
		<script src="components/sweetAlert2.js"></script>
		<script src="components/jquery.js"></script>
		<script src="components/bootstrap.js"></script>
		<link rel="stylesheet" type="text/css" href="components/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="components/msgConfig.css">
		<link rel="stylesheet" type="text/css" href="components/three-dots.css">
		<link rel="icon" href="logo.png">
		<style>




		@font-face {
		    font-family: newFont;
		    src: url(components/poppins.ttf);
		}
		body{
			background: #221230;
			color:white;
			
		}

		*{
			font-family: newFont;
		}

		 ::-webkit-scrollbar{
		    width:5px;
		    height:5px;
		    background:#121212;

		  }

		  ::-webkit-scrollbar-thumb{
		    border-radius:20px;
		    opacity:.7;
		    background: #dc3545;
		    width:2px;
		  }

		   ::-webkit-scrollbar-button{
		    display:none;
		   }

		   ::-webkit-scrollbar-corner{
		    display: none;
		   }


	    input[type=text],input[type=password],input[type=email],input[type=number],input[type=date],textarea:-webkit-autofill,input[type=text],input[type=password],input[type=email],input[type=number],input[type=date],textarea:-webkit-autofill:hover,input[type=text],input[type=password],input[type=email],input[type=number],input[type=date],textarea:-webkit-autofill:focus,input[type=text],input[type=password],input[type=email],input[type=number],input[type=date]:-webkit-autofill:active{
	          -webkit-box-shadow: 0 0 0 30px #343a40 inset !important;
	    }
	    textarea{
	      
	      background-color:#343a40;
	    }

	    #spinner{
				background: #121117;
				height: 100vh;
				width: 100%;
				position: fixed;
				z-index: 100;
				display: flex;
				align-items: center;
				justify-content: center;
			}

	</style>

	<script>
		
		window.addEventListener("load",()=>{
			let $spinner = $("#spinner");
				$spinner.addClass("d-none");
		});	

	</script>

