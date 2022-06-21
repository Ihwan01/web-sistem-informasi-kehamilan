<!DOCTYPE html>
<html lang="eng">

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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Perkembangan Janin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> <a class="dropdown-item" href="<?= site_url('perkembangan/Trimester1'); ?>">Trimester 1</a>
                            <a class="dropdown-item" href="<?= site_url('perkembangan/Trimester2'); ?>">Trimester 2</a>
                            <a class="dropdown-item" href="<?= site_url('perkembangan/Trimester3'); ?>">Trimester 3</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('melahirkan'); ?>">Melahirkan</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="card shadow mb-2">
                    <a class="text-decoration-none text-secondary" href="<?= site_url('melahirkan/melahirkan1'); ?>">
                        <img src="<?= base_url('assets/image/Melahirkan1.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Melahirkan Lebih Lancar, Ini Berbagai Teknik Persalinan yang Meringankan Rasa Sakit</h5>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="card shadow mb-2">
                    <a class="text-decoration-none text-secondary" href="melahirkan/melahirkan2">
                        <img src="<?= base_url('assets/image/Melahirkan2.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Hal yang Perlu Diketahui dan Dipersiapkan saat Lahiran Caesar Kedua</h5>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center">Postnatal Anxiety, Ketakutan Berlebih Ibu Baru Saat Merawat Bayi </h1>
        <blockquote class="text-justify">
            <p>Euforia menjadi seorang ibu tentunya kerap dirasakan oleh para perempuan yang baru melahirkan.
                Antusiasme mengurus si kecil membuat Anda sering bertanya-tanya yang menjurus pada apa yang
                disebut dengan postnatal anxiety.</p>

            <h4>Penjelasan tentang postnatal anxiety</h4>
            <p>Postnatal anxiety atau juga dikenal dengan nama postpartum anxiety merupakan sebuah keadaan ketika
                seorang ibu memiliki kekhawatiran yang berlebihan tentang keadaan bayinya. Biasanya hal ini
                terjadi pada kelahiran anak pertama, masa-masa di mana ibu belum memiliki pengalaman dalam mengurus
                bayi. Postnatal anxiety sendiri terdiri dibagi menjadi beberapa jenis yang berbeda, termasuk postnatal
                generalized anxiety disorder, postnatal obsessive compulsive disorder, dan postnatal health anxiety.</p>
            <p>Pada postnatal generalized anxiety disorder, seorang ibu memiliki kecemasan tingkat tinggi yang konstan
                tentang segala hal menyangkut si kecil, mulai dari kesehatan bayi, pemberian makan, hingga kemampuannya
                sendiri sebagai orang tua. Sedangkan postnatal obsessive compulsive disorder adalah kondisi di mana seorang
                ibu seringkali memikirkan kemungkinan bahaya yang akan menimpa bayinya. Lain lagi dengan postnatal health
                anxiety yang berarti seorang ibu cenderung memikirkan bahkan meragukan kesehatan bayinya sendiri</p>
            <p>Seringnya, hal ini dipicu dari rasa takut tidak bisa mengurus si kecil dengan baik. Terlebih lagi, proses
                kehamilan sampai melahirkan yang tentunya juga menyebabkan perubahan besar pada tubuh wanita dari segi
                fisik maupun naik turunnya hormon yang dapat berdampak pada suasana hati. Mengurus anak pun mau tak
                mau akan membuat Anda lebih sering terjaga di tengah malam. Jam tidur yang tidak menentu berpengaruh
                terhadap tingkat stres. Ujungnya, semua faktor tersebut memicu rasa cemas yang lebih besar dari biasanya.</p>
            <p>Ditambah pandangan dari orang-orang di sekitar yang menganggap bahwa masa-masa setelah baru melahirkan seharusnya
                menjadi momen yang bahagia, tak jarang ibu pun ikut tertekan dan merasa bersalah jika mereka tidak dapat melaluinya
                dengan baik.</p>

            <h4>Berbagai gejala postnatal anxiety</h4>
            <p>Meski hampir semua orang tua kerap merasa cemas dan khawatir apakah mereka sudah cukup baik dalam merawat si kecil,
                berhati-hatilah jika Anda sudah menunjukkan beberapa gejala seperti berikut ini:</p>
            <ul>
                <li>Rasa khawatir yang muncul terus menerus dan tidak menghilang seiring waktu</li>
                <li>Perasaan cemas bahwa hal-hal yang Anda takuti akan terjadi</li>
                <li>Perubahan waktu tidur dan nafsu makan yang tidak biasa</li>
                <li>Sulit berkonsentrasi</li>
            </ul>
            <p>Anda juga mungkin akan mengalami gejala fisik meliputi:</p>
            <ul>
                <li>Kelelahan</li>
                <li>Jantung berdetak kencang</li>
                <li>Sesak nafas</li>
                <li>Keringat dingin</li>
                <li>Mual</li>
                <li>Pusing</li>
                <li>Tubuh bergetar</li>
            </ul>
            <p>Pada beberapa kasus, ibu bisa saja mengalami serangan panik dan rasa ketakutan akan kematian bayinya.</p>

            <h4>Jika terjadi, bagaimana cara mengatasinya?</h4>
            <p>Tidak seperti baby blues yang cenderung terjadi dalam waktu singkat, postnatal anxiety bisa saja menimpa
                Anda selama berbulan-bulan. Ketika tidak segera ditangani, hal ini bisa saja berdampak pada masalah
                mental lainnya seperti gangguan kecemasan atau obsessive-compulsive disorder (OCD). Jika rasa cemas
                yang muncul sudah mulai mengganggu jam tidur dan menyita pikiran Anda, segera konsultasikan kekhawatiran
                Anda pada dokter. Pastikan juga Anda melakukan pemeriksaan setelah melahirkan sekitar enam minggu pertama.</p>
            <p>Pada kesempatan tersebut, sampaikan apa saja yang membuat Anda tak tenang. Jadwalkan pertemuan lanjutan
                jika Anda mulai memiliki gejala yang lebih parah. Dokter nantinya akan memberi rujukan pada psikiater atau
                spesialis kesehatan mental agar bisa mendapatkan penanganan yang tepat. Biasanya, Anda akan melalui terapi
                khusus seperti cognitive behavioral therapy yang akan membantu mengubah pola pikir Anda pada masalah yang
                dihadapi. Bila perlu, Anda mungkin juga akan diberikan obat-obatan.</p>
            <p>Aktivitas tertentu pun dapat membantu mengurangi kecemasan yang Anda rasakan. Latihan teknik relaksasi seperti
                meditasi atau berolahraga akan mengalihkan pikiran Anda dan membuat Anda merasa lebih kuat. Telah dibuktikan
                pada sebuah penelitian yang dilakukan oleh Universitas Georgia bahwa latihan aerobik dapat mengurangi intensitas
                datangnya gangguan kecemasan sebanyak 40% sampai 60 persen. Selain itu, menerapkan mindfulness juga akan
                membantu Anda mengendalikan stres yang diakibatkan dari rasa cemas.</p>
            <p>Mindfulness merupakan sebuah tindakan di mana Anda fokus pada sesuatu yang sedang dikerjakan tanpa memikirkan
                hasil ke depannya. Lakukan usaha ini perlahan bersama dengan meditasi, diharapkan Anda akan merasa lebih tenang
                dan tak lagi terlalu banyak memikirkan hal-hal buruk yang akan terjadi.</p>
        </blockquote>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>