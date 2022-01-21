<?php 
require_once 'models/usuari.php';

class usuariController{
        
        public function mostrarusuaris(){
            $usuari = new usuari();
            $usuaris = $usuari->mostrar();
            require_once 'views/usuaris/mostrarusuaris.php';
        }
        
        public function mostrarusuariid(){
            if(isset($_GET['codi'])){
                $id = $_GET['codi'];
                $usuari = new usuari();
                $usuari->setCodi($id);
                $usuari = $usuari->buscar();
            }
            require_once 'views/usuaris/show.php';
        }

        public function guardarusuari(){
            $usuari = new usuari();
            $usuari->setNom($_POST['nom']);
            $usuari->setDni($_POST['dni']);
            $usuari->setCorreu($_POST['correu']);
            $usuari->setContrasenya(md5($_POST['contrasenya']));
            $usuari->setAdreça($_POST['adreça']);
            $usuari->setTelefon($_POST['telefon']);
            $usuari->setNum_tarjeta($_POST['num_tarjeta']);
            $usuari->insertar();
            header("Location: index.php?controller=usuari&action=mostrarusuaris");
        }
        
        public function eliminarusuaris(){
            if(isset($_GET['codi'])){
                $id = $_GET['codi'];
                $usuari = new usuari();
                $usuari->setCodi($id);
                $usuari->eliminar();
            }
            header('Location: index.php?controller=usuari&action=mostrarusuaris');
        }
        
        public function modificarusuaris(){
            if(isset($_GET['codi'])){
                $id = $_GET['codi'];
                $usuari = new usuari();
                $usuari->setCodi($id);
                $r = $usuari->buscar();
                $row = $r->fetch_assoc();
            }
            require_once 'views/usuaris/modificarusuaris.php';
        }
        
        public function insertarusuaris(){
            require_once 'views/usuaris/insertarusuaris.php';
        }

        public function actualitzarusuaris(){
            
                $usuari = new usuari();
                $usuari->setCodi($_POST['codi']);
                $usuari->setNom($_POST['nom']);
                $usuari->setContrasenya(md5($_POST['contrasenya']));
                $usuari->setCorreu($_POST['correu']);
                $usuari->setAdreça($_POST['adreça']);
                $usuari->setDni($_POST['dni']);
                $usuari->setTelefon($_POST['telefon']);
                $usuari->setNum_tarjeta($_POST['num_tarjeta']);
                $usuari->modificar();
                header('Location: index.php?controller=usuari&action=mostrarusuaris');
            
        }
}
