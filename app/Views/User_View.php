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
        <div class="card-header bg-success text-white">
            Halaman member
        </div>
        <div class="card-body">
            <h1>hello, <?php echo session()->get('member_username') ?></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, saepe quidem alias dolor ut accusantium!</p>
            <a href="<?php echo site_url('user/logout') ?>" class="btn btn-primary">LOGOUT</a>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>