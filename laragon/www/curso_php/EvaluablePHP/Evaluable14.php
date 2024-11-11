<?php

    class Estudiante{
        public $nombre, $edad, $nota1, $nota2, $nota3;

        function setNombre($nombre){
            $this->nombre=$nombre;
        }
        function setEdad($edad){
            $this->edad=$edad;
        }
        function agregarNota($nota){
            if($this->nota1==null){
                $this->nota1=$nota;
            }
            elseif($this->nota2==null){
                $this->nota2=$nota;
            }
            elseif($this->nota3==null){
                $this->nota3=$nota;
            }
            else{
                echo "Has introducido el máximo de notas para este estudiante";
            }

        }
        function eliminarNota($indice){
            if ($indice==0){
                $this->nota1=$this->nota2;
                $this->nota2=$this->nota3;
                $this->nota3=null;
            }
            elseif ($indice==1){
                $this->nota2=$this->nota3;
                $this->nota3=null;
            }
            elseif ($indice==2){
                $this->nota3=null;
            }
            else{
                echo "Indice no encontrado";
            }
        }
        function calcularPromedio(){
            if ($this->nota3==null){
                echo ($this->nota1+$this->nota2)/2;
            }
            elseif ($this->nota2==null){
                echo $this->nota1;
            }
            elseif($this->nota1==null){
                echo "No hay notas para hacer promedio";
            }
            else{
                echo ($this->nota1+$this->nota2+$this->nota3)/3;
            }
        }
        function mostrarInfo(){
            echo "Nombre: $this->nombre <br> Edad: $this->edad <br> Notas: $this->nota1, $this->nota2, $this->nota3 <br> Promedio: ";
            echo $this->calcularPromedio()."<br>";
        }
    }

    $estudiante=new Estudiante();
    $estudiante->setNombre("Pepe");
    $estudiante->setEdad(18);
    $estudiante->agregarNota(5);
    $estudiante->agregarNota(7);
    $estudiante->agregarNota(6);
    $estudiante->eliminarNota(1);
    $estudiante->mostrarInfo();
