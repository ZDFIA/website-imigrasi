<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Layanan Keimigrasian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "navbar.php";
?>

<section class="hero">
    <h1>
        SELAMAT DATANG DI SISTEM INFORMASI LAYANAN PASPOR<br>
        KANTOR IMIGRASI SUMATERA BARAT
    </h1>

    <!-- Search Bar -->
    <form class="search-form" onsubmit="return false;">
        <input type="text" id="searchInput" placeholder="Cari layanan..." class="search-input">
        <button type="button" class="search-button" onclick="filterServices()">Cari</button>
    </form>
</section>


<section class="portal">
        <a href="detaill1.php" class="portal-card">
            <img src="images/slide3.jpeg" alt="Tata Cara Pendaftaran Paspor">
            <span>Tata Cara Pendaftaran Paspor</span>
    </a>

    <a href="detaill2.php" class="portal-card">
        <img src="images/slide2.jpeg" alt="Cara Mendaftar di M-Paspor">
        <span>Cara Mendaftar di M-Paspor</span>
    </a>

    <a href="detaill3.php" class="portal-card">
        <img src="images/slide4.jpeg" alt="Alur Penerbitan Paspor">
        <span>Alur Penerbitan Paspor</span>
    </a>

    <a href="detaill4.php" class="portal-card">
        <img src="images/slide5.jpeg">
        <span>Pergantian Paspor Karena Keadaan Kahar</span>
    </a>
    <a href="detaill5.php" class="portal-card">
        <img src="images/slide6.jpeg">
        <span>Permohonan Paspor Anak</span>
    </a>
    <a href="detaill6.php" class="portal-card">
        <img src="images/slide7.jpeg">
        <span>Pergantian Paspor</span>
    </a>
    <a href="detaill7.php" class="portal-card">
        <img src="images/slide8.jpeg">
        <span>Paspor Rusak</span>
    </a>
    <a href="detaill8.php" class="portal-card">
        <img src="images/slide9.jpeg">
        <span>Paspor Hilang</span>
    </a>
    <a href="detaill9.php" class="portal-card">
        <img src="images/slide10.jpeg">
        <span>Perubahan Identitas Paspor</span>
    </a>
    <a href="detaill10.php" class="portal-card">
        <img src="images/slide11.jpeg">
        <span>Biaya Permohonan Paspor</span>
    </a>
    <a href="detaill11.php" class="portal-card">
        <img src="images/slide12.jpeg">
        <span>Tata Cara Berpakaian</span>
    </a>
    <a href="detaill12.php" class="portal-card">
        <img src="images/slide13.jpeg">
        <span>Ketentuan Pengambilan Paspor</span>
    </a>
    <a href="detaill13.php" class="portal-card">
        <img src="images/slide14.jpeg">
        <span>Tata Cara Pembayaran Paspor</span>
    </a>
    <a href="detaill14.php" class="portal-card">
        <img src="images/slide15.jpeg">
        <span>Tindak Pidana Perdagangan Orang</span>
    </a>
</section>

<!-- ================= FOOTER ================= -->
<?php
    include "footer.php";
?>


</body>
</html>

<script>
    function filterServices() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const cards = document.querySelectorAll('.portal-card');

        cards.forEach(card => {
            const text = card.querySelector('span').textContent.toLowerCase();
            if (text.includes(input)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
    

    // Optional: filter secara realtime saat mengetik
    document.getElementById('searchInput').addEventListener('input', filterServices);
</script>


</body>
</html>