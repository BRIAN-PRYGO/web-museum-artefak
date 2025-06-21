<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tentang Museum Artefak di Indonesia</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      /* Optional: Highlight active menu link */
      nav ul li a.active,
      nav ul li a:hover,
      nav ul li a:focus {
        background-color: rgba(255, 255, 255, 0.25);
        color: #fff;
        outline: none;
        border-radius: 8px;
      }
      .about-container {
        display: flex;
        flex-wrap: wrap;
        gap: 32px;
        align-items: center;
        justify-content: center;
        padding: 24px 0;
      }
      .about-text {
        flex: 1 1 350px;
        max-width: 600px;
        font-size: 1.1rem;
        color: #444;
        line-height: 1.7;
      }
      .about-image-container {
        flex: 1 1 300px;
        max-width: 500px;
      }
      .about-image {
        width: 100%;
        height: auto;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      }
      @media (max-width: 768px) {
        .about-container {
          flex-direction: column;
        }
        .about-image-container, .about-text {
          max-width: 100%;
        }
      }
    </style>
</head>
<body>
    <header>
        <h1>Museum Artefak di Indonesia</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tentang.php" class="active" aria-current="page">Tentang Museum</a></li>
                <li><a href="koleksi.php">Koleksi Artefak</a></li>
                <li><a href="galeri.php">Galeri Foto</a></li>
                <li><a href="berita.php">Berita dan Acara</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Sejarah dan Filosofi Museum</h2>
            <div class="about-container">
                <div class="about-text">
                    <p>
                      Museum Artefak di Indonesia berdiri sebagai pusat pelestarian dan edukasi mengenai benda-benda peninggalan yang merefleksikan perjalanan sejarah dan budaya bangsa Indonesia. Diresmikan pada tahun 1995, museum ini merupakan hasil kolaborasi antara pemerintah dan para ahli sejarah untuk menjaga warisan budaya yang mendalam dan beragam.
                    </p>
                    <p>
                      Filosofi museum ini berakar pada kepedulian untuk melestarikan artefak bukan hanya sebagai benda mati, tetapi juga sebagai sumber ilmu, inspirasi, dan cerita yang menghubungkan masa kini dengan masa lalu. Setiap koleksi di museum ini diperlakukan dengan penuh kehati-hatian dan proses konservasi yang profesional guna menjamin keberlanjutan sejarah bangsa.
                    </p>
                    <p>
                      Melalui berbagai pameran dan program edukasi, museum berupaya menumbuhkan rasa cinta tanah air serta kesadaran akan pentingnya budaya sebagai identitas bangsa yang harus dijaga dan diwariskan kepada generasi mendatang.
                    </p>
                </div>
                <div class="about-image-container">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e642ffb2-fc50-4f1e-9cea-08d75dcb0b4c.png" alt="Interior museum artefak Indonesia menampilkan koleksi artefak kuno dengan pencahayaan hangat, rak kaca modern, dan pengunjung yang tengah mengamati pameran" class="about-image" />
                </div>
            </div>
        </section>
        <section>
            <h2>Misi dan Visi</h2>
            <div class="about-container">
                <div class="about-text">
                    <p><strong>Visi:</strong></p>
                    <p>
                      Menjadi museum terkemuka yang menginspirasi, mendidik, dan menghubungkan masyarakat dengan sejarah dan budaya bangsa melalui pelestarian artefak berharga khas Indonesia.
                    </p>
                    <p><strong>Misi:</strong></p>
                    <ul>
                      <li>Melaksanakan pelestarian koleksi artefak dengan standar konservasi internasional.</li>
                      <li>Memberdayakan komunitas dan generasi muda melalui program edukasi dan partisipasi aktif.</li>
                      <li>Mengembangkan pameran tematik yang inovatif dan interaktif untuk menarik perhatian beragam kalangan.</li>
                      <li>Menjalin kerjasama dengan lembaga budaya dan akademisi untuk penelitian dan pengembangan koleksi.</li>
                    </ul>
                </div>
                <div class="about-image-container">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/591af835-c60e-4b01-ab56-61aef0805184.png" alt="Seorang pemandu museum sedang menjelaskan artefak kepada kelompok pelajar yang antusias dengan latar belakang koleksi museum" class="about-image" />
                </div>
            </div>
        </section>
        <section>
            <h2>Pengelola dan Kontak</h2>
            <div class="about-container">
                <div class="about-text">
                    <p>
                      Museum dikelola oleh tim profesional dengan latar belakang sejarah, arkeologi, dan konservasi budaya yang berdedikasi untuk menjaga dan merawat koleksi artefak. Kami menyediakan layanan lengkap mulai dari konsultasi, kunjungan kelompok, hingga kolaborasi penelitian.
                    </p>
                    <address>
                      Jl. Museum Nasional No. 7<br />
                      Jakarta Pusat, DKI Jakarta 10110<br />
                      Telepon: (021) 12345678<br />
                      Email: info@museumartefak.id
                    </address>
                </div>
                <div class="about-image-container">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c48e20f1-8e0b-47a2-ac18-8e4e708abdd1.png" alt="Foto tim pengelola museum tersenyum dan berdiri di dalam ruang konservasi artefak dengan koleksi kuno rapi di belakang mereka" class="about-image" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Museum Artefak di Indonesia</p>
    </footer>
</body>
</html>

