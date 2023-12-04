<h1 class="page-header">Clientes</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=cliente&a=Nuevo">Nuevo Cliente</a>
    <a class="btn btn-primary" href="?c=medidor&a=Nuevo">Nuevo Medidor</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id de cliente</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Apellido Materno</th>
            <th style="width:120px;">Apellido Paterno</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Correo</th>
            <th style="width:120px;">Fecha de Contratacion</th>
            <th style="width:120px;">Direccion</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idcliente; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->ApellidoM; ?></td>
            <td><?php echo $r->ApellidoP; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td><?php echo $r->FechaCont; ?></td>
            <td><?php echo $r->Direccion; ?></td>
            <td>
                <a href="?c=cliente&a=Crud&idcliente=<?php echo $r->idcliente; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&idcliente=<?php echo $r->idcliente; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
