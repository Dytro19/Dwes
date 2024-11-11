<?php

    class Empleado{
        private $nombre, $edad, $puesto;

        function __construct($nombre,$edad,$puesto){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->puesto=$puesto;
        }
        function getInformacion(){
            echo "Nombre: ".$this->nombre."<br>Edad: ".$this->edad."<br>Puesto: ".$this->puesto."<br><br>";
        }
    }

    class Departamento{
        private $nombreDepartamento;

        public $empleados=[];

        function __construct($nombreDepartamento){
            $this->nombreDepartamento=$nombreDepartamento;
        }
        function agregarEmpleado($empleado){
            $this->empleados[]=$empleado;
        }
        function listarEmpleados(){
            echo "Departamento: $this->nombreDepartamento <br><br>Empleados: <br><br>";
            foreach($this->empleados as $empleado){
                echo $empleado->getInformacion();
            }
        }
    }

    class Empresa{
        public $nombreEmpresa;

        public $departamentos=[];

        function __construct($nombreEmpresa){
            $this->nombreEmpresa=$nombreEmpresa;
        }

        function agregarDepartamento($departamento){
            $this->departamentos[]=$departamento;
        }

        function listarDepartamentos(){
            echo "Empresa: $this->nombreEmpresa <br><br>";
            foreach($this->departamentos as $departamento){
                echo $departamento->listarEmpleados();
            }
        }
    }

    $empleado1=new Empleado("Mario", "19", "Becario");
    $empleado2=new Empleado("Alvaro","19","Jefe");
    $empleado3=new Empleado("Diego","19","Programador");
    $empleado4=new Empleado("Ivan","19","Becario");

    $departamento1=new Departamento("Programacion");
    $departamento1->agregarEmpleado($empleado1);
    $departamento1->agregarEmpleado($empleado2);

    $departamento2=new Departamento("Diseño");
    $departamento2->agregarEmpleado($empleado3);
    $departamento2->agregarEmpleado($empleado4);

    $empresa1=new Empresa("Pato Gang");
    $empresa1->agregarDepartamento($departamento1);
    $empresa1->agregarDepartamento($departamento2);
    $empresa1->listarDepartamentos(); 