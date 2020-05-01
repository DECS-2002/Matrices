<?php
require_once('../../core/helpers/template.php');
Page::headerTemplate('Correlativos',
'<link rel="stylesheet" href="../../resources/css/cssgeneral.css" type="text/css">');
?>
<main class="white">
    <div class="row">
        <!-- Botón para abrir ventana de nuevo registro -->
            <div class="input-field center-align col s8 offset-s2 m6 offset-m3 l4 offset-l4">
                <h5>Gestión de Correlativos</h5>
            </div>
        </div>


    <div class="row">
        <!-- Formulario de búsqueda -->
        <form>
            <div class="input-field center-align col s10 m8 offset-m2 l7 offset-l2">
            <i class="material-icons prefix">search</i>
                <input id="search" type="text" name="search"/>
                <label for="search">Buscar Correlativo</label>
            </div>
            <div class="input-field col s1 m1 l1">
                <button type="submit" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-tooltip="Buscar"><i class="material-icons">check</i></button>
                <a onclick="AbrirVentanaCrearcorrelativo()" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-position="right"  data-tooltip="Agregar"><i class="material-icons">add</i></a>
            </div>
        </form>
    </div>
    
        <div class="row">
            <div>
            <table class="responsive-table highlight striped centered col l10 offset-l1 m10 offset-m1 s12"  id="tablacorrelativo">
                <thead>
                    <tr>
                        <th>Correlativo</th>
                        <th>Proceso</th>
                        <th>Último número utilizado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="cuerpotablacorrelativo">              
                </tbody>
        </table>
        </div>
        </div>


        <!-- Ventana para crear un registro de correlativo-->
<div id="save-modal-1" class="modal">
    <div class="modal-content">
        <h4 id="modal-title-1" class="center-align"></h4>
        <form id="save-form-1">
            <div class="row">
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">chrome_reader_mode</i>
                    <input id="txt_correlativo" type="text" name="txt_correlativo" class="validate"/>
                    <label for="txt_correlativo">Correlativo</label>
                </div>
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">description</i>
                    <select>
                        <option value="" disabled selected>Seleccione un proceso</option>
                        <option value="1">Garantía de calidad</option>
                        <option value="2">Producción</option>
                        <option value="3">Mercadeo y ventas</option>
                    </select>
                    <label>Procesos:</label>
                </div>
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">filter_9_plus</i>
                    <input id="txt_ultimo_numero" type="number" min=0 max=9 name="txt_ultimo_numero" class="validate"/>
                    <label for="txt_ultimo_numero">Último número utilizado</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionagregarcorrelativo()">Guardar<i class="material-icons left">save</i></button>
                <a class="modal-close btn-medium waves-effect waves-light red btn">Cancelar<i class="material-icons left">close</i></a>
            </div>
        </form>
    </div>
</div>


 <!--Ventana para modificar un registro de correlativo-->
 <div id="save-modal-2" class="modal">
    <div class="modal-content">
        <h4 id="modal-title-2" class="center-align"></h4>
        <form id="save-form-2">
        <div class="row">
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">chrome_reader_mode</i>
                    <input id="txt_correlativo" type="text" name="txt_correlativo" class="validate"/>
                    <label for="txt_correlativo">Correlativo</label>
                </div>
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">description</i>
                    <select>
                        <option value="" disabled selected>Seleccione un proceso</option>
                        <option value="1">Garantía de calidad</option>
                        <option value="2">Producción</option>
                        <option value="3">Mercadeo y ventas</option>
                    </select>
                    <label>Procesos:</label>
                </div>
                <div class="input-field col s12 m6 l6 offset-l3">
                    <i class="material-icons prefix">filter_9_plus</i>
                    <input id="txt_ultimo_numero" type="number" min=0 max=9 name="txt_ultimo_numero" class="validate"/>
                    <label for="txt_ultimo_numero">Último número utilizado</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionmodificarcorrelativo()">Guardar<i class="material-icons left">save</i></button>
                <a class="modal-close btn-medium waves-effect waves-light red btn">Cancelar<i class="material-icons left">close</i></a>
            </div>
        </form>
    </div>
</div>

</main>
<?php
Page::footerTemplate('<script src="../../core/controllers/Correlativos.js" type="text/javascript"></script>');
?>
   