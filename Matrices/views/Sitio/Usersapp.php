<?php
require_once('../../core/helpers/template.php');
Page::headerTemplate('Usuarios',
'<link rel="stylesheet" href="../../resources/css/cssgeneral.css" type="text/css">');
?>
<main class="white">
    <div class="row">
    <!-- Botón para abrir ventana de nuevo registro -->
        <div class="input-field center-align col s8 offset-s2 m6 offset-m3 l4 offset-l4">
            <h5>Gestión de Usuarios</h5>
        </div>
    </div>


<div class="row">
    <!-- Formulario de búsqueda -->
    <form>
        <div class="input-field center-align col s10 m8 offset-m2 l7 offset-l2">
        <i class="material-icons prefix">search</i>
            <input id="search" type="text" name="search"/>
            <label for="search">Buscar usuario</label>
        </div>
        <div class="input-field col s1 m1 l1">
            <button type="submit" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-tooltip="Buscar"><i class="material-icons">check</i></button>
            <a onclick="AbrirVentanaCrearUA()" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-position="right"  data-tooltip="Agregar"><i class="material-icons">add</i></a>
        </div>
    </form>
</div>
    
        <div class="row">
            <div>
            <table class="responsive-table highlight striped centered col l10 offset-l1 m10 offset-m1 s12"  id="tablaUA">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Nivel</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="cuerpotablaUA">              
                </tbody>
        </table>
        </div>
        </div>


        <!-- Ventana para crear un registro de usuario-->
<div id="save-modal-1" class="modal">
    <div class="modal-content">
        <h4 id="modal-title-1" class="center-align"></h4>
        <form id="save-form-1">
            <div class="row">
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">person_pin</i>
                    <input id="txt_usuario" type="text" name="txt_usuario" class="validate"/>
                    <label for="txt_usuario">Usuario</label>
                </div>
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">lock</i>
                    <input id="txt_password" type="password" name="txt_password" class="validate"/>
                    <label for="txt_password">Contraseña</label>
                </div>
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">dns</i>
                    <input id="txt_nivel" type="text" name="txt_nivel" class="validate"/>
                    <label for="txt_nivel">Nivel</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionagregarUA()">Guardar<i class="material-icons left">save</i></button>
                <a class="modal-close btn-medium waves-effect waves-light red btn">Cancelar<i class="material-icons left">close</i></a>
            </div>
        </form>
    </div>
</div>


 <!--Ventana para modificar un registro de usuario-->
 <div id="save-modal-2" class="modal">
    <div class="modal-content">
        <h4 id="modal-title-2" class="center-align"></h4>
        <form id="save-form-2">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">person_pin</i>
                    <input id="txt_usuario2" type="text" name="txt_usuario2" class="validate"/>
                    <label for="txt_usuario2">Usuario</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock</i>
                    <input id="txt_password2" type="password" name="txt_password2" class="validate"/>
                    <label for="txt_password2">Contraseña</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="txt_nivel2" type="text" name="txt_nivel2" class="validate"/>
                    <label for="txt_nivel2">Nivel</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionmodificarUA()">Guardar<i class="material-icons left">save</i></button>
                <a class="modal-close btn-medium waves-effect waves-light red btn">Cancelar<i class="material-icons left">close</i></a>
            </div>
        </form>
    </div>
</div>

</main>
<?php
Page::footerTemplate(
'<script src="../../core/controllers/Usersapp.js" type="text/javascript"></script>');
?>
   