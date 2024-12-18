<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>CREAR</title>
</head>
<body>
    <div class="container">
    <a class="btn btn-outline-primary mt-3 mb-3" href="<?=url()?>">Atras</a>
    <form class="form-control border border-black" action="<?=url("insert")?>" method="post">
        <div class="mb-3">
            <label for="exampleInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="exampleInput1" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <label for="exampleInput2" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInput2" placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3">
            <label for="exampleInput3" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInput3">
        </div>
        <button type="submit" class="btn btn-success">CREAR</button>
    </form>
    </div>  
</body>
</html>