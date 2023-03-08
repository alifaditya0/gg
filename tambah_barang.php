<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Login</h1>
    <div class="container">
    <form action="fungsi/add_barang.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang">
        </div>
         <div class="mb-3">
            <label for="harga_barang" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" name="harga_barang" id="harga_barang" placeholder="Masukkan Harga Barang">
        </div>
        <div class="mb-3">
            <label for="stok_barang" class="form-label">Stok Barang</label>
            <input type="text" class="form-control" name="stok_barang" id="stok_barang" placeholder="Masukkan Stok Barang">
        </div>
        <div class="mb-3">
            <label for="status_barang" class="form-label">Status Barang</label>
            <select class="form-select" name="status_barang" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">10</option>
            <option value="2">20</option>
            
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>