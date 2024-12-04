<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script type="text/javascript" src="media_assets/libraries/jquery-3.7.1.js"></script>

		<title>Bytesailecta - Your request has been accepted!</title>
		<meta property="og:image" content="site-logo.svg" />
		<meta name="author" content="Bytesailecta - Your request has been accepted!"/>
		<meta property="og:title" content="Bytesailecta - Your request has been accepted!" />
		
		<meta property="og:description" content="Bytesailecta - Your request has been accepted!" />
		<meta name="description" content="Bytesailecta - Your request has been accepted!" />
		<link rel="stylesheet" href="media_assets/toolkit/icons.css" />
		<link rel="stylesheet" href="media_assets/toolkit/buttons.css" />
		<link rel="stylesheet" href="media_assets/toolkit/bootstrap.css" />
		<link rel="stylesheet" href="media_assets/toolkit/slick-theme.css" />
		<link rel="stylesheet" href="media_assets/toolkit/slick.css" />
		<link rel="stylesheet" href="media_assets/toolkit/jquery.fancybox.min.css" />			

		<script type="text/javascript" src="media_assets/libraries/bootstrap.bundle.min.js"></script>	
		<script type="text/javascript" src="media_assets/libraries/slick.min.js"></script>
		<script type="text/javascript" src="media_assets/libraries/jquery.fancybox.js"></script>		

		

		<link rel="shortcut icon" href="site-logo.svg" type="image/x-icon" />
		<link rel="stylesheet" href="universal.css?cda8b" />
	

		<style>
			
			
			
		</style>

		
	</head>

	<body>		



<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-catalogog__grid{
		margin: 0px;
		padding: 0px;
		font-family: 'Roboto Flex', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 318px 0px;
	}
	.bodyClass1-catalogog__grid{
		background: #fff8ff;
		color: #ffffff;
	}
	.bodyClass2-catalogog__grid{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-catalogog__grid{
		background: #fff;
		color: #111;
	}
	.wrapage-block-catalogog__grid{
		background-size: 100%;
		width: 100%;
	}
	.box_main-catalogog__grid{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-catalogog__grid h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-catalogog__grid p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-catalogog__grid{
		text-align: start;
	}
	.mainBlock-catalogog__grid ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-catalogog__grid ul>li span{
		font-weight: bold;
	}
	.mainBlock-catalogog__grid{
		max-width: 957px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 10px;
	}
	.mainBlock-catalogog__grid .cBlock-catalogog__grid{
		text-align: start;
	}

	.bodyClass3-catalogog__grid .mainBlock-catalogog__grid{
		background: none;
		border-top: 2px dashed #bbbbbb;
		border-bottom: 2px dashed #bbbbbb;
	}
	.bodyClass2-catalogog__grid .mainBlock-catalogog__grid{
		background: #2F2519;
		color: #fff !important;
		box-shadow: 0px 0px 10px #2F2519;
	}
	.bodyClass2-catalogog__grid .mainBlock-catalogog__grid p{
		color: #fff !important;
	}
	.bodyClass1-catalogog__grid .mainBlock-catalogog__grid{
		background: #00C9B7;
		color: #ffffff;
		border-left: 3px solid #83142C;
	}
	.bodyClass1-catalogog__grid .mainBlock-catalogog__grid p{
		color: #ffffff !important;
	}
	.order-catalogog__grid{
		font-size: 22px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-catalogog__grid p{
			padding: 0px 15px;
		  }
		  .box_main-catalogog__grid h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-catalogog__grid{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-catalogog__grid{
			height: 100%;
		}
	}
</style>
<div class="bodyClass3-catalogog__grid" id="mainWrapp-catalogog__grid">


	<div class="wrapage-block-catalogog__grid">
		<div class="box_main-catalogog__grid">
			<div class="mainBlock-catalogog__grid">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-catalogog__grid">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



		<footer class="footer-section">
			<div class="container">
				<div class="footer-privasi">
					<div class="footer-item wrapper-tooltipjk">
							<a class="privacy" href="privacyPolicy/"> Privacy policy</a>
							<a class="privacy" href="terms-of-service/"> Terms & Conditions</a>
							<a class="privacy" href="legal-disclaimer/"> Disclaimer</a>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="copyright">	
							<span style="padding-right: 10px;">Copyright</span><span>&#169</span> 2024<span class="yearCopystockvw__thumbnail" style="margin-right: 10px;"></span> 
							Bytesailecta			
						</div>
				</div>
			</div>
		</footer>
		<script>


			
		</script>

	   <script>
		if ($("body").css("direction") == "ltr") {
					
					$(".menu-btn svg").css({ left: "5px"});
				}
				if ($("body").css("direction") == "rtl") {
					$(".menu-btn").css({"background": "#00bfa5","border-radius":"50%"});
					$(".menu-btn svg").css({ "font-size": "20px","transform":"translate(-50%, -50%)","top":"50%","left":"50%"});
             }
			 $('.main-wrapper').css('background',"#aab9c24d");
	   </script>

	    

		

</body>
</html>
