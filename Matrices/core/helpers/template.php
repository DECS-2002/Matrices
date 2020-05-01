<?php
class Page {
    public static function headerTemplate($title, $links) {
        print('
        <!doctype html>
        <html lang="es">
        <head>
            <!-- Conjunto de caracteres -->
            <meta charset="utf-8">
            <!-- Indica al navegador que la página web está optimizada para dispositivos móviles -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Título del documento -->
            <title>'.$title.'</title>
            <!-- Importación de archivos tipo CSS -->
            <link rel="stylesheet" href="../../resources/css/materialize.min.css" type="text/css">
            <link rel="stylesheet" href="../../resources/css/material-icons.css" type="text/css">
            <link rel="stylesheet" href="../../resources/css/style.css" type="text/css">
            <link rel="stylesheet" href="../../resources/css/animate.css" type="text/css">
            <link rel="stylesheet" href="../../resources/css/sweetalert2.min.css" type="text/css">
            '.$links.'
            <!-- Llamada a un archivo tipo icono -->
            <link rel="shortcut icon" href="img/logo.png" type="image/png">
        </head>
        <body>
        <header>
            <ul id="slide-out" class="sidenav red">
                <li><div class="user-view">
                <div class="background grey lighten-4">
                    <img src="../../resources/img/Procaps_logo.png" class="responsive-img">
                </div>
                <a href="#user"><img class="circle" src="../../resources/img/Perfil2.png"></a>
                <a href="index.php"><span class="black-text name">Nombre Usuario</span></a>
                <a href="#email"><span class="black-text email">Usuario@gmail.com</span></a>
                </div></li>
                <li><a class="subheader">Paginas Anexas</a></li>
                <li><a class="waves-effect" href="Matrices.php"><i class="material-icons">home</i>Pagina Principal</a></li>
                <li><a class="waves-effect" href="Procesos.php"><i class="material-icons">description</i>Procesos</a></li>
                <li><a class="waves-effect" href="Indicadores.php"><i class="material-icons">library_books</i>Indicadores</a></li>
                <li><a class="waves-effect" href="PartesInteresadas.php"><i class="material-icons">group</i>Partes interesadas</a></li>
                <li><a class="waves-effect" href="Usersapp.php"><i class="material-icons">person_pin</i>Usuarios</a></li>
                <li><a class="waves-effect" href="Usuarioscross.php"><i class="material-icons">perm_contact_calendar</i>Cargo de Usario</a></li>
                <li><a class="waves-effect" href="Objetivos_calidad.php"><i class="material-icons">check_box</i>Objetivos de calidad</a></li>
                <li><a class="waves-effect" href="Correlativos.php"><i class="material-icons">chrome_reader_mode</i>Correlativos</a></li>
            </ul>
            <nav class="red lighten-5" height="70">
                <div class="nav-wrapper">
                    <div class="row">
                        <div class="col s4 l4">
                            <a href="#!"><i class="Large material-icons sidenav-trigger black-text text-accent-3"  data-target="slide-out">menu</i></a>
                        </div>
                        <div class="col s4 l4 offset-l1 center-aling">
                            <a href="index.php" class="brand-logo"><img src="../../resources/img/Procaps_logo.png" height="60"></a>
                        </div>
                        <div class="col s4 l2 offset-l1">
                            <a href="badges.html"><i class="Large material-icons black-text right">subdirectory_arrow_right</i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        ');   
    }

    public function footerTemplate($Scrips) {
        print('
            <footer class="page-footer red">
            <div class="container">
                <div class="row">
                    <div class="col l5 s12">
                        <h5 class="white-text">Matriz de identificacion riesgoz y oportunidades</h5>
                        <p class="grey-text text-lighten-4">Parrafo de copiright</p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright center-align">
                <div class="container">
                    © 2020 Copyright Laboratorios Lopez.
                </div>
            </div>
            </footer>
            <script src="../../resources/js/jquery-3.4.1.min.js" type="text/javascript"></script>
            <script src="../../resources/js/materialize.min.js" type="text/javascript"></script>
            <script src="../../resources/js/initialization.js" type="text/javascript"></script>
            <script src="../../resources/js/sweetalert2.all.min.js" type="text/javascript"></script>
            '.$Scrips.'
        </body>
        </html>
        ');
    }
}
?>