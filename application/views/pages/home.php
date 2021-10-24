<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $js ?>
    <?= $css ?>

    <!-- Custom javascript -->
    <script src="<?= base_url('assets/js/custom.js') ?>" type="text/javascript" defer></script>

    <title>Week 08</title>
</head>
<body>
    <?= $header ?>
    <!-- Custom update button for jquery -->
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary mb-2" id="update">Reload</button>
    </div>
    <table class="table table-bordered" id="my-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Telp</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Telp</th>
            </tr>
        </tfoot>
    </table>
    <?= $footer ?>
</body>
</html>