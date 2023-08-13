<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <h1><title>Login</title></h1>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center" >
            <div class="col-6">
                <div class="card-header bg-primary text-white">
                    LOGIN
                </div>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="/login" method="POST">
                    <div class="mb-3">
                        <label for="InputId" class="form-label">Id</label>
                        <input type="text" name="id" class="form-control" id="InputId" value="<?php echo session()->getFlashdata('id_pgw') ?>" id="inputId" placeholder="Masukkan Id..."">
                    </div>
                    <div class="mb-3">
                        <label for="InputUsername" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="InputIUsername" value="<?php echo session()->getFlashdata('nama') ?>" id="inputUsername" placeholder="Masukkan username...">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password...">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login" value="LOGIN">Login</button>
                </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>