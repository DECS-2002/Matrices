<?php
require_once('../../core/helpers/template.php');
Page::headerTemplate('Matrices', '');
?>
<main class="white">
    <body><!--Contenedor de menú-->
        <div class="row center-align">
            <div class="col l12">
                <ul class="tabs">
                    <li class="tab col s4"><a class="active black-text"  href="#Matrices_opA">Matrices asignadas</a></li>
                    <li class="tab col s4"><a class="indigo-text text-darken-4"  target="_self" href="Mantenimiento.php">Mantenimiento de una matriz</a></li>
                    <li class="tab col s4 disabled"><a class="light-green-text text-darken-4" href="#test3">Filtar e imprimir matrices</a></li>
                </ul>
                <br>
                <div id="Matrices_opA" class="col s12">
                    <div class="input-field col l2">
                            <select>
                            <option value="" disabled selected>Elija una opcion</option>
                            <option value="1">Riesgo</option>
                            <option value="2">Oportunidad</option>
                            <option value="2">todos</option>
                            </select>
                            <label>Matriz:</label>
                    </div>
                    <div class="input-field col l2">
                            <select>
                            <option value="" disabled selected>Elija una opcion</option>
                            </select>
                            <label>Estado:</label>
                    </div> 
                    <div class="input-field col l2">
                            <select>
                            <option value="" disabled selected>Elija una opcion</option>
                            </select>
                            <label>Clasificacion:</label>
                    </div>
                     <div class="input-field col l2">
                            <select>
                            <option value="" disabled selected>Elija una opcion</option>
                            <option value="1">htmlspecialchars_decode</option>
                            </select>
                            <label>Proceso:</label>
                    </div> 
                    <div class="col l4">
                        <a class="waves-effect waves-light white black-text btn">Revision</a>
                        <a class="waves-effect waves-light white black-text btn">Autorizada</a>
                        <a class="waves-effect waves-light white black-text btn">Actualizar</a>
                    </div>
                    <div>
                    <table class="highlight">
                        <thead>
                        <tr>
                            <th>Codigo Matriz</th>
                            <th>Estado</th>
                            <th>Tipo Matriz</th>
                            <th>Numero de riesgo/oportunidad</th>
                            <th>Edicion</th>
                            <th>Objetivo calidad</th>
                            <th>Indicador</th>
                            <th>Proceso</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>Autorizada</td>
                            <td>Oportunidad</td>
                            <td>Autorizada</td>
                            <td>2</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Autorizada</td>
                            <td>Oportunidad</td>
                            <td>Autorizada</td>
                            <td>2</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Autorizada</td>
                            <td>Oportunidad</td>
                            <td>Autorizada</td>
                            <td>2</td>
                            <td>---</td>
                            <td>---</td>
                            <td>---</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    <br>
    </body>
    <br>          
</main>
<?php
Page::footerTemplate(' ');
?>
   