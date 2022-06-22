<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="card">
            <div class="card-header bg-primary">
                Daftar
            </div>
            <div class="card-body">
                <form action="<?= base_url('pasien/save'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary" id="basic-addon1">NIK</span>
                            <input type="text" class="form-control" placeholder="NIK" aria-label="NIK" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary" id="basic-addon1">Nama</span>
                            <input type="text" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1">Nomor Telepon</span>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1">Tempat Lahir</span>
                        <input type="text" class="form-control" placeholder="Tempat Lahir" aria-label="Templat Lahir" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1">Tanggal Lahir</span>
                        <input type="date" class="form-control" placeholder="Tgl-Lahir" aria-label="Tanggal Lahir" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1">Pemeriksaan</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Pemeriksaan" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-primary" id="basic-addon1">Atas Permintaan</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Atas Permintaan" aria-describedby="basic-addon1">
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </fieldset>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>