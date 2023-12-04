<?php
class medidor
{
	private $pdo;

    public $idmedidor;
    public $idcliente;
    public $NumMed;
    public $TipoMed;
	public $Fechains;
    public $FechaUl;
	public $idfactura;
	public $MarcaMed;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_medidor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idmedidor)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM tbl_medidor WHERE idmedidor = ?");
			$stm->execute(array($idmedidor));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idmedidor)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_medidor WHERE idmedidor = ?");

			$stm->execute(array($idmedidor));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE tbl_medidor SET
						NumMed          = ?,
						TipoMed        = ?,
						Fechains        = ?,
						FechaUl        = ?,
						idfactura        = ?,
						MarcaMed        = ?
				    WHERE idmedidor = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->NumMed,
                        $data->TipoMed,
						$data->Fechains,
                        $data->FechaUl,
						$data->idfactura,
						$data->MarcaMed,
                        $data->idmedidor
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(medidor $data)
	{
		try
		{
		$sql = "INSERT INTO tbl_medidor (idmedidor,idcliente,NumMed,TipoMed,Fechains,FechaUl,idfactura,MarcaMed)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idmedidor,
                    $data->idcliente,
                    $data->NumMed,
                    $data->TipoMed,
					$data->Fechains,
                    $data->FechaUl,
					$data->idfactura,
					$data->MarcaMed
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
