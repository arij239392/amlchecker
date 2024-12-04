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

		<title>Bytesailecta : Request accepted!</title>
		<meta property="og:image" content="site-logo.svg" />
		<meta name="author" content="Bytesailecta : Request accepted!"/>
		<meta property="og:title" content="Bytesailecta : Request accepted!" />
		
		<meta property="og:description" content="Bytesailecta : Request accepted!" />
		<meta name="description" content="Bytesailecta : Request accepted!" />
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
	#mainWrapp-searchfw--icon{
		margin: 0px;
		padding: 0px;
		font-family: 'Quattrocento Sans', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 262px 0px;
	}
	.bodyClass1-searchfw--icon{
		background: #fcfcfc;
		color: #ffffff;
	}
	.bodyClass2-searchfw--icon{
		background: #f6f7d4;
		color: #fff;
	}
	.bodyClass3-searchfw--icon{
		background: #fff;
		color: #111;
	}
	.wrapage-block-searchfw--icon{
		background-size: 100%;
		width: 100%;
	}
	.box_main-searchfw--icon{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-searchfw--icon h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-searchfw--icon p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-searchfw--icon{
		text-align: start;
	}
	.mainBlock-searchfw--icon ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-searchfw--icon ul>li span{
		font-weight: bold;
	}
	.mainBlock-searchfw--icon{
		max-width: 788px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 15px;
	}
	.mainBlock-searchfw--icon .cBlock-searchfw--icon{
		text-align: start;
	}

	.bodyClass3-searchfw--icon .mainBlock-searchfw--icon{
		background: none;
		border-top: 2px dashed #f6f7d4;
		border-bottom: 2px dashed #f6f7d4;
	}
	.bodyClass2-searchfw--icon .mainBlock-searchfw--icon{
		background: #230338;
		color: #fff !important;
		box-shadow: 0px 0px 15px #230338;
	}
	.bodyClass2-searchfw--icon .mainBlock-searchfw--icon p{
		color: #fff !important;
	}
	.bodyClass1-searchfw--icon .mainBlock-searchfw--icon{
		background: #143A8A;
		color: #ffffff;
		border-left: 0px solid #1597BB;
	}
	.bodyClass1-searchfw--icon .mainBlock-searchfw--icon p{
		color: #ffffff !important;
	}
	.order-searchfw--icon{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-searchfw--icon p{
			padding: 0px 15px;
		  }
		  .box_main-searchfw--icon h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-searchfw--icon{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-searchfw--icon{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-searchfw--icon" id="mainWrapp-searchfw--icon">


	<div class="wrapage-block-searchfw--icon">
		<div class="box_main-searchfw--icon">
			<div class="mainBlock-searchfw--icon">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-searchfw--icon">With heartfelt thanks and warm wishes!</p>
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
