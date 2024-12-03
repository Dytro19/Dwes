<?php

    class jugador{
        public $nombre;
        public $edad;
        public $posicion;
        public $goles = 0;

        function __construct($nombre, $edad, $posicion){
            $this -> nombre = $nombre;
            $this -> edad = $edad;
            $this -> posicion = $posicion;
        }

        function anotarGol(){
            $this -> goles ++;
        }

        function mostrarInfo(){
            echo "Nombre: $this->nombre <br>Edad: $this->edad <br>Posicion: $this->posicion <br>Goles: $this->goles <br><br>";
        }
    }

    class equipo{
        public $nombre;
        public $jugadores=[];

        function __construct($nombre){
            $this -> nombre = $nombre;
        }

        function agregarJugador(jugador $jugador){
            $this -> jugadores[] = $jugador;
        }

        function mostrarEquipo(){
            echo $this->nombre."<br>";
            foreach($this->jugadores as $jugador){
                $jugador->mostrarInfo();
            }
        }

        function golesTotales(){
            $golesTotales=0;
            foreach($this->jugadores as $jugador){
                $golesTotales+=$jugador->goles;
            }
            return $golesTotales;
        }
    }

    class partido{
        public $equipo1;
        public $equipo2;
        public $golesEquipo1;
        public $golesEquipo2;

        function __construct(equipo $equipo1, equipo $equipo2){
            $this->equipo1=$equipo1;
            $this->equipo2=$equipo2;
        }

        function simularPartido(){
            $this->golesEquipo1=rand(0,5);
            $this->golesEquipo2=rand(0,5);
        }

        function mostrarResultado(){
            echo $this->equipo1->nombre." | $this->golesEquipo1 <br>".$this->equipo2->nombre." | $this->golesEquipo2 <br>";
        }
    }

    $jugador1 = new jugador("Lionel Messi", 37, "Delantero");
    $jugador2 = new jugador("Sergio Ramos", 38, "Defensa");
    $jugador3 = new jugador("Curtois", 31, "Portero");

    $equipo1 = new equipo("FC Barcelona");
    $equipo2 = new equipo("Real Madrid");

    $equipo1->agregarJugador($jugador1);
    $equipo2->agregarJugador($jugador2);
    $equipo2->agregarJugador($jugador3);

    $partido = new partido($equipo1, $equipo2);

    $partido -> simularPartido();

    $equipo1->mostrarEquipo();
    $equipo2->mostrarEquipo();

    $partido->mostrarResultado();

