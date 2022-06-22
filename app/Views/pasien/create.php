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
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('/pasien/create'); ?>" method="post">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="<?= old('nik'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?= old('nomor_telepon'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= old('tgl_lahir'); ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label for="pemeriksaan">Pemeriksaan :</label>
                        <select name="pemeriksaan" class="form-control" id="pemeriksaan">
                            <option value="covid-antigen-rapid">Covid Antigen - Rapid</option>
                            <option value="covid-antibody-rapid">Covid Antibody - Rapid</option>
                            <option value="covid-pcr-swap">Covid PCR - Swap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="permintaan">Atas Permintaan</label>
                        <input type="text" class="form-control" id="permintaan" name="permintaan" value="<?= old('permintaan'); ?>">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>