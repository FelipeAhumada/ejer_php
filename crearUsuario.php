<?php
// Obtener los datos enviados desde el formulario
$_nombre = $_POST["nombre"];
$_rut = $_POST["rut"];
$_direccion = $_POST["direccion"];
$_email = $_POST["email"];
$_password = $_POST["password"];
$_genero = $_POST["genero"];
$_banco = $_POST["banco"];
$_cuentaBancaria = $_POST["cuenta-bancaria"];

//Clase usuario donde vamos a ingresar los Atributos y Metodos
class Usuario(){
    //Atributos son publicos, los metodos son privados, si los Atributos son privados, los metodos son publicos. 
    public $nombre;
    public $rut;
    public $email;
    public $direccion;
    public $password;
    public $genero;
    public $banco;
    public $cuentaBancaria;
    //Metodos 
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function getNombre(){
        return $this->nombre;
    }

    function getRut() {
        return $this->rut;
      }
      
    function setRut($rut) {
        $this->rut = $rut;
      }
      
    function getDireccion() {
        return $this->direccion;
      }
      
    function setDireccion($direccion) {
        $this->direccion = $direccion;
      }
      
    function getEmail() {
        return $this->email;
      }
      
    function setEmail($email) {
        $this->email = $email;
      }
      
    function getPassword() {
        return $this->password;
      }
      
    function setPassword($password) {
        $this->password = $password;
      }
      
    function getGenero() {
        return $this->genero;
      }
      
    function setGenero($genero) {
        $this->genero = $genero;
      }
      
    function getBanco() {
        return $this->banco;
      }
      
    function setBanco($banco) {
        $this->banco = $banco;
      }
      
    function getCuentaBancaria() {
        return $this->cuentaBancaria;
      }
      
    function setCuentaBancaria($cuentaBancaria) {
        $this->cuentaBancaria = $cuentaBancaria;
      }


}
//Instaciamos la clase y le entregamos parametros que recepcionamos.
 $UsuarioRep = new Usuario(
                $_nombre, 
                $_rut,
                $_direccion, 
                $_email, 
                $_password, 
                $_genero,
                $_banco, 
                $_cuentaBnacaria)


// Mostrar los datos recibidos en pantalla
echo "<h1>Datos del usuario creado:</h1>";
echo "<p><strong>Nombre:</strong> " . $UsuarioRep->$nombre . "</p>";
echo "<p><strong>RUT:</strong> " . $UsuarioRep->$rut . "</p>";
echo "<p><strong>Dirección:</strong> " . $UsuarioRep->$direccion . "</p>";
echo "<p><strong>Email:</strong> " . $UsuarioRep->$email . "</p>";
echo "<p><strong>Genero:</strong> " . $UsuarioRep->$genero . "</p>";
echo "<p><strong>Banco:</strong> " . $UsuarioRep->$banco . "</p>";
echo "<p><strong>Número de cuenta bancaria:</strong> " . $UsuarioRep->$cuentaBancaria . "</p>";







?>