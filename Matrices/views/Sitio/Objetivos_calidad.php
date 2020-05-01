<?php
require_once('../../core/helpers/template.php');
Page::headerTemplate('Objetivos Calidad',
'<link rel="stylesheet" href="../../resources/css/cssgeneral.css" type="text/css">');
?>
<main class="white">
    <div class="row">
        <!-- Botón para abrir ventana de nuevo registro -->
            <div class="input-field center-align col s8 offset-s2 m6 offset-m3 l4 offset-l4">
                <h5>Gestión de Objetivos calidad</h5>
            </div>
        </div>


    <div class="row">
        <!-- Formulario de búsqueda -->
        <form>
            <div class="input-field center-align col s10 m8 offset-m2 l7 offset-l2">
            <i class="material-icons prefix">search</i>
                <input id="search" type="text" name="search"/>
                <label for="search">Buscar Objetivo</label>
            </div>
            <div class="input-field col s1 m1 l1">
                <button type="submit" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-tooltip="Buscar"><i class="material-icons">check</i></button>
                <a onclick="AbrirVentanaCrearOC()" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-position="right"  data-tooltip="Agregar"><i class="material-icons">add</i></a>
            </div>
        </form>
    </div>
    
    <div class="row">
        <div>
        <table class="responsive-table highlight striped centered col l10 offset-l1 m10 offset-m1 s12"  id="tablaOC">
            <thead>
                <tr>
                    <th>OBJETIVO CALIDAD ID</th>
                    <th>DESCRIPCIÓN</th>
                    <th>PALABRA CLAVE</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <tbody id="cuerpotablaOC">              
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
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">input</i>
                        <input id="txtObjetivoCalidad" type="text" name="txtObjetivoCalidad" class="validate"/>
                        <label for="txtObjetivoCalidad">Objetivo de calidad</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">description</i>
                        <input id="txtDescripcion" type="text" name="txtDescripcion" class="validate"/>
                        <label for="txtDescripcion">Descripcion</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">comment</i>
                        <input id="txtPalabraClave" type="text" name="txtPalabraClave" class="validate"/>
                        <label for="txtPalabraClave">Palabra clave</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionagregarOC()">Guardar<i class="material-icons left">save</i></button>
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
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">check_box</i>
                        <input id="txtObjetivoCalidad" type="text" name="txtObjetivoCalidad" class="validate"/>
                        <label for="txtObjetivoCalidad">Objetivo de calidad</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">description</i>
                        <input id="txtDescripcion" type="text" name="txtDescripcion" class="validate"/>
                        <label for="txtDescripcion">Descripcion</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">comment</i>
                        <input id="txtPalabraClave" type="text" name="txtPalabraClave" class="validate"/>
                        <label for="txtPalabraClave">Palabra clave</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionmodificarOC()">Guardar<i class="material-icons left">save</i></button>
                    <a class="modal-close btn-medium waves-effect waves-light red btn">Cancelar<i class="material-icons left">close</i></a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
Page::footerTemplate('<script src="../../core/controllers/Objetivos_calidad.js" type="text/javascript"></script>');
?>
   