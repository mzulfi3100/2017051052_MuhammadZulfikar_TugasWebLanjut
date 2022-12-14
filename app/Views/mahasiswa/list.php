<?= $this->extend('template')?>
<?= $this->section('content')?>
<div class="p-4">
    <a href="/create" type="button" class="btn btn-primary mb-3"><i class="fa fa-paper-plane"></i>Tambah </a>
    <table class="table table-striped p-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Created_At</th>
                <th scope="col">Updated_at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($mahasiswa as $mhs) : ?>
            <tr>
                <th scope="row"> <?= $no ?> </th>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['deskripsi'] ?></td>
                <td><?= $mhs['created_at'] ?></td>
                <td><?= $mhs['updated_at'] ?></td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id'] ?>"><i class="fa fa-plus"></i>Edit</a>
                        <form action="/delete/<?= $mhs['id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                        </form>
                    </div>
                </td>
                
            </tr>
            <?php $no++; endforeach;?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>