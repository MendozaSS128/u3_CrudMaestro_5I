<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-cliente" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Id de Cliente</label>
      <input type="text" name="idcliente" value="<?php echo $pvd->idcliente; ?>" class="form-control" placeholder="Ingrese su id" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $pvd->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Apellido Materno</label>
        <input type="text" name="ApellidoM" value="<?php echo $pvd->ApellidoM; ?>" class="form-control" placeholder="Ingrese su apellido materno" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Apellido Paterno</label>
        <input type="text" name="ApellidoP" value="<?php echo $pvd->ApellidoP; ?>" class="form-control" placeholder="Ingrese su apellido paterno" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="bigint" name="Telefono" value="<?php echo $pvd->Telefono; ?>" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $pvd->Correo; ?>" class="form-control" placeholder="Ingrese su correo" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Fecha de Contratacion</label>
        <input type="date" name="FechaCont" value="<?php echo $pvd->FechaCont; ?>" class="form-control" placeholder="Ingrese la fecha de contratacion" data-validacion-tipo="requerido|min:5" />
    </div>

    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="Direccion" value="<?php echo $pvd->Direccion; ?>" class="form-control" placeholder="Ingrese su direccion" data-validacion-tipo="requerido|min:5" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>
