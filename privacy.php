<?php
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Casual Shoe Store</title>
	<link rel="icon" href="img/logos.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logos.jpg">
		<label>Casual Shoe Store</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>

	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>

	<br>
<div id="container">
	<div class="nav">
			 <ul>
				<li><a href="index.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>




		<div id="content">
			<legend><h3>Privacy Policy</h3></legend>
			<p>Casual Shoe Store menghormati privasi pengunjung situs web Casual Shoe Store.com dan situs web lokal yang terhubung dengannya, dan sangat berhati-hati dalam melindungi informasi Anda. 
				Kebijakan privasi ini memberi tahu Anda informasi apa yang kami kumpulkan dari Anda, bagaimana kami dapat menggunakannya, dan langkah-langkah yang kami ambil untuk memastikan bahwa informasi tersebut terlindungi.
			</p>
			<hr>
				<h4>Protection of visitors information</h4>
					<p>Untuk melindungi informasi yang Anda berikan kepada kami dengan mengunjungi situs web kami, kami telah menerapkan berbagai langkah keamanan. 
						Informasi pribadi Anda tersimpan di balik jaringan aman dan hanya dapat diakses oleh sejumlah orang terbatas, yang memiliki hak akses khusus dan diwajibkan untuk menjaga kerahasiaan informasi tersebut. 
						Namun, perlu diingat bahwa setiap kali Anda memberikan informasi pribadi secara daring, ada risiko pihak ketiga dapat menyadap dan menggunakan informasi tersebut. 
						Meskipun Casual Shoe Store berupaya melindungi informasi pribadi dan privasi penggunanya, kami tidak dapat menjamin keamanan informasi apa pun yang Anda ungkapkan secara daring dan Anda melakukannya atas risiko Anda sendiri.</p>
			<hr>
				<h4>Use of cookies</h4>
					<p>Cookie adalah serangkaian kecil informasi yang ditransfer situs web yang Anda kunjungi ke komputer Anda untuk tujuan identifikasi.
						Cookie dapat digunakan untuk melacak aktivitas Anda di situs web dan informasi tersebut membantu kami memahami preferensi Anda dan meningkatkan pengalaman Anda di situs web. 
						Cookie juga digunakan untuk mengingat, misalnya, nama pengguna dan kata sandi Anda.</p>
					<p>Anda dapat menonaktifkan semua kuki, jika Anda tidak ingin menerimanya. Anda juga dapat mengatur komputer Anda untuk memperingatkan Anda setiap kali ada kuki yang digunakan. 
						Untuk kedua pilihan tersebut, Anda harus menyesuaikan pengaturan peramban Anda (seperti Internet Explorer). Ada juga produk perangkat lunak yang tersedia yang dapat mengelola kuki untuk Anda.
						Namun, perlu diketahui bahwa ketika Anda menyetel komputer Anda untuk menolak kuki, hal itu dapat membatasi fungsionalitas situs web yang Anda kunjungi dan mungkin saja Anda tidak memiliki akses ke beberapa fitur di situs web tersebut.</p>
			<hr>
				<h4>Online policy</h4>
					<p>Kebijakan Privasi tidak mencakup apa pun yang melekat dalam pengoperasian internet, dan karenanya berada di luar kendali adidas, dan tidak boleh diterapkan dengan cara apa pun yang bertentangan dengan hukum atau peraturan pemerintah yang berlaku. 
					Kebijakan privasi daring ini hanya berlaku untuk informasi yang dikumpulkan melalui situs web kami dan tidak untuk informasi yang dikumpulkan secara luring.</p>

		</div>
	<br />
	</div>
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> Copyright &copy; </label>
			<p style="font-size:25px;">Casual Shoe Store Inc. 2024 Brought To You by <a href="/">Casual Shoe</a></p>
		</div>

			<div id="foot">
				<h4>Links</h4>
					<ul>
						<a href="/"><li>Facebook</li></a>
						<a href="/"><li>Twitter</li></a>
						<a href="/"><li>Instagram</li></a>
						<a href="/"><li>Whatsapp</li></a>
					</ul>
			</div>
	</div>
</body>
</html>
