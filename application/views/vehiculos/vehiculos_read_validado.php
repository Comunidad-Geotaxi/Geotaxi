<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Vehiculos Read</h2>
        <table class="table">
	    <tr><td>Placa</td><td><?php echo $placa; ?></td></tr>
	    <tr><td>Niv</td><td><?php echo $niv; ?></td></tr>
	    <tr><td>Numeroeconomico</td><td><?php echo $numeroeconomico; ?></td></tr>
        <tr><td>idconcesionario</td><td><?php echo $idconcesinario; ?></td></tr>
	    <tr><td>Marca</td><td><?php echo $marca; ?></td></tr>
	    <tr><td>Modelo</td><td><?php echo $modelo; ?></td></tr>
	    <tr><td>Tarjetacirculacion</td><td><?php echo $tarjetacirculacion; ?></td></tr>        
	    <tr><td>Estatus</td><td><?php echo $descripcion; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('vehiculos/validado') ?>" class="btn btn-default">Cancelar</a></td></tr>
	</table>
        </body>
</html>