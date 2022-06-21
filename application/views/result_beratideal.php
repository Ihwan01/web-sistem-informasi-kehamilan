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
            <div class="card-header">Result</div>
            <div class="card-body bg-light">
                <h3>Target berat badan yang direkomendasikan</h3>
                <span style="font-size: 44px; font-weight:600" id="target-rekom" data-beratmin="<?= $beratrekom['beratmin']; ?>" data-beratmax="<?= $beratrekom['beratmin']; ?>"></span> <strong>KG</strong>
                <div class="rekomendasi p-3 border border-primary rounded">
                    REKOMENDASI BERAT BADAN DI USIA
                    <select class="form-control" name="rekomendasi_berat" id="rekomendasi_berat">
                        <?php foreach ($rekomendasi as $row) : ?>
                            <option value="<?= $row['berat']; ?>" data-beratmin="<?= $row['beratmin']; ?>" data-beratmax="<?= $row['beratmax']; ?>"><?= $row['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var tampilrekommin = parseFloat($('#target-rekom').data('beratmin')).toFixed(2);
            var tampilrekommax = parseFloat($('#target-rekom').data('beratmax')).toFixed(2);
            $('#target-rekom').text(tampilrekommin + " - " + tampilrekommax);

            $('#rekomendasi_berat').change(function() {
                var rekom = parseFloat($(this).val());
                var rekomfloat = rekom.toFixed(2);
                var beratmin = $(this).find(':selected').data('beratmin');
                var beratmin_fixed = parseFloat(beratmin).toFixed(2);
                var beratmax = $(this).find(':selected').data('beratmax');
                var beratmax_fixed = parseFloat(beratmax).toFixed(2);
                console.log(beratmax_fixed);
                $('#target-rekom').text(beratmin_fixed + " - " + beratmax_fixed);
            });
        });
    </script>
</body>

</html>