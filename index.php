<?php
include "navbar.php";
include "koneksi.php";
?>
<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="image/bmw1 - Copy.jpg" alt="Berisi keterangan gambar">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="image/mobil3.png" alt="Berisi keterangan gambar">
            <div class="carousel-caption"></div>
        </div>
        <div class="item">
            <img src="image/mobil2.png" alt="Berisi keterangan gambar">
            <div class="carousel-caption"></div>
        </div>
    </div>

    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- pelayanan -->
<div class="container">
    <h2 class="text-center">Pelayanan dari Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="service-box">
                <h3>Servis Berkala</h3>
                <p>Kami menyediakan layanan servis berkala untuk memastikan mobil Anda selalu dalam kondisi prima.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-box">
                <h3>Test Drive</h3>
                <p>Rasakan pengalaman mengemudi mobil impian Anda dengan layanan test drive kami.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-box">
                <h3>Konsultasi Pembelian</h3>
                <p>Tim kami siap membantu Anda dalam memilih mobil yang sesuai dengan kebutuhan dan anggaran Anda.</p>
            </div>
        </div>
    </div>
</div>
<!-- pelayanan end -->
<?php include "koneksi.php"; ?>

<?php
$result = $koneksi->query("SELECT * FROM produk ORDER BY RAND() LIMIT 3");
?>

<div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="card">
                <img src="image/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>">
                <div class="title"><?php echo $row['nama']; ?></div>
                <div class="rating">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
                <div class="reviews">1500 reviews</div>
                <div class="price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></div>
                <div class="buttons">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add to Cart</button>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
  
<!-- testimoni -->
<div class="container-fluid testimonial-section">
    <div class="container">
        <h2 class="text-center mb-5">Apa Kata Pelanggan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/bmw1 - Copy.jpg" alt="Customer 1">
                    </div>
                    <div class="testimonial-content">
                        <p>"Pelayanan sangat memuaskan, proses pembelian cepat dan mudah."</p>
                        <h5>Budi Santoso</h5>
                        <span>Pengusaha</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/bmw1 - Copy.jpg" alt="Customer 2">
                    </div>
                    <div class="testimonial-content">
                        <p>"Kualitas mobil terjamin dan harga sangat bersaing."</p>
                        <h5>Siti Rahayu</h5>
                        <span>Dokter</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/bmw.png" alt="Customer 3">
                    </div>
                    <div class="testimonial-content">
                        <p>"After sales service luar biasa, sangat membantu."</p>
                        <h5>Ahmad Hidayat</h5>
                        <span>Wiraswasta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimoni end -->


<?php include "footer.php"; ?>
