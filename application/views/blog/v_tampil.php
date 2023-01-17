<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="style.css">

    <title>Blog</title>
</head>

<style>
    body {
        font-family: "Poppins", sans-serif;
    }


    footer a {
        color: #4f46e5 !important  ;
        text-decoration: none;
        font-weight: bold;
    }
</style>
<body>


    <div class="container">
    <div class="card mt-5  table-responsive">
  <div class="card-header text-white"  style="background-color:#4f46e5 ;">
  <h2 class="items-center" >Data Buku<h2>
  </div>
  <div class="card-body">
        <hr>
        <a href="<?=site_url('Bookself/tambah')?>" class="btn btn-primary">Tambah Data <i class="bi bi-pencil-square"></i></a><br><br>
            <table class="table table-bordered table-striped ">
                <thead class="text-center text-white" style="background-color: #4f46e5;">
                    <tr class="">
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penerbit Buku</th>
                        <th>Jenis Buku</th>
                        <th>Kategori Buku</th>
                        <th>Harga Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($penerbit_buku as $item) {

                    
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $item->judul_buku; ?></td>
                        <td><?php echo $item->penerbit_buku; ?></td>
                        <td><?php echo $item->jenis_buku; ?></td>
                        <td><?php echo $item->kategori_buku; ?></td>
                        <td><?php echo $item->harga_buku; ?></td>
                        <td>
                            <!-- <a href="<?=site_url('blog/hapus')?>" class="btn btn-warning ">Edit</a> -->
                            <a href="<?=site_url('Bookself/hapus/' . $item->id)?>"
                            onclick="return confirm('Anda yakin ingin menghapus data?')"
                             class="btn btn-danger ">Hapus <i class="bi bi-trash"></i></a>

                            <a href="<?=site_url('Bookself/edit/' . $item->id)?>"
                           
                             class="btn btn-warning ">Edit <i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
  </div>
</div>

<footer class="mt-5">
<p class="text-center ">Copyright &copy; 2023 Develop by <span class=""> <a href="https://ervinarvian.vercel.app/">Ervin Arviandi</span></p>
</a>
</footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>