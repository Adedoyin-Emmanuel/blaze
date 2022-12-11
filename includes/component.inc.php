		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		 <meta name="author" content="Adedoyin Emmanuel Adeniyi">
		 <meta name="keyword" content="A web app that helps to bootstrap development, kickstart your projects today by using blaze, software that opens multiple software, software development, next big thing, bootstraping desktop applications"/>
		 <meta name="keyword" content="blaze, full stack application, php, php project, php programming, bootstrap project, bootstraping development blaze web app, BlazeWebApp, BlazeWeb, Blaze, multiple software opener"/>
		<script src="components/sweetAlert2.js"></script>
		<script src="components/jquery.js"></script>
		<script src="components/bootstrap.js"></script>
		<script src="components/typingEffect.js"></script>


		<link rel="stylesheet" type="text/css" href="components/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="components/msgConfig.css">
		<link rel="stylesheet" type="text/css" href="components/three-dots.css">
		<link rel="icon" href="logo.png">
		<style>




		@font-face {
		    font-family: newFont;
		    src: url(components/poppins.ttf);
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
		    background: lightblue;
		    width:2px;
		  }

		   ::-webkit-scrollbar-button{
		    display:none;
		   }

		   ::-webkit-scrollbar-corner{
		    display: none;
		   }

	    textarea{
	      
	      background-color:#343a40;
	    }

	    #spinner{
				background: ghostwhite;
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
			let $spinner =document.getElementById("spinner");
				$spinner.style.display="none";
		});	

	</script>

