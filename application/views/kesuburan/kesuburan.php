<!DOCTYPE html>
<html lang="en">

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
                    <li class="nav-item active">
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
                <div class="card shadow mb-2">
                    <a class="text-decoration-none text-secondary" href="<?= site_url('kesuburan/kalkulatorMasaSubur'); ?>">
                        <img src="<?= base_url('assets/image/Masa_Subur.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Kalkulator Masa Subur</h5><br>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow mb-2">
                    <a class="text-decoration-none text-secondary" href="<?= site_url('kesuburan/kesuburan1'); ?>">
                        <img src="<?= base_url('assets/image/Kesuburan1.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">8 Ciri Wanita Sedang dalam Masa Subur</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card shadow mb-2">
                    <a class="text-decoration-none text-secondary" href="<?= site_url('kesuburan/kesuburan2'); ?>">
                        <img src="<?= base_url('assets/image/Kesuburan2.jpg') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">10 Cara Meningkatkan Kualitas Sperma untuk Kesuburan Pria </h5>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center">Makan Makanan Berlemak Ternyata Ada Pengaruhnya Bagi Kesuburan</h1>
        <blockquote class="text-justify">
            <p>Salah satu faktor yang memengaruhi kesuburan wanita adalah persentase lemak dalam tubuhnya.
                Lemak tubuh yang terlalu sedikit bisa menyebabkan terhentinya menstruasi sehingga kesuburan
                akan turut menurun. Jika demikian, apakah wanita harus banyak makan makanan berlemak untuk
                meningkatkan kesuburan mereka?</p>

            <h4>Pengaruh persentase lemak terhadap kesuburan</h4>
            <p>Tubuh wanita memiliki dua hormon reproduksi utama, salah satunya adalah estrogen. Estrogen
                berfungsi dalam pematangan organ reproduksi wanita, terutama untuk perkembangan payudara,
                pertumbuhan rambut kemaluan, serta siklus menstruasi. Sebagian besar estrogen diproduksi
                oleh ovarium, yakni sepasang kelenjar pada organ reproduksi yang turut menghasilkan sel telur.
                Selain ovarium, hormon ini juga diproduksi oleh sel-sel lemak serta kelenjar adrenal yang terdapat
                pada ginjal.</p>
            <p>Jumlah hormon estrogen berubah-ubah sepanjang siklus menstruasi. Produksi hormon estrogen mencapai
                puncaknya saat pertengahan siklus, lalu menurun saat menstruasi. Produksi hormon ini akan terhenti
                sepenuhnya saat Anda mengalami menopause. Makanan berlemak memang tidak secara langsung meningkatkan
                kesuburan. Namun, lemak adalah bahan baku untuk membentuk estrogen. Jika Anda kekurangan lemak, tubuh
                tidak bisa memproduksi cukup estrogen yang diperlukan dalam siklus menstruasi normal.</p>
            <p>Melansir laman Hormone Health Network, rendahnya jumlah estrogen bisa mengurangi frekuensi menstruasi,
                bahkan menghentikannya sama sekali. Kekurangan estrogen juga dapat memicu gejala mirip menopause, seperti:</p>
            <ul>
                <li>Sensasi hangat atau panas pada tubuh (hot flashes)</li>
                <li>Gangguan tidur</li>
                <li>Menurunnya gairah seksual</li>
                <li>Vagina mengering</li>
                <li>Perubahan mood secara mendadak (mood swing)</li>
            </ul>
            <p>Kekurangan estrogen juga turut menghambat ovulasi, yakni proses pelepasan sel telur dari ovarium. Bila ovulasi
                tidak terjadi, sperma tidak dapat membuahi sel telur. Akibatnya, tingkat kesuburan menurun dan kehamilan pun
                akan lebih sulit terjadi.</p>

            <h4>Makanan berlemak yang membantu meningkatkan kesuburan</h4>
            <p>Makan makanan berlemak memberikan manfaat bagi kesuburan. Asupan lemak yang cukup mendukung berlangsungnya ovulasi
                sehingga pembuahan dapat terjadi. Ini sebabnya Anda perlu mendapatkan asupan lemak untuk bisa mengalami kehamilan.
                Akan tetapi, Anda tetap harus mencermati jenis lemak yang dikonsumsi. Jenis lemak yang bisa membantu kesuburan
                adalah lemak tak jenuh, termasuk asam lemak omega-3.</p>
            <p>Lemak tak jenuh adalah lemak menyehatkan yang dapat menurunkan kolesterol, meredakan peradangan, dan baik bagi
                kesehatan jantung. Makanan berlemak dari jenis ini juga dapat meningkatkan produksi estrogen sehingga bermanfaat
                bagi kesuburan. Berikut adalah beberapa bahan makanan kaya lemak tak jenuh untuk menambah kesuburan:</p>
            <ul>
                <li>Ikan salmon, tuna, hering, makerel, dan teri.</li>
                <li>Alpukat, baik segar ataupun dalam bentuk minyak.</li>
                <li>Kacang kenari, pistachio, pecan, dan almond.</li>
                <li>Buah zaitun dan minyaknya.</li>
                <li>Minyak kanola, minyak jagung, dan minyak kedelai.</li>
                <li>Biji labu, biji bunga matahari, biji chia, dan biji flax.</li>
                <li>Telur dan daging ayam.</li>
                <li>Cokelat hitam.</li>
            </ul>

            <h4>Makanan berlemak yang perlu dihindari</h4>
            <p>Di sisi lain, ada pula jenis lemak yang dapat menghambat kesuburan Anda, yakni lemak jenuh dan lemak trans. Keduanya
                banyak terdapat dalam produk makanan olahan, junk food, beberapa jenis margarin, dan produk makanan tinggi gula.
                Alih-alih meningkatkan kesuburan, makanan berlemak ini justru menimbulkan dampak sebaliknya. Pola makan tinggi lemak
                trans dapat memicu resistensi insulin, yakni penurunan respons tubuh terhadap hormon insulin yang mengatur gula darah.</p>
            <p>Resistensi insulin kemudian menyebabkan berbagai gangguan metabolisme, termasuk menghambat ovulasi. Dampaknya adalah
                ovulasi tidak terjadi, begitu pun dengan menstruasi, pembuahan, dan kehamilan. Makanan berlemak memang dapat menambah
                kesuburan, tapi lemak yang dimaksud adalah lemak tak jenuh yang menyehatkan tubuh. Batasi konsumsi lemak jenuh dan lemak
                trans karena keduanya justru berdampak buruk bagi kesuburan.</p>
            <p>Selain lemak, lengkapi pula asupan harian Anda dengan karbohidrat, protein, serat, serta vitamin dan mineral. Pastikan
                seluruhnya terdapat dalam menu harian karena tubuh Anda membutuhkan beragam nutrisi tersebut untuk mendukung kehamilan.
                Jika Anda ragu mengenai komposisi makanan yang tepat bagi kesuburan Anda, silakan berkonsultasi dengan dokter atau ahli gizi, ya!</p>
        </blockquote>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>