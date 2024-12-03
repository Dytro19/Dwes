<?php
    class Paciente {
        public $nombre;
        public $edad;
        public $diagnostico;
        public $tratamiento;

        function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->diagnostico = "";
            $this->tratamiento = "";
        }

        function getNombre() {
            return $this->nombre;
        }

        function getEdad() {
            return $this->edad;
        }

        function getDiagnostico() {
            return $this->diagnostico;
        }

        function getTratamiento() {
            return $this->tratamiento;
        }

        function setDiagnostico($diagnostico) {
            $this->diagnostico = $diagnostico;
        }

        function setTratamiento($tratamiento) {
            $this->tratamiento = $tratamiento;
        }
    }

    class Doctor {
        public $nombre;
        public $especialidad;
        public $pacientesAtendidos;

        function __construct($nombre, $especialidad) {
            $this->nombre = $nombre;
            $this->especialidad = $especialidad;
            $this->pacientesAtendidos = [];
        }

        function getNombre() {
            return $this->nombre;
        }

        function getEspecialidad() {
            return $this->especialidad;
        }

        function agregarPaciente($paciente) {
            $this->pacientesAtendidos[] = $paciente;
        }

        function atenderPaciente($paciente, $diagnostico, $tratamiento) {
            $paciente->setDiagnostico($diagnostico);
            $paciente->setTratamiento($tratamiento);
            $this->agregarPaciente($paciente);
        }

        function getPacientesAtendidos() {
            return $this->pacientesAtendidos;
        }
    }

    class Cita {
        public $paciente;
        public $doctor;
        public $fecha;
        public $diagnostico;

        function __construct($paciente, $doctor, $fecha) {
            $this->paciente = $paciente;
            $this->doctor = $doctor;
            $this->fecha = $fecha;
            $this->diagnostico = $paciente->getDiagnostico();
        }

        function mostrarDetalles() {
            echo "Cita con Dr. " . $this->doctor->getNombre() . " (" . $this->doctor->getEspecialidad() . ")<br><br>" .
                "Paciente: " . $this->paciente->getNombre() . "<br>Edad: " . $this->paciente->getEdad() . "<br><br>" .
                "Diagnóstico: " . $this->diagnostico . "<br>" .
                "Fecha de la cita: " . $this->fecha . "<br>" .
                "Tratamiento asignado: " . $this->paciente->getTratamiento();
        }
    }

    class Hospital {
        public $pacientes;
        public $doctores;

        function __construct() {
            $this->pacientes = [];
            $this->doctores = [];
        }

        function agregarPaciente($paciente) {
            $this->pacientes[] = $paciente;
        }

        function agregarDoctor($doctor) {
            $this->doctores[] = $doctor;
        }

        function getPacientes() {
            return $this->pacientes;
        }

        function getDoctores() {
            return $this->doctores;
        }

        function organizarCita($paciente, $doctor, $fecha) {
            $cita = new Cita($paciente, $doctor, $fecha);
            return $cita->mostrarDetalles();
        }
    }

    // Ejemplo de ejecución
    $paciente1 = new Paciente("Juan Pérez", 30);
    $paciente2 = new Paciente("María Gómez", 45);

    $doctor1 = new Doctor("Juan Martínez", "Cardiología");
    $doctor2 = new Doctor("Ana Sánchez", "Dermatología");

    $doctor1->atenderPaciente($paciente1, "Hipertensión", "Medicamento para la presión");
    $doctor2->atenderPaciente($paciente2, "Eczema", "Crema tópica");

    $hospital = new Hospital();
    $hospital->agregarPaciente($paciente1);
    $hospital->agregarPaciente($paciente2);
    $hospital->agregarDoctor($doctor1);
    $hospital->agregarDoctor($doctor2);

    echo $hospital->organizarCita($paciente1, $doctor1, "2024-12-01 10:00");
    echo "<br><br><br>";
    echo $hospital->organizarCita($paciente2, $doctor2, "2024-12-01 11:00");
