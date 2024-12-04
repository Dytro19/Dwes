<?php

    class empleado{
        public $nombre;
        public $puesto;
        public $salarioBase;
        public $bonificaciones=0;
        public $deducciones=0;

        function __construct($nombre, $puesto, $salarioBase){
            $this->nombre=$nombre;
            $this->puesto=$puesto;
            $this->salarioBase=$salarioBase;
        }

        function agregarBonificacion($monto){
            $this->bonificaciones+=$monto;
        }

        function agregarDeduccion($monto){
            $this->deducciones+=$monto;
        }

        function calcularSalarioTotal(){
            return $this->salarioBase+$this->bonificaciones-$this->deducciones;
        }

        function mostrarInfo(){
            echo "<br>Nombre: $this->nombre <br>Puesto: $this->puesto <br>Salario Base: $this->salarioBase <br>Bonificaciones: $this->bonificaciones <br>Deducciones: $this->deducciones <br>Salario Total: ".$this->calcularSalarioTotal();
        }
    }

    class departamento{
        public $nombre;
        public $empleados=[];

        function __construct($nombre){
            $this->nombre=$nombre;
        }

        function agregarEmpleado(empleado $empleado){
            $this->empleados[]=$empleado;
        }

        function mostrarEmpleados(){
            foreach($this->empleados as $empleado){
                echo $empleado->mostrarInfo()."<br>";
            }
        }
    }

    class empresa{
        public $nombre;
        public $departamentos=[];

        function __construct($nombre){
            $this->nombre=$nombre;
        }

        function agregarDepartamento(departamento $departamento){
            $this->departamentos[]=$departamento;
        }

        function mostrarDepartamentos(){
            echo $this->nombre.": <br>";
            foreach($this->departamentos as $departamento){
                echo $departamento->mostrarEmpleados()."<br>";
            }
        }

        function calcularNomina(){
            $total=0;
            foreach($this->departamentos as $departamento){
                foreach($departamento->empleados as $empelado){
                    $total=$empelado->calcularSalarioTotal();
                }
            }
            echo "La nomina de toda la empresa es: ".$total;
        }
    }

    $empleado1 = new Empleado("Juan Pérez", "Desarrollador", 3000);
    $empleado1->agregarBonificacion(500);

    $empleado2 = new Empleado("Ana Gómez", "Gerente", 5000);
    $empleado2->agregarDeduccion(200);

    $empleado3 = new Empleado("Carlos Ruiz", "Recepcionista", 1500);
    $empleado3->agregarBonificacion(100);

    $departamento1 = new Departamento("Tecnología");
    $departamento1->agregarEmpleado($empleado1);
    $departamento1->agregarEmpleado($empleado2);

    $departamento2 = new Departamento("Recursos Humanos");
    $departamento2->agregarEmpleado($empleado3);

    $empresa = new Empresa("TechCorp");
    $empresa->agregarDepartamento($departamento1);
    $empresa->agregarDepartamento($departamento2);

    $empresa->mostrarDepartamentos();

    $empresa->calcularNomina();
