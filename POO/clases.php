<?php
class Persona{
    private $nombre = "";
    private $dni = "";
    private $email = "";

    public function __construct($nombre,$dni,$email){
        $this->__set_nombre($nombre);
        $this->__set_dni($dni);
        $this->__set_email($email);
    }

    public function __toString(){
        echo "<p>--Nombre--{$this->nombre}--Dni--{$this->dni}--Email-- {$this->email}</p>" ;
    }

    public function __set_nombre($nombre){
        $this->nombre = $nombre;
    }

    public function __set_dni($dni){
        $this->dni = $dni;
    }

    public function __set_email($email){
        $this->email = $email;
    }

    public function __get_nombre(){
        return $this->nombre;
    }

    public function __get_dni(){
        return $this->dni;
    }

    public function __get_email(){
        return $this->email;
    }




}

class Estudiante extends Persona {
    private $num_expediente;

    public function __construct($nombre,$dni,$email,$num_expediente){
        parent::__construct($nombre,$dni,$email);
        $this->__set_num_expediente($num_expediente);

    }
    public function __toString(){
        return parent::__toString() . "<p>--Numero de expediente-- {$this->num_expediente}</p>";
    }

    public function __set_num_expediente($num_expediente){
        $this->num_expediente = $num_expediente;
    }

    public function __get_num_expediente(){
        return $this->num_expediente;
    }
   
}

$persona1 = new Persona("emilio","34349873243k","emimelano@alu.edu.gva.es");
$persona2 = new Estudiante("emilio","34349873243k","emimelano@alu.edu.gva.es",100);

echo "<h2>Datos de la Persona 1</h2>" . $persona1;
echo "<h2>Datos del Estudiante 1</h2>" . $persona2;

?>