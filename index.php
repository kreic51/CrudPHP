<?php
    require "helpers/conexion.php";

    $myRespuesta = $conexion -> 
        query(
            "SELECT p.Id, p.Nombre, p.ApellidoPaterno, p.ApellidoMaterno, e.Nombre Estatus 
            FROM personas p
            INNER JOIN estatus e on p.EstatusId = e.Id
            ORDER BY p.Id
        ");

    $myEstatus = $conexion -> 
        query(
            "SELECT e.Id, e.Nombre FROM estatus e            
        ");
     
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrudPHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

    <div class="container">

        <div class="row my-3">
            <div class="col text-center">
                <h3>Listado de Personas</h3>
            </div>
        </div>
    
        <div class="row bg-white rounded border shadow-sm mb-3" >
            <div class="col p-0">
                <table class="table table-responsive table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center">Id</th>
                            <th>Nombre</th>
                            <th>APaterno</th>
                            <th>AMaterno</th>
                            <th>Estatus</th>
                            <th class="text-center">
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevo">
                                    <i class="fa-solid fa-plus"></i> Nuevo Registro
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($myRespuesta != null ) {
                                while($data = $myRespuesta -> fetch_assoc()) {
                        ?>

                        <tr>
                            <td class="text-center"><?=$data['Id']?></td>
                            <td><?=$data['Nombre']?></td>
                            <td><?=$data['ApellidoPaterno']?></td>
                            <td><?=$data['ApellidoMaterno']?></td>
                            <td><?=$data['Estatus']?></td>
                            <td class="text-center">
                                <!-- <a href="#" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>                                 -->
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar" 
                                    data-id="<?=$data['Id']?>">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar" 
                                    data-id="<?=$data['Id']?>">
                                    <i class="fa-solid fa-trash"></i>
                                </button>                                
                            </td>
                        </tr>

                        <?php

                                }
                            } else {
                        ?>

                        <tr>
                            <td class="text-center" colspan="6">No hay registros para mostrar.</td>
                        </tr>

                        <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php
        include "components/ModalNuevo.php";
        include "components/ModalEditar.php";
        include "components/ModalEliminar.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="public/customScripts.js"></script>
</body>
</html>