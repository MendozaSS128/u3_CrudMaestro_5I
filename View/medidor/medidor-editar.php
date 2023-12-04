<h1 class="page-header">
    <?php echo $prod->idmedidor != null ? $prod->NumMed : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=medidor">Medidores</a></li>
  <li class="active"><?php echo $prod->idmedidor != null ? $prod->NumMed : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-medidor" action="?c=medidor&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idmedidor" value="<?php echo $prod->idmedidor; ?>" />

    <div class="form-group">
      <label>Id medidor</label>
      <input type="text" name="idmedidor" value="<?php echo $prod->idmedidor; ?>" class="form-control" placeholder="Ingrese el id del medidor" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Id del cliente</label>
        <input type="text" name="idcliente" value="<?php echo $prod->idcliente; ?>" class="form-control" placeholder="Ingrese el id del cliente" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Numero del Medidor</label>
        <input type="text" name="NumMed" value="<?php echo $prod->NumMed; ?>" class="form-control" placeholder="Ingrese el numero del medido" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Tipo de medidor</label>
        <input type="text" name="TipoMed" value="<?php echo $prod->TipoMed; ?>" class="form-control" placeholder="Ingrese el tipo de medidor" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Fecha de instalacion</label>
        <input type="date" name="Fechains" value="<?php echo $prod->Fechains; ?>" class="form-control" placeholder="Ingrese la fecha de instalacion" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Fecha de la ultima lectura</label>
        <input type="date" name="FechaUl" value="<?php echo $prod->FechaUl; ?>" class="form-control" placeholder="Ingrese la fecha de la ultima lectura" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Id de la factura</label>
        <input type="text" name="idfactura" value="<?php echo $prod->idfactura; ?>" class="form-control" placeholder="Ingrese el id de la factura" data-validacion-tipo="requerido|min:3" />
    </div>

    <div class="form-group">
        <label>Marca del Medidor</label>
        <input type="text" name="MarcaMed" value="<?php echo $prod->MarcaMed; ?>" class="form-control" placeholder="Ingrese la marca del medidor" data-validacion-tipo="requerido|min:3" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-medidor").submit(function(){
            return $(this).validate();
        });
    })
</script>
