<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>MengLogin</h1>
    <div class="container">
    <form action="fungsi/add_absen.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id_users" class="form-label">ID Users</label>
            <input type="hidden" class="form-control" name="id_users" id="id_users" placeholder="Masukkan ID users">
        </div>
         <div class="mb-3">
            <label for="jam_masuk" class="form-label">Jam Masuk</label>
            <input type="hidden" class="form-control" name="jam_masuk" id="jam_masuk" placeholder="Jam Masuk Anda">
        </div>
        <div class="mb-3">
            <label for="jam_keluar" class="form-label">Jam Keluar</label>
            <input type="jam_keluar" class="form-control" name="jam_keluar" id="jam_keluar" placeholder="Jam Keluar Anda">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="tanggal" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Masuk Anda">
        </div>
        <div class="mb-3">
            <label for="status_absen" class="form-label"></label>
            <select class="form-select" name="status_absen" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Sudah</option>
            <option value="2">Belum</option>
            
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>