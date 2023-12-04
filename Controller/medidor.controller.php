<?php
require_once 'model/medidor.php';

class MedidorController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new medidor();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/medidor/medidor.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new medidor();

        if(isset($_REQUEST['idmedidor'])){
            $prod = $this->model->Obtener($_REQUEST['idmedidor']);
        }

        require_once 'view/header.php';
        require_once 'view/medidor/medidor-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new medidor();

        require_once 'view/header.php';
        require_once 'view/medidor/medidor-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new medidor();

        $prod->idmedidor = $_REQUEST['idmedidor'];
        $prod->idcliente = $_REQUEST['idcliente'];
        $prod->NumMed = $_REQUEST['NumMed'];
        $prod->TipoMed = $_REQUEST['TipoMed'];
        $prod->Fechains = $_REQUEST['Fechains'];
        $prod->FechaUl = $_REQUEST['FechaUl'];
        $prod->idfactura = $_REQUEST['idfactura'];
        $prod->MarcaMed = $_REQUEST['MarcaMed'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=medidor');
    }

    public function Editar(){
        $prod = new medidor();

        $prod->idmedidor = $_REQUEST['idmedidor'];
        $prod->idcliente = $_REQUEST['idcliente'];
        $prod->NumMed = $_REQUEST['NumMed'];
        $prod->TipoMed = $_REQUEST['TipoMed'];
        $prod->Fechains = $_REQUEST['Fechains'];
        $prod->FechaUl = $_REQUEST['FechaUl'];
        $prod->idfactura = $_REQUEST['idfactura'];
        $prod->MarcaMed = $_REQUEST['MarcaMed'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=medidor');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idmedidor']);
        header('Location: index.php');
    }
}
