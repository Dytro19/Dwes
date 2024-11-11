<?php

    class Estudiante{
        public $nombre;
        public $calificaciones=[];

        function __construct($nombre){
            $this->nombre=$nombre;
        }
        function agregarCalificacion($calificacion){
            $this->calificaciones[]=$calificacion;
        }
        function media(){
            $media=0;
            foreach($this->calificaciones as $calificacion){
                $media+=$calificacion;
            }
            echo $media/count($this->calificaciones);
        }

        function mostrarDatos(){
            echo "Nombre: $this->nombre <br>Promedio: ";
            echo $this->media()."<br><br>";
        }
    }

    class VariosEstudiante{
        public $estudiantes=[];
        function agregarEstudiante($estudiante){
            $this->estudiantes[]=$estudiante;
        }

        function mostrarTodosDatos(){
            foreach($this->estudiantes as $calificacion){
                echo $calificacion->mostrarDatos();
            }
        }
    }

    $variosEstudiantes=new VariosEstudiante();
    $estudiante1=new Estudiante("Ivan");
    $estudiante1->agregarCalificacion(5);
    $estudiante1->agregarCalificacion(3);

    $estudiante2=new Estudiante("Diego");
    $estudiante2->agregarCalificacion(7);
    $estudiante2->agregarCalificacion(5);
    $estudiante2->agregarCalificacion(1);

    $variosEstudiantes->agregarEstudiante($estudiante1);
    $variosEstudiantes->agregarEstudiante($estudiante2);

    $variosEstudiantes->mostrarTodosDatos();

   