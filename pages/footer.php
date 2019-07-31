 <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
 <link href="../fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="../flat-icon/flaticon.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<style>
	footer {
		background-color: #292c2f;
		width: 100%;
		
		padding: 55px 50px;
		margin-top: 30px;
	}

	footer h4 {
		color: #ffffff;
		font: normal 36px 'Cookie', cursive;
		margin: 0;
	}

	footer .footer-company-name {
		color: #8f9296;
		font-size: 14px;
		font-weight: normal;
		margin: 0;
	}

	footer .footer-links a {
		display: inline-block;
		line-height: 1.8;
		text-decoration: none;
		color: white;
	}

	.footer-center i {
		background-color: #33383b;
		color: #ffffff;
		font-size: 25px;
		width: 38px;
		height: 38px;
		border-radius: 50%;
		text-align: center;
		line-height: 42px;
		margin: px;
		vertical-align: middle;
	}

	.footer-center i.fa-envelope {
		font-size: 17px;
		line-height: 38px;
	}

	.footer-center p {
		display: inline-block;
		color: #ffffff;
		vertical-align: middle;
		margin: 0;
	}

	.footer-center p span {
		display: block;
		font-weight: normal;
		font-size: 14px;
		line-height: 2;
	}

	.footer-center p a {
		color: #5383d3;
		text-decoration: none;
		;
	}


	.footer-company-about {
		line-height: 20px;
		color: #92999f;
		font-size: 13px;
		font-weight: normal;
		margin: 0;
	}

	.footer-company-about span {
		display: block;
		color: #ffffff;
		font-size: 14px;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.footer-icons {
		margin-top: 25px;
	}

	.footer-icons a {
		display: inline-block;
		width: 35px;
		height: 35px;
		cursor: pointer;
		background-color: #33383b;
		border-radius: 2px;
		font-size: 20px;
		color: #ffffff;
		text-align: center;
		line-height: 35px;
		margin-right: 3px;
		margin-bottom: 5px;
	}

	.footer-right p{
	display: inline-block;
	vertical-align: top;
	margin: 15px 42px 0 0;
	color: #ffffff;
}

/* The contact form */

.form{
	display: inline-block;
}

.form input,
.form textarea{
	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #1f2022;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;
	resize: none;
	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;
	width: 250px;
	padding: 18px;
}

::-webkit-input-placeholder {
	color:  #5c666b;
}

::-moz-placeholder {
	color:  #5c666b;
	opacity: 1;
}

:-ms-input-placeholder{
	color:  #5c666b;
}


.form input{
	height: 55px;
	margin-bottom: 15px;
}

.form textarea{
	height: 100px;
	margin-bottom: 20px;
}

.form button{
	border-radius: 3px;
	background-color:  #33383b;
	color: #ffffff;
	border: 0;
	padding: 15px 50px;
	font-weight: bold;
	float: right;
}
</style>
<footer>
	<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12">
			<h4>DrHarry<span>PoeticEmpire</span></h4>

			<p class="footer-links">
				<a href="#">Home</a>
				·			
				<a href="#">About</a>
				·				
				<a href="#">Contact</a>
			</p><br><hr>

			
			<p class="footer-company-about">
				<span>Reach us</span>
			</p>

			<div class="footer-icons">

				<a href=""><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 footer-center ">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span></span> Nairobi, Kenya</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>0790964507</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:drharry@gmail.com">drharry@gmail.com</a></p>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 footer-right">
		<p>Contact Us</p><br>

     <form class="form" action="#" method="post">
	<input type="text" name="email" placeholder="Email" />
	<textarea name="message" placeholder="Message"></textarea>
	<button>Send</button>

</form>

		</div>

	</div>
	<p class="footer-company-name">PoeticEmpire &copy; <?php echo date("Y") ?></p>
</footer>