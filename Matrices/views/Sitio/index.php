<!doctype html>
    <html lang="es">
    <head>
        <!-- Conjunto de caracteres -->
        <meta charset="utf-8">
        <!-- Indica al navegador que la página web está optimizada para dispositivos móviles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Título del documento -->
        <title>Plantilla general</title>
        <!-- Importación de archivos tipo CSS -->
        <link rel="stylesheet" href="../../resources/css/materialize.min.css" type="text/css">
        <link rel="stylesheet" href="../../resources/css/material-icons.css" type="text/css">
        <link rel="stylesheet" href="../../resources/css/style.css" type="text/css">
        <!-- Llamada a un archivo tipo icono -->
        <link rel="shortcut icon" href="img/logo.png" type="image/png">
    </head>
    <body>
    <header>
        <nav class="red" height="70">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="center-align">
                        <a href="index.php" class="brand-logo"><img src="../../resources/img/Procaps_logo.png" height="60"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <p>
    <main id="contenedor">
        <div class="container lighten-2">
            <div class="row">
                <div class="col s12">
                    <div id="test1" class="col s12">
                        <div class="row login">
                            <div class="col s12 l6">
                                <div class="card">
                                    <div class="card-action white-text red darken-4 center">
                                        <h3>Inicio de Sesion</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-fiel col s12 m6 offset-m2 l12">
                                            <label for="last_name">Usuario</label>
                                            <input id="last_name" type="text" class="validate white-text">
                                        </div><br>
                                        <div class="form-fiel col s12 m6 offset-m2 l12">
                                            <label for="password">Contraseña</label>
                                            <input id="password" type="password" class="validate white-text">
                                        </div><br>
                                        <div class="form-fiel center-align">
                                            <a href="Matrices.php" class="waves-effect waves-light btn z-depth-5d  red darken-4">Ingresar</a>
                                        </div><br>
                                        <div class="form-fiel center-align">
                                            <a class="waves-effect waves-light grey darken-4 btn-small z-depth-5 red-text" 
                                            src="#" href="Recuperar_contrasena.php">¿Olvidaste tu contraseña?</a>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 l6">
                                <div class="card">
                                    <img src="../../resources/img/loginimg.jpg" class="responsive-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </main>  
    <footer class="page-footer grey darken-4">
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
    </body>
    </html>