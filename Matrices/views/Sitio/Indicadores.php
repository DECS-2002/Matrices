<?php
require_once('../../core/helpers/template.php');
Page::headerTemplate('Indicadores',
'<link rel="stylesheet" href="../../resources/css/cssgeneral.css" type="text/css">');
?>
<main class="white">
    <div class="row">
        <!-- Botón para abrir ventana de nuevo registro -->
            <div class="input-field center-align col s8 offset-s2 m6 offset-m3 l4 offset-l4">
                <h5>Gestión de Indicadores</h5>
            </div>
        </div>


    <div class="row">
        <!-- Formulario de búsqueda -->
        <form>
            <div class="input-field center-align col s10 m8 offset-m2 l7 offset-l2">
            <i class="material-icons prefix">search</i>
                <input id="search" type="text" name="search"/>
                <label for="search">Buscar Indicador</label>
            </div>
            <div class="input-field col s1 m1 l1">
                <button type="submit" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-tooltip="Buscar"><i class="material-icons">check</i></button>
                <a onclick="AbrirVentanaCrearIn()" class="btn-floating btn-medium waves-effect waves-light red  tooltipped" data-position="right"  data-tooltip="Agregar"><i class="material-icons">add</i></a>
            </div>
        </form>
    </div>
        
    <div class="row">
        <div>
        <table class="responsive-table highlight striped centered col l10 offset-l1 m10 offset-m1 s12"  id="tablaIn">
            <thead>
                <tr>
                    <th>INDICADOR ID</th>
                    <th>NOMBRE</th>
                    <th>PROCESOS</th>
                    <th>OBJETIBO CALIDAD</th>
                    <th>OBJETIBO ESPECIFICO</th>
                    <th>FORMULA DE CALCULO</th>
                    <th>VALOR ACTUALIDAD</th>
                    <th>VALOR POTENCIALIDAD</th>
                    <th>META</th>
                    <th>FRECUENCIA DE MEDICIÓN</th>
                    <th>RESPONSABLE MEDICION</th>
                    <th>RESPONSIBLE SEGUIMIENTO</th>
                    <th>FUENTE INFORMACIÓN</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cuerpotablaIn">              
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
                        <i class="material-icons prefix">input</i>
                        <input id="txtIndicadorID" type="text" name="txtIndicadorID" class="validate"/>
                        <label for="txtIndicadorID">Indicador ID</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">local_offer</i>
                        <input id="txtNombre" type="text" name="txtNombre" class="validate"/>
                        <label for="txtNombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">description</i>
                        <select>
                            <option value="" disabled selected>Elija una opcion</option>
                        </select>
                        <label for="txtProceso">Proceso</label>
                    </div>
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">bookmark</i>
                        <select>
                            <option value="" disabled selected>Elija una opcion</option>
                        </select>
                        <label for="txtObjetivoCalidad">Objetivo calidad</label>
                    </div>
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">bookmark_border</i>
                        <input id="txtObjetivoEspecifico" type="text" name="txtObjetivoEspecifico" class="validate"/>
                        <label for="txtObjetivoEspecifico">Objetivo especifico</label>
                    </div>
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">queue</i>
                        <input id="txtFormulaCalculo" type="text" name="txtFormulaCalculo" class="validate"/>
                        <label for="txtFormulaCalculo">Formula de calculo</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">wb_sunny</i>
                        <input id="txtValorActualidad" type="text" name="txtValorActualidad" class="validate"/>
                        <label for="txtValorActualidad">Valor actualidad</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">wb_incandescent</i>
                        <input id="txtValorPotencialidad" type="text" name="txtValorPotencialidad" class="validate"/>
                        <label for="txtValorPotencialidad">Valor potencialidad</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">wb_iridescent</i>
                        <input id="txtMeta" type="text" name="txtMeta" class="validate"/>
                        <label for="txtMeta">Meta</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">sort</i>
                        <input id="txtFrecuenciaMedicion" type="text" name="txtFrecuenciaMedicion" class="validate"/>
                        <label for="txtFrecuenciaMedicion">Frecuencia de medicion</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_box</i>
                        <input id="txtResponsableMedicion" type="text" name="txtResponsableMedicion" class="validate"/>
                        <label for="txtResponsableMedicion">Responsable de medicion</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input id="txtResponsableSeguimiento" type="text" name="txtResponsableSeguimiento" class="validate"/>
                        <label for="txtResponsableSeguimiento">Responsable de seguimiento</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">find_in_page   </i>
                        <input id="txtFuenteInformacion" type="text" name="txtFuenteInformacion" class="validate"/>
                        <label for="txtFuenteInformacion">Fuente de informacion</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionagregarIn()">Guardar<i class="material-icons left">save</i></button>
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
                <div class="input-field col s12 m6 l6 offset-l3">
                        <i class="material-icons prefix">input</i>
                        <input id="txtIndicadorID" type="text" name="txtIndicadorID" class="validate"/>
                        <label for="txtIndicadorID">Indicador ID</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">local_offer</i>
                        <input id="txtNombre" type="text" name="txtNombre" class="validate"/>
                        <label for="txtNombre">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">description</i>
                        <select>
                            <option value="" disabled selected>Elija una opcion</option>
                        </select>
                        <label for="txtProceso">Proceso</label>
                    </div>
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">bookmark</i>
                        <select>
                            <option value="" disabled selected>Elija una opcion</option>
                        </select>
                        <label for="txtObjetivoCalidad">Objetivo calidad</label>
                    </div>
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">bookmark_border</i>
                        <input id="txtObjetivoEspecifico" type="text" name="txtObjetivoEspecifico" class="validate"/>
                        <label for="txtObjetivoEspecifico">Objetivo especifico</label>
                    </div>
                    <div class="input-field col s12 m6 l12">
                        <i class="material-icons prefix">queue</i>
                        <input id="txtFormulaCalculo" type="text" name="txtFormulaCalculo" class="validate"/>
                        <label for="txtFormulaCalculo">Formula de calculo</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">wb_sunny</i>
                        <input id="txtValorActualidad" type="text" name="txtValorActualidad" class="validate"/>
                        <label for="txtValorActualidad">Valor actualidad</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">wb_incandescent</i>
                        <input id="txtValorPotencialidad" type="text" name="txtValorPotencialidad" class="validate"/>
                        <label for="txtValorPotencialidad">Valor potencialidad</label>
                    </div>
                    <div class="input-field col s12 m6 l4">
                        <i class="material-icons prefix">wb_iridescent</i>
                        <input id="txtMeta" type="text" name="txtMeta" class="validate"/>
                        <label for="txtMeta">Meta</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">sort</i>
                        <input id="txtFrecuenciaMedicion" type="text" name="txtFrecuenciaMedicion" class="validate"/>
                        <label for="txtFrecuenciaMedicion">Frecuencia de medicion</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_box</i>
                        <input id="txtResponsableMedicion" type="text" name="txtResponsableMedicion" class="validate"/>
                        <label for="txtResponsableMedicion">Responsable de medicion</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input id="txtResponsableSeguimiento" type="text" name="txtResponsableSeguimiento" class="validate"/>
                        <label for="txtResponsableSeguimiento">Responsable de seguimiento</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">find_in_page   </i>
                        <input id="txtFuenteInformacion" type="text" name="txtFuenteInformacion" class="validate"/>
                        <label for="txtFuenteInformacion">Fuente de informacion</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="modal-action modal-close btn-medium waves-effect waves-light grey darken-4 btn" onclick="confirmacionmodificarIn()">Guardar<i class="material-icons left">save</i></button>
                    <a class="modal-close btn-medium waves-effect waves-light red btn">Cancelar<i class="material-icons left">close</i></a>
                </div>
            </form>
        </div>
    </div>

</main>
<?php
Page::footerTemplate(
'<script src="../../core/controllers/Indicadores.js" type="text/javascript"></script>');
?>
   