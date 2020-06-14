<div class="container">
    <div class="row mt-3">
        <a href="<?= base_url(); ?>sekolah/add" class="btn" style="position: absolute; right: 405px; background-color: #DD4814; color: white;">Tambah Baru</a>
    </div>

    <div class="row">
            <div class="col-md6">
                <div class="container">
                    <h2>Data Sekolah</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($sekolah as $s) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $s->nama ?></td>
                                    <td><?= $s->alamat ?></td>
                                    <td>
                                        <img src="<?= base_url() ?>assets/foto/<?= $s->logo; ?>" style="max-width: 50px; max-height: 50px;" />
                                    </td>
                                    <td>
                                        <?= anchor('Sekolah/delete/' . $s->id, '<button type="button" class="btn btn-sm btn-danger">Hapus</button>') ?>
                                        <?= anchor('Sekolah/edit/' . $s->id, '<button type="button" class="btn btn-sm btn-warning">Ubah</button>') ?>
                                        <?= anchor('Sekolah/pdf/' . $s->id, '<button type="button" class="btn btn-sm btn-primary">PDF</button>') ?>
                                        <a href="<?= base_url('Sekolah/pdf/' . $s->id) ?>" target="_blank" class="btn btn-sm btn-success">Download</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>