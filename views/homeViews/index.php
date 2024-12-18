<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Home</title>
</head>
<body>
    <div class="container">
    <h1>CRUD CON POSTGRESQL</h1>
    <a class="btn btn-primary mb-3" href="<?=url("create")?>">Crear</a>
        <table class="table table-striped-columns">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>IMAGEN</th>
                    <th>ESTADO</th>
                    <th>FECHA DE CREACION</th>
                    <th>FECHA DE ACTUALIZACION</th>
                    <th class="text-center" colspan="2">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $user):?>
                    <tr>
                        <td><?=$user["id_usuario"]?></td>
                        <td><?=$user["nombre"]?></td>
                        <td><?=$user["email"]?></td>
                        <td><?=$user["password"]?></td>
                        <td><?=$user["image"]?></td>
                        <td><?=$user["estado"]?></td>
                        <td><?=$user["create_date"]?></td>
                        <td><?=$user["update_date"]?></td>
                        <td class="text-center"><a class="btn btn-warning" href="<?=url("actualizar/".$user["id_usuario"])?>">UPDATE</a></td>
                        <td class="text-center"><a class="btn btn-danger" href="<?=url("delete/".$user["id_usuario"])?>">DELETE</a></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
    </table>
    </div>
</body>
</html>