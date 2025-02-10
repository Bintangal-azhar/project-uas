<?php include 'header.php'?>

<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah website BintangShowroom</p>
						<button class="btn btn-primary">Tambah Produk</button>
						<button class="btn btn-success">Tampil produk</button>
						
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->


<div class="row">
			<div class="col-md-12">
				<center>Copyright &copy 2018 Bintang Showroom, design with <span class="glyphicon glyphicon-heart"></span> by Bintang Al-Azhar<br/>
				<a href="index.php">Home </a> | 
				<a href="about.php">About Us </a> | 
				<a href="contack.php">Contact Us </a> |
				<a href="login.php">Login </a><br/><br/>
				<label class="label label-danger">PERHATIAN:</label>
				Semua informasi di halaman ini memiliki hak cipta, anda tidak diperkenankan untuk menyebarluaskan tanpa seijin pengelola website
				</center>
			</div>
			</div>
	</div><!-- Akhir FOOTER -->
		
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/dataTables.bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery.dataTables.js"></script>
	<script src="bootstrap/js/scripts.js"></script>
	</body>
</html>
