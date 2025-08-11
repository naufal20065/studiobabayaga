<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Babayaga</title>
    <link rel="icon" type="image/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Header + Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/logo.png" alt="Logo" width="50" height="50" class="me-2">
                <strong>Studio Babayaga</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Abadikan Momen Indah Bersama Studio Babayaga</h1>
            <p class="lead">Kami menyediakan layanan fotografi profesional untuk segala acara.</p>
            <a href="#services" class="btn btn-primary btn-lg mt-3">Lihat Layanan</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" >
                    <img src="images/logo.png" alt="Studio" class="img-fluid rounded shadow" >
                </div>
                <div class="col-md-6">
                    <h2>Tentang Kami</h2>
                    <p>Studio Babayaga adalah studio foto profesional yang berlokasi di daerah Purwakarta dan bandung. 
                    Kami mengutamakan kualitas, kreativitas, dan kepuasan pelanggan dalam setiap jepretan.</p>
                    <p>Dari foto keluarga, pernikahan, hingga foto produk, kami siap membantu mengabadikan momen terbaik Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Layanan Kami</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="images/self.jpg" class="card-img-top" alt="Foto Keluarga">
                        <div class="card-body">
                            <h5 class="card-title">Self Foto</h5>
                            <p class="card-text">Momen bersama keluarga akan menjadi kenangan yang tak terlupakan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="images/box.jpg" class="card-img-top" alt="Foto Pernikahan">
                        <div class="card-body">
                            <h5 class="card-title">Foto Box</h5>
                            <p class="card-text">Abadikan hari istimewa Anda dengan hasil foto yang memukau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="images/get.jpeg" class="card-img-top" alt="Foto Produk">
                        <div class="card-body">
                            <h5 class="card-title">Foto Prewedding </h5>
                            <p class="card-text">Foto profesional untuk meningkatkan daya tarik produk Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container text">
            <h2>Hubungi Kami</h2>
            <p>Ingin booking sesi foto? Hubungi kami di:</p>
            <p><strong>Studio Bojong Purwakarta:</strong>082299589667</p>
            <p><strong>Studio Babayaga Cipeundeuy KBB:</strong>082299589667</p>
            <p><strong>Studio Babayaga Plered:</strong>082299589667</p>
            <a href="mailto:info@studiobabayaga.com" class="btn btn-primary">Kirim Email</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-3 text-center">
        <p class="mb-0">&copy; 2025 Studio Babayaga. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
