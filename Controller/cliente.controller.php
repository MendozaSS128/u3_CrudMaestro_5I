<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/cliente.php';

class ClienteController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista proveedor-editar
    public function Crud(){
        $pvd = new cliente();

        //Se obtienen los datos del proveedor a editar.
        if(isset($_REQUEST['idcliente'])){
            $pvd = $this->model->Obtener($_REQUEST['idcliente']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        $pvd = new cliente();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/cliente/cliente-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $pvd = new cliente();

        //Captura de los datos del formulario (vista).
        $pvd->idcliente = $_REQUEST['idcliente'];
        $pvd->Nombre = $_REQUEST['Nombre'];
        $pvd->ApellidoM = $_REQUEST['ApellidoM'];
        $pvd->ApellidoP = $_REQUEST['ApellidoP'];
        $pvd->Telefono = $_REQUEST['Telefono'];
        $pvd->Correo = $_REQUEST['Correo'];
        $pvd->FechaCont = $_REQUEST['FechaCont'];
        $pvd->Direccion = $_REQUEST['Direccion'];

        //Registro al modelo proveedor.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php');
    }

    //Método que modifica el modelo de un proveedor.
    public function Editar(){
        $pvd = new cliente();

        $pvd->idcliente = $_REQUEST['idcliente'];
        $pvd->Nombre = $_REQUEST['Nombre'];
        $pvd->ApellidoM = $_REQUEST['ApellidoM'];
        $pvd->ApellidoP = $_REQUEST['ApellidoP'];
        $pvd->Telefono = $_REQUEST['Telefono'];
        $pvd->Correo = $_REQUEST['Correo'];
        $pvd->FechaCont = $_REQUEST['FechaCont'];
        $pvd->Direccion = $_REQUEST['Direccion'];


        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    //Método que elimina la tupla proveedor con el nit dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idcliente']);
        header('Location: index.php');
    }
}
