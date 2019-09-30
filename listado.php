<?php 
    include_once("conexion.php");
    $consulta = $bd->prepare("SELECT * FROM usuarios");
    $consulta->execute();
    $array_resultados = $consulta->fetchAll();
    // echo "<pre>";
    // print_r ($array_resultado);
    // echo "</pre>";
    // echo $array_resultado[1]['nombre'];
    // foreach ($array_resultados as $key => $resultado ) {
    //     echo $resultado['nombre']."<br>";
    // }
?>
<!DOCrole html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil | Biblioteca geek</title>
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://kit.fontawesome.com/1a78bd2af6.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Libreria Geek</a>
            <button class="navbar-toggler" role="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Inventario</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link disabled" href="#">Suscriptores</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>  
    <div class="container-fluid">
        <div class="menu-vertical">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link current" href="listado.html">Listado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crear.html">Crear nuevo</a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h1>Listado de suscriptores</h1>
                    </div>
                </div>
                <div class="row text-right mb-4">
                    <div class="col">
                        <a href="crear.html" 
                        class="btn btn-primary"
                        role="button"
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Agregar un nuevo usuario" 
                        data-html="true">
                            <i class="fas fa-user-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Rango</th>
                                <th scope="col" class="text-center">Controles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                      foreach ($array_resultados as $key => $resultado ): ?>
                                <tr>
                                    <th scope="row"><?php echo $key+1;?></th>
                                    <td><?php echo $resultado['nombre'];?></td>
                                    <td><?php echo $resultado['correo'];?></td>
                                    <td><?php echo $resultado['rango']=="1"? "Administrador":"Usuario"?></td>
                                    <td class="text-center">
                                        <a href="editar.php?id=<?php echo $resultado['id'];?>"
                                        role="button" 
                                        class="btn btn-success btn-sm" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Modificar datos de usuario" 
                                        data-html="true">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <a href="delete.php?id=<?php echo $resultado['id'];?>"
                                        role="button" 
                                        class="btn btn-danger btn-sm"  
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Eliminar usuario" data-h
                                        tml="true">
                                            <i class="fas fa-user-times"></i>
                                        </a>
                                        <a href="#" 
                                        role="button" 
                                        class="btn btn-info btn-sm"  
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Enviar mail a usuario" 
                                        data-html="true">
                                            <i class="fas fa-envelope text-white"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>       
        </div>
    </div>
    <script 
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
    crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
            $("[rel='tooltip']").tooltip();
        });
    </script> 
    <script 
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script 
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous"></script>   
</body>
</html>