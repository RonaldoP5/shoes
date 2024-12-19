<?php
	include("function/session.php");
	include("db/dbconn.php");
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

			<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>

	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];

								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = $query->fetch_array ();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>



	<br>
<div id="container">
	<div class="nav">
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>About Us</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>

	<br />
	<br />

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
