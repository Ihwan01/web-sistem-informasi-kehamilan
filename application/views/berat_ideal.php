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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Kesuburan'); ?>">Kesuburan</a>
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

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Kalkulator Berat Badan Ideal Ibu Hamil</div>
            <div class="card-body bg-light">
                <?= form_open('berat_ideal/result'); ?>
                <div class="form-group">
                    <label for="berat">Berat badan sebelum hamil (kg)</label>
                    <input class="form-control" type="number" name="berat" id="berat" placeholder="Contoh : 50">
                </div>
                <div class="form-group">
                    <label for="tinggi">Tingi badan (cm)</label>
                    <input class="form-control" type="number" name="tinggi" id="tinggi" placeholder="Contoh : 160">
                </div>
                <div class="form-row">
                    <div class="form-group col-10">
                        <label for="usia_kehamilan">Usia kehamilan (dalam minggu)</label>
                        <input type="range" class="custom-range" name="usia_kehamilan" min="1" max="40" id="usia_kehamilan" value="1">
                    </div>
                    <div class="form-group col-2">
                        <div class="p-1 border border-dark text-dark text-center" id="showAge" style="font-size:20px;font-weight:bold"> </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" id="hitung" value="Hitung">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#showAge').text(($('#usia_kehamilan').val()));
            $('#usia_kehamilan').on('input', function() {
                $('#showAge').text(($(this).val()));
            })
        });
    </script>
</body>

</html>