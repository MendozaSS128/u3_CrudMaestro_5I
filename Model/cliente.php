<?php
class cliente
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $idcliente;
    public $Nombre;
    public $ApellidoM;
    public $ApellidoP;
	public $Telefono;
	public $Correo;
	public $FechaCont;
	public $Direccion;

	//Método de conexión a SGBD.
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

	//Este método selecciona todas las tuplas de la tabla
	//proveedor en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM tbl_cliente");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($idcliente)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM tbl_cliente WHERE idcliente = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($idcliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($idcliente)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_cliente WHERE idcliente = ?");

			$stm->execute(array($idcliente));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE tbl_cliente SET
						Nombre          = ?,
						ApellidoM	        = ?,
            ApellidoP        = ?,
			Telefono        = ?,
			Correo        = ?,
			FechaCont        = ?,
			Direccion        = ?
				    WHERE idcliente = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre,
                        $data->ApellidoM,
                        $data->ApellidoP,
						$data->Telefono,
						$data->Correo,
						$data->FechaCont,
						$data->Direccion,
                        $data->idcliente
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(cliente $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO tbl_cliente(idcliente,Nombre,ApellidoM,ApellidoP,Telefono,Correo,FechaCont,Direccion)
		        VALUES (?, ?, ?, ?, ? ,?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idcliente,
                    $data->Nombre,
                    $data->ApellidoM,
                    $data->ApellidoP,
					$data->Telefono,
					$data->Correo,
					$data->FechaCont,
					$data->Direccion
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
