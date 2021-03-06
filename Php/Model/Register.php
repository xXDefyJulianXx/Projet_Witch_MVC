<?php
/**
* 
*/
class Register extends Conexion
{
	private $idCliente,$identificacionCliente,$nombreCliente,$apellidoCliente,$direccionCliente,$telefonoCliente,$correoCliente,$nombre_Usuario,$passwordCliente;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
/*---------------------------------------------------------------*/
	public function getidCliente() 
	{
		return $this->idCliente;
	}
	public function setidCliente($idCliente) 
	{
		$this->idCliente= $idCliente;
	}
/*---------------------------------------------------------------*/		
	public function getidentificacionCliente() 
	{
		return $this->identificacionCliente;
	}
	public function setidentificacionCliente($identificacionCliente) 
	{
		$this->identificacionCliente= $identificacionCliente;
	}
/*---------------------------------------------------------------*/	
	public function getnombreCliente() 
	{
		return $this->nombreCliente;
	}
	public function setnombreCliente($nombreCliente) 
	{
		$this->nombreCliente= $nombreCliente;
	}
/*---------------------------------------------------------------*/	
	public function getapellidoCliente() 
	{
		return $this->apellidoCliente;
	}
	public function setapellidoCliente($apellidoCliente) 
	{
		$this->apellidoCliente= $apellidoCliente;
	}
/*---------------------------------------------------------------*/	
	public function getdireccionCliente(){
		return $this->direccionCliente;
	}

	public function setdireccionCliente($direccionCliente){
		$this->direccionCliente=$direccionCliente;
	}
/*---------------------------------------------------------------*/	
	public function gettelefonoCliente() 
	{
		return $this->telefonoCliente;
	}
	public function settelefonoCliente($telefonoCliente) 
	{
		$this->telefonoCliente= $telefonoCliente;
	}
/*---------------------------------------------------------------*/
	public function getcorreoCliente() 
	{
		return $this->correoCliente;
	}
	public function setcorreoCliente($correoCliente) 
	{
		$this->correoCliente= $correoCliente;
	}
/*---------------------------------------------------------------*/
	public function getnombre_Usuario() 
	{
		return $this->nombre_Usuario;
	}
	public function setnombre_Usuario($nombre_Usuario) 
	{
		$this->nombre_Usuario= $nombre_Usuario;
	}
/*---------------------------------------------------------------*/
	public function getpasswordCliente() 
	{
		return $this->passwordCliente;
	}
	public function setpasswordCliente($passwordCliente) 
	{
		$this->passwordCliente= $passwordCliente;
	}	
/*---------------------------------------------------------------*/
	public function insert() 
	{	
		try
		{
			$query="INSERT INTO cliente (idCliente,identificacionCliente,nombreCliente,apellidoCliente,direccionCliente,telefonoCliente,correoCliente,nombre_Usuario,passwordCliente) VALUES (NULL,'".$this->identificacionCliente."','".$this->nombreCliente."','".$this->apellidoCliente."','".$this->direccionCliente."','".$this->telefonoCliente."','".$this->correoCliente."','".$this->nombre_Usuario."','".$this->passwordCliente."')";
			$stmt=$this->model->prepare($query);
			$stmt->execute();
			return true;
		}
		catch (PDOException $e) 
		{
		return false;
		}
	}
}
?>