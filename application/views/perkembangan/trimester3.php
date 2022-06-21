<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregnancy Health</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Kesuburan'); ?>">Kesuburan</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Perkembangan Janin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="<?= site_url('perkembangan/Trimester1'); ?>">Trimester 1</a>
                            <a class="dropdown-item" href="<?= site_url('perkembangan/Trimester2'); ?>">Trimester 2</a>
                            <a class="dropdown-item active" href="<?= site_url('perkembangan/Trimester3'); ?>">Trimester 3</a>
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
        <h1 class="text-center">Perkembangan kehamilan trimester 3 terjadi dari minggu ke-28 sampai minggu ke-42</h1>
        <blockquote class="text-justify">
            <p>Dilansir dari laman Baby Center, perkembangan janin di usia kehamilan 28 minggu sudah seukuran terong
                yang besar. Berat badan janin bisa mencapai 1 kg dan panjangnya 38 cm dari kepala hingga tumit.</p>

            <h4>Perkembangan Kehamilan di Minggu ke-13</h4>
            <h5>Posisi kepala bayi ada di bawah</h5>
            <p>Pada jadwal periksa kandungan rutin, dokter akan memberi tahu apakah bayi Anda dalam posisi yang benar.
                Saat dilihat pada layar pemindai ultrasound atau USG, normalnya posisi kepala bayi ada di bawah atau
                menuju vagina. Apabila posisi bayi tampak lurus (kaki atau pantatnya di bawah), posisi ini disebut
                sungsang. Bila di usia 28 minggu kehamilan sampai waktunya lahir janin yang berada dalam posisi sungsang,
                bayi mungkin perlu dilahirkan dengan operasi caesar. </p>
            <p>Janin Anda masih memiliki waktu 3 bulan untuk mengubah posisinya. Jadi, jangan khawatir jika posisi bayi
                Anda sungsang sekarang. Kebanyakan bayi akan beralih posisi dengan sendirinya. Selain itu, lapisan lemak
                tubuh dan rambut janin masih akan terus bertambah sering dengan bertambahnya usia kehamilan.</p>
            <h5>Bayi bermimpi di dalam kandungan</h5>
            <p>Di usia 28 minggu, bayi sudah bisa bermimpi tentang ibu dan ayahnya. Dilansir dari laman What To Expect,
                aktivitas gelombang otak yang diukur pada janin yang sedang berkembang, menunjukkan siklus tidur yang
                berbeda. Hal ini termasuk fase gerakan mata yang cepat dan tahap ketika mimpi terjadi. Berbagai hal ini
                menjadi tanda perkembangan janin di usia 28 minggu kehamilan berjalan dengan baik.</p>
        </blockquote>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>