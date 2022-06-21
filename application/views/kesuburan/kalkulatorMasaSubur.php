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
            <div class="card-header">Kalkulator Masa Kehamilan</div>
            <div class="card-body bg-light">
                <div class="form-group">
                    <label for="inputDate">Hari pertama haid terakhir Anda</label>
                    <input class="form-control" type="date" name="inputDate" id="inputDate" value="<?= date('Y-m-d'); ?>">
                </div>
                <div class="form-group">
                    <label for="inputCycle">Berapa lama siklus haid Anda berlangsung?</label>
                    <input class="form-control" type="number" name="inputCycle" id="inputCycle" placeholder="Rata-rata siklus haid wanita adalah 28 hari.">
                </div>
                <div>
                    <button class="btn btn-primary" id="hitung">Hitung</button>
                </div>
                <h6 class="mt-3">Result</h6>
                <table class="table table-striped mt-2 table-bordered">
                    <tr>
                        <td>Masa subur</td>
                        <td id="ms"></td>
                    </tr>
                    <tr>
                        <td>Haid berikutnya</td>
                        <td id="hb"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#hitung').click(function() {
                var tgl = new Date($('#inputDate').val());
                var lama = $('#inputCycle').val();
                var ms1 = new Date();
                var ms2 = new Date();
                ms1.setDate(tgl.getDate() + 11);
                ms2.setDate(tgl.getDate() + 17);
                var msDate1 = ms1.getDate();
                var msDate2 = ms2.getDate();
                var msMonth1 = ms1.getMonth() + 1;
                var msMonth2 = ms2.getMonth() + 1;
                var msYear1 = ms1.getFullYear();
                var msYear2 = ms2.getFullYear();
                if (msDate1.toString().length < 2) {
                    msDate1 = '0' + msDate1.toString();
                }
                if (msMonth1.toString().length < 2) {
                    msMonth1 = '0' + msMonth1.toString();
                }
                if (msDate2.toString().length < 2) {
                    msDate2 = '0' + msDate2.toString();
                }
                if (msMonth2.toString().length < 2) {
                    msMonth2 = '0' + msMonth2.toString();
                }
                msFull1 = msDate1 + "/" + msMonth1 + "/" + msYear1;
                msFull2 = msDate2 + "/" + msMonth2 + "/" + msYear2;
                tgl.setDate(tgl.getDate() + (+lama));
                var dd = tgl.getDate();
                var mm = tgl.getMonth() + 1;
                var y = tgl.getFullYear();
                if (dd.toString().length < 2) {
                    dd = '0' + dd.toString();
                }
                if (mm.toString().length < 2) {
                    mm = '0' + mm.toString();
                }
                var someFormattedDate = dd + '/' + mm + '/' + y;
                $('#hb').text(someFormattedDate);
                $('#ms').text(msFull1 + " sampai " + msFull2);
            });
        });
    </script>
</body>

</html>