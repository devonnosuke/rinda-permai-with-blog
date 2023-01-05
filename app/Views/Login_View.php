<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="card" style="width: 50%; margin: 0 auto; margin-top: 50px;">
        <div class="card-header bg-primary text-white">
            LOGIN
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <?php if (session()->getFlashdata('info')) { ?>
                    <div class="alert alert-danger">
                        <?php echo session()->getFlashdata('info') ?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="inputUsername" class="form-label ">
                        Username
                    </label>
                    <input type="text" name="username" class="form-control" value="<?php echo session()->getFlashdata('username') ?>" id="inputUsername" placeholder="Masukan Username">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label ">
                        Password
                    </label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukan Password....">
                </div>
                <div class="mb-3">
                    <input type="submit" name="login" class="btn" style="background-color: #91662f; border-color: #724f22" value="LOGIN">
                </div>
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>