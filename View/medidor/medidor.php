<h1 class="page-header">Medidores </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=cliente&a=Nuevo">Nuevo Cliente</a>
    <a class="btn btn-primary" href="?c=medidor&a=Nuevo">Nuevo Medidor</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id medidor</th>
            <th style="width:120px;">Id del cliente</th>
            <th style="width:120px;">Numero del Medidor</th>
            <th style="width:120px;">Tipo de medidor</th>
            <th style="width:120px;">Fecha de instalacion</th>
            <th style="width:120px;">Fecha de ultima lectura</th>
            <th style="width:120px;">id de la factura</th>
            <th style="width:120px;">Marca del Medidor</th>
            
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idmedidor ; ?></td>
            <td><?php echo $r->idcliente ; ?></td>
            <td><?php echo $r->NumMed; ?></td>
            <td><?php echo $r->TipoMed; ?></td>
            <td><?php echo $r->Fechains; ?></td>
            <td><?php echo $r->FechaUl; ?></td>
            <td><?php echo $r->idfactura; ?></td>
            <td><?php echo $r->MarcaMed; ?></td>
            <td>
                <a href="?c=medidor&a=Crud&idmedidor=<?php echo $r->idmedidor; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=medidor&a=Eliminar&idmedidor=<?php echo $r->idmedidor; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
