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


    <title>Edit Blog</title>
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
    <div class="card mt-5 table-responsive">
  <div class="card-header text-white" style="background-color:#4f46e5 ;">
  <h2>Edit Data</h2>
  </div>
  <div class="card-body">
        <hr>
        <form action="<?=site_url('Bookself/proses_edit')?>" method="post">
        <div class="form-group">
            <label for="">Judul Buku</label>
            <input type="hidden" value="<?php echo $penerbit_buku->id; ?>" name="txtid">
            <input type="text" name="txtjudul_buku" class="form-control" value="<?php echo $penerbit_buku->judul_buku; ?>"></input>
        </div>
        <div class="form-group">
            <label for="">Penerbit Buku</label>
            <input type="text" name="txtpenerbit_buku" class="form-control" value="<?php echo $penerbit_buku->penerbit_buku; ?>"></input>
           <!-- <textarea name="txtemail" id="" cols="30" rows="10" class="form-control"><?php echo $email->email; ?></textarea> -->
        </div>
        <div class="form-group">
            <label for="">Jenis Buku</label>
            <input type="text" name="txtjenis_buku" class="form-control" value="<?php echo $penerbit_buku->jenis_buku; ?>"></input>
        </div>
        <div class="form-group">
            <label for="">Kategori Buku</label>
            <input type="text" name="txtkategori_buku" class="form-control" value="<?php echo $penerbit_buku->kategori_buku; ?>"></input>
        </div>
        <div class="form-group">
            <label for="">Harga Buku</label>
            <input type="text" name="txtharga_buku" class="form-control" value="<?php echo $penerbit_buku->harga_buku; ?>"></input>
        </div>
        <br>
        <br>
        <input type="submit" name="submit" value="simpan"  class="btn btn-primary" >
        <a href="<?=site_url('Bookself/index')?>" class="btn btn-warning">Batal <i class="bi bi-x-circle"></i></a>
    </input>
    </form>
    </div>
  </div>
</div>
      

<footer class="mt-5">
<p class="text-center ">Copyright &copy; 2023 Develop by <span class=""> <a href="https://ervinarvian.vercel.app/">Ervin Arviandi</span></p>
</a>
</footer>


<!-- Script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>