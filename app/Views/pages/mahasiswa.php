<div class="p-4">
    <a href="/create" type="button" class="btn btn-primary">Tambah</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Create At</th>
      <th scope="col">Update At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
          <tr>
              <th scope="row"><?= $no; ?></th>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['create_at'] ?></td>
                <td><?= $mhs['updated_at'] ?></td>
                <td>
                  <div>
                    <a class="btn btn-warning mr-3" href="/edit/<?= $mhs['id'] ?>">Edit</a>
                    <form action="/delete/<?= $mhs['id'] ?>" method="post">
                      <input name="_method" value="DELETE" type="hidden">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </td>
          </tr>
        <?php $no++; ?>
      <?php endforeach; ?>
  </tbody>
</table>