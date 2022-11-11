<style>
	@font-face {
		font-family: newFont;
		src: url(components/poppins.ttf);
	}

	body {
		background: ghostwhite;

		color:black;

	}

	#spinner {
		background: ghostwhite;
		height: 100vh;
		width: 100%;
		position: fixed;
		z-index: 100;
		display: flex;
		align-items: center;
		justify-content: center;
	}



	* {
		font-family: newFont;
	}


	.product_1 {
		cursor: pointer;
	}

	.form {}

	.logo_animate {
		animation: zoom 1s linear 1;

	}

	@keyframes zoom {
		from {
			transform: translateY(-0px);

		}

		to {
			transform: translateY(-500px);

		}
	}

	#action {
		transform: translateY(85%);
		cursor: pointer;
	}




	@media (min-width:667.98px){
		.form{
			width:50%
		}

		
	}

	    @media (max-width:567.98px) {
    
        .img_small{
            
        }


        #content-contain{
            display: flex;
            flex-direction: column;
        }

        #img_container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        ul > li.nav-item:hover {
            background: lightblue;
            outline: none;
            border-radius: 20px;
            border: none;
            cursor: pointer;

        }

        ul > li.nav-item > a: hover{
          border: none;
          outline: none;
        }



    }

	#searchProduct,
	.form-control {
		border: none;
		outline: none;
		font-weight: 300;
	}

	#addNewProduct {
		font-weight: 600;
	}

	.time_added {
		font-size: 10px;
	}

	label {
		font-size: 0.9rem;
	}

	input[type="text"],
	input[type="file"] {
		font-size: 0.9rem;
	}

	#logo {
		width: 25%;
		height: 25%;
		display: flex;
		padding: 20px;
		text-align: center;
		align-items: center;
		justify-content: center;
	}

	/*declare the bg-dark-c class for the custom dark class*/
	.bg-dark-c {
		background: #211938;
		outline: 1px solid white;
	}

	.bg-dark-c:hover {
		background: #211938;
		outline: 2px solid white;
	}

	#allProduct,
	#footerText {
		font-weight: 600;
	}

	#my_name {
		font-weight: 500;
	}

	#addProductBtn {
		border-radius: 50%;
		width: 40px;
		height: 40px;
		text-align: center;
		display: flex;
		align-items: center;
		justify-content: center;
		margin: auto;
		font-weight: 500;
	}



	.bg-dark {
		background-color: #212529 !important;
	}

	.footer-bg {	 
		background:#121212 ;
		;

	}


	#footer_text {
		font-size: 0.9rem;
		padding
	}

	/*create animation for the error div*/
	#error_alert {
		animation: error_grow 0.5s 1;
	}

	@keyframes error_grow {
		from {
			transform: scale(0);
		}

		to {
			transform: scale(1);
		}
	}
</style>