<!DOCTYPE htmml>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregnancy Health</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
</head>

<body class="bg-transparent">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navna">
        <div class="container">
            <a href="<?= site_url('home'); ?>" class="navbar-brand">Pregnancy Health</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('kesuburan'); ?>">Kesuburan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Perkembangan Janin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?= site_url('perkembangan/trimester1'); ?>">Trimester 1</a>
                            <a class="dropdown-item" href="<?= site_url('perkembangan/trimester2'); ?>">Trimester 2</a>
                            <a class="dropdown-item" href="<?= site_url('perkembangan/trimester3'); ?>">Trimester 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('melahirkan'); ?>">Melahirkan</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <a class="text-decoration-none text-secondary" href="<?= site_url('berat_ideal'); ?>">
                        <img src="<?= base_url('assets/image/Timbangan.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Kalkulator Berat Badan Ideal Ibu Hamil</h5><br>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <a class="text-decoration-none text-secondary" href="<?= site_url('kesuburan/kalkulatorMasaSubur'); ?>">
                        <img src="<?= base_url('assets/image/Masa_Subur.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Kalkulator Masa Subur</h5><br><br>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <a class="text-decoration-none text-secondary" href="#">
                        <img src="<?= base_url('assets/image/Tes_Kehamilan.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Skrining yang Harus Dilakukan Saat Hamil, dari Trimester 1 Sampai 3</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center">Jenis Pemeriksaan Kehamilan Setelah Pertama Kali Tahu Hamil</h1>
        <blockquote class="text-justify">
            <p>Tujuan utama dari serangkaian pemeriksaan kehamilan adalah untuk menjaga agar kehamilan sehat.
                Tak hanya untuk mengevaluasi kondisi ibu dan janin, pemeriksaan kehamilan juga penting untuk
                memantau tumbuh kembang janin dan mendeteksi sedini mungkin adanya kelainan, baik pada ibu
                maupun janin.</p>

            <h4>Rangkaian Pemeriksaan Kehamilan yang Perlu Dijalani Ibu Hamil</h4>
            <p>Saat melakukan pemeriksaan kehamilan, dokter akan mengukur berat badan serta tanda-tanda vital
                Anda, yang meliputi tekanan darah, denyut jantung, laju pernapasan, dan suhu tubuh. Dokter
                juga akan melakukan pemeriksaan fisik dan pemeriksaan kandungan, termasuk pemeriksaan
                Leopold.</p>
            <p>Setelah itu, dokter juga mungkin akan melakukan beberapa pemeriksaan penunjang, seperti:</p>

            <h4>Tes darah</h4>
            <p>Pemeriksaan darah lengkap merupakan salah satu jenis tes darah yang rutin dilakukan dokter
                ketika melakukan pemeriksaan kehamilan. Tujuannya adalah untuk mendeteksi kelainan yang mungkin
                dialami ibu hamil atau janin.</p>
            <p>Selain pemeriksaan darah lengkap, pemeriksaan yang juga dilakukan dalam tes darah adalah:</p>

            <h4>1. Tes golongan darah</h4>
            <p>Tes golongan darah bertujuan untuk mengetahui golongan darah dan rhesus ibu hamil, guna
                mengantisipasi kemungkinan adanya perbedaan rhesus antara ibu hamil dengan janin.</p>
            <p>Bila hasil tes darah menunjukkan bahwa Anda memiliki rhesus negatif dan janin memiliki
                rhesus positif, ada risiko untuk terjadi inkompatibilitas rhesus. Kondisi tersebut akan
                menyebabkan bayi mengalami anemia akibat pecahnya sel darah (anemia hemolitik) ketika ia
                lahir. Akibatnya, bayi bisa mengalami penyakit kuning (jaundice).</p>
            <p>Jika sebelumnya Anda sudah pernah melakukan cek golongan darah dan rhesus, pemeriksaan ini
                tidak diperlukan lagi.</p>

            <h4>2. Hemoglobin (Hb)</h4>
            <p>Hemoglobin atau Hb adalah protein kaya zat besi yang ditemukan di dalam sel darah merah.
                Hb memungkinkan sel darah merah untuk mendistribusikan oksigen ke seluruh tubuh dan
                mengangkut karbon dioksida dari seluruh tubuh untuk dibuang melalui paru-paru.</p>
            <p>Setiap ibu hamil perlu menjalani pemeriksaan Hb untuk mendeteksi apakah terdapat penyakit
                anemia atau kurang darah.</p>
            <p>Anemia perlu dicegah dan diobati karena dapat mengganggu kesehatan ibu dan janin. Anemia
                juga dapat meningkatan risiko terjadinya kelahiran prematur, keguguran, berat badan lahir
                rendah, dan perdarahan postpartum.</p>

            <h4>3. Tes gula darah</h4>
            <p>Tes gula darah adalah bagian dalam pemeriksaan kehamilan rutin. Pemeriksaan ini penting
                untuk mendeteksi apakah ibu hamil mengalami diabetes kehamilan (diabetes gestasional).</p>
            <p>Ibu hamil lebih berisiko untuk menderita diabetes selama hamil bila mengalami kelebihan
                berat badan (overweight) atau obesitas, memiliki riwayat diabetes pada kehamilan sebelumnya,
                atau memiliki riwayat penyakit diabetes sebelumnya.</p>

            <h4>4. Skrining penyakit infeksi</h4>
            <p>Pemeriksaan ini dilakukan untuk mendeteksi apakah terdapat penyakit infeksi pada ibu hamil.
                Skrining penyakit infeksi termasuk hepatitis B, sifilis, HIV, dan TORCH.</p>
            <p>Semakin cepat terdeteksi, infeksi dapat semakin cepat diobati. Selain untuk mencegah risiko
                penularan pada janin, pemeriksaan ini juga penting dilakukan untuk mengurangi risiko terjadinya
                penularan infeksi pada pasangan.</p>

            <h4>5. Pemeriksaan genetik</h4>
            <p>Pemeriksaan ini dilakukan untuk menentukan apakah Anda memiliki kelainan genetik, seperti thalasemia,
                yang berisiko diturunkan kepada janin. Pemeriksaan genetik juga bisa dilakukan pada janin dengan
                mengambil sampel cairan ketuban (amniocentesis) dan sampel darah janin (fetal blood sampling).</p>
        </blockquote>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>