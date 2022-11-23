<?php
require_once("layouts/header.php");
?>
<figure class="text-center"><h1 class="display-4">Venta</h1></figure>
<form action="" method="get" class="form-control">
<?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>

    <label for="txtref" class="form-label">Referencia:</label>
    <input type="text" id="txtref" name="refer" class="form-control" value="<?php echo $v['referencia']; ?>"/>

    <label for="txtPre" class="form-label">Precio:</label>
    <input type="number" id="txtPre" name="precio" step="any" class="form-control" value="<?php echo $v['precio']; ?>"/>

    <label for="txtDat" class="form-label">Fecha:</label>
    <input type="text" id="txtDat" name="fecha" class="form-control" placeholder="aaaa/mm/dd hh:mm:ss" value="<?php echo $v['fecha']; ?>"/>

    <label for="txtidSuc" class="form-label">Id Sucursal:</label>
    <input type="number" id="txtidSuc" name="idsuc" class="form-control" value="<?php echo $v['idSucursal']; ?>"/>
    
    <label for="txtidcli" class="form-label">Id Cliente:</label>
    <input type="number" id="txtidcli" name="idcli" class="form-control" value="<?php echo $v['idCliente']; ?>"/>

    <label for="txtidcor" class="form-label">Id Corte de Venta:</label>
    <input type="number" id="txtidcor" name="idcor" class="form-control" value="<?php echo $v['idCorteVenta']; ?>"/>

</br>

<input type="hidden" name="idVenta" value="<?php echo $v['idVenta']; ?>"/></br>
<div class="d-grid gasp-2">
        <input type="submit" class="btn btn-primary" name="btn" value="Actualizar"> <br>
        </div>
        <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>
<?php
require_once("layouts/footer.php");