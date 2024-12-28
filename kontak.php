<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZR - Kontak</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <!-- Menu Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #191970;">
        <div class="container">
            <a class="navbar-brand" href="index.html">kontak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="tentang.html">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Konten -->
    <div class="container mt-4 bg">
        <h1 class="text-center mb-4">Kontak Saya</h1>
        <div class="row">
            <form action="config/proses_kontak.php" method="POST"><br>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div><br>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div><br>
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Pesan" name="pesan" required></textarea>
                </div><br>
                <button class="btn text-black" style="background-color: skyblue;" type="submit">Simpan</button>
            </form>
        </div>

        <!-- Media Sosial -->
        <div class="row mt-5 text-center">
            <h2 class="mb-4">Ikuti Saya</h2>
            <div class="col">
                <a href="https://www.facebook.com/profile.php?id=100049192651071" target="_blank" class="me-3">
                    <i class="bi bi-facebook" style="font-size: 2rem;"></i>
                </a>
                <a href="https://www.instagram.com/muhamadridwaniskandar?igsh=YzljYTk1ODg3Zg==" target="_blank" class="text-danger me-3">
                    <i class="bi bi-instagram" style="font-size: 2rem;"></i>
                </a>
                <a href="https://github.com/AR73-prog" target="_blank" class="text-light me-3">
                    <i class="bi bi-github" style="font-size: 2rem;"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center mt-auto" style="background-color: #191970;">
        &copy; 2024 By Muhamad Ridwan Iskandar
    </footer>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
