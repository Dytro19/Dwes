<?php
    class Libro{
        public $titulo;
        public $autor;
        public $isbn;
        public $estado;

        function __construct($titulo,$autor,$isbn){
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->isbn=$isbn;
            $this->estado='disponible';
        }

        function prestar(){
            if($this->estado=='disponible'){
                $this->estado='prestado';
                echo"Libro '{$this->titulo}' prestado con éxito.<br>";
                return true;
            }
            echo"El libro '{$this->titulo}' ya está prestado.<br>";
            return false;
        }

        function devolver(){
            if($this->estado=='prestado'){
                $this->estado='disponible';
                echo"Libro '{$this->titulo}' devuelto con éxito.<br>";
                return true;
            }
            echo"El libro '{$this->titulo}' no está prestado.<br>";
            return false;
        }

        function mostrar(){
            return"{$this->titulo} de {$this->autor} (ISBN: {$this->isbn}) - Estado: {$this->estado}";
        }
    }

    class Usuario{
        public $nombre;
        public $correo;
        public $librosPrestados;

        function __construct($nombre,$correo){
            $this->nombre=$nombre;
            $this->correo=$correo;
            $this->librosPrestados=[];
        }

        function prestarLibro(Libro $libro){
            if($libro->prestar()){
                $this->librosPrestados[]=$libro;
                return true;
            }
            echo"No se pudo prestar el libro '{$libro->titulo}' a {$this->nombre}.<br>";
            return false;
        }

        function devolverLibro(Libro $libro){
            foreach($this->librosPrestados as $key=>$libroPrestado){
                if($libroPrestado->isbn==$libro->isbn){
                    if($libro->devolver()){
                        unset($this->librosPrestados[$key]);
                        return true;
                    }
                }
            }
            echo"No se pudo devolver el libro '{$libro->titulo}' de {$this->nombre}.<br>";
            return false;
        }

        function mostrarLibrosPrestados(){
            if(empty($this->librosPrestados)){
                return"No tienes libros prestados.";
            }

            echo "Libros prestados por {$this->nombre}:<br>";
            foreach($this->librosPrestados as $libro){
                echo "- ".$libro->mostrar()."<br>";
            }
        }
    }

    class Biblioteca{
        public $libros;
        public $usuarios;

        function __construct(){
            $this->libros=[];
            $this->usuarios=[];
        }

        function agregarLibro(Libro $libro){
            $this->libros[]=$libro;
            echo"Libro '{$libro->titulo}' agregado a la biblioteca.<br>";
        }

        function registrarUsuario(Usuario $usuario){
            $this->usuarios[]=$usuario;
            echo"Usuario '{$usuario->nombre}' registrado en la biblioteca.<br>";
        }

        function prestarLibro(Usuario $usuario,Libro $libro){
            return $usuario->prestarLibro($libro);
        }

        function devolverLibro(Usuario $usuario,Libro $libro){
            return $usuario->devolverLibro($libro);
        }

        function mostrarLibros(){
            if(empty($this->libros)){
                return"No hay libros en la biblioteca.";
            }

            echo "Lista de libros en la biblioteca:<br>";
            foreach($this->libros as $libro){
                 echo $libro->mostrar()."<br>";
            }
        }

        function mostrarUsuarios(){
            if(empty($this->usuarios)){
                return"No hay usuarios en la biblioteca.";
            }

            echo "Lista de usuarios en la biblioteca:<br>";
            foreach($this->usuarios as $usuario){
                echo "- {$usuario->nombre} ({$usuario->correo})<br>";
            }
        }
    }

    $libro1=new Libro("1984","George Orwell","123456");
    $libro2=new Libro("Brave New World","Aldous Huxley","654321");
    $libro3=new Libro("Fahrenheit 451","Ray Bradbury","112233");

    $usuario1=new Usuario("Juan Pérez","juanperez@example.com");
    $usuario2=new Usuario("Ana García","anagarcia@example.com");

    $biblioteca=new Biblioteca();
    $biblioteca->agregarLibro($libro1);
    $biblioteca->agregarLibro($libro2);
    $biblioteca->agregarLibro($libro3);
    $biblioteca->registrarUsuario($usuario1);
    $biblioteca->registrarUsuario($usuario2);

    $biblioteca->mostrarLibros();
    $biblioteca->prestarLibro($usuario1,$libro1);
    $biblioteca->prestarLibro($usuario2,$libro2);

    $usuario1->mostrarLibrosPrestados();
    $usuario2->mostrarLibrosPrestados();

    $biblioteca->devolverLibro($usuario1,$libro1);
    $biblioteca->devolverLibro($usuario2,$libro2);

    $biblioteca->mostrarLibros();