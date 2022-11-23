<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Zona</h1></figure>
<div class="d-grid gasp-2">

<a class="btn btn-success" href="../modelo/zona.php?m=nuevo" class="btn">Agregar</a>
</div> </br>
<div class="row row-cols-1 row-cols-md-3 g-4" id="tablaZona">
        <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <div class="col">
                    <div class="card">
                    <h5 class="card-header">ID: [<?php echo $v['idZona'] ?>]</h5>
                    <div class="card-body">
                    <h5 class="card-title">Nombre: <?php echo $v['nombre'] ?></h5>
                    <div class="collapse" id="Zona<?php echo $v['idZona']?>">
                    <p class="card-text"><ul><li>Usuario creó: <?php echo $v['idUsuarioCrea'] ?></li>
                        <li>Fecha creó: <?php echo $v['fechaCrea'] ?></li>
                        <li>Usuario modificó: <?php echo $v['idUsuarioModifica'] ?></li>
                        <li>Fecha modificó: <?php echo $v['fechaModifica'] ?></li>
                        </ul></p>
                    </div>
                    <div class="card-footer bg-transparent">
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                    <button class="btn btn-outline-primary" data-bs-toggle="collapse" href="#Zona<?php echo $v['idZona']?>" role="button" aria-expanded="false" aria-controls="Zona<?php echo $v['idZona']?>">Detalles</button>
                    <a href="../modelo/zona.php?m=editar&idZona=<?php echo $v['idZona']?>" class="btn btn-outline-warning">Editar</a>
                    <a href="../modelo/zona.php?m=eliminar&idZona=<?php echo $v['idZona']?>" class="btn btn-outline-danger" onclick="return confirm('¿Está seguro de eliminar el registro?'); false">Eliminar</a>
                    </div></div></div></div></div>
                    <?php endforeach; ?>
            <?php else: ?>
                <h5>NO HAY DATOS</h5>
            <?php endif ?>
            </div>
<?php
require_once("layouts/footer.php");