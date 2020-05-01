window.onload = ($(document).ready(function(){


function llenartablaIn(){      
    var tabla, html;
    tabla = $('#cuerpotablaIn');
        for(var i = 1; i<=10; i++){
                    if(i % 2 ==0){
                        html = '<tr style="background: #e57373; color: white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>Efectividad en la atención de incidentes</td>';
                        html += '<td>Produccion</td>';
                        html += '<td>Medir y mejorar</td>';
                        html += '<td>Mejorar la produccion</td>';
                        html += '<td>Produccion/Mejora</td>';
                        html += '<td>99.61%</td>';
                        html += '<td>100%</td>';
                        html += '<td>99.75%</td>';
                        html += '<td>Mensual</td>';
                        html += '<td>Coordinador</td>';
                        html += '<td>Gerente</td>';
                        html += '<td>Reportes</td>';
                        html += '<td><a onclick="AbrirVentanaModificarIn()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarIn()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                    }else{
                        html = '<tr style="background: #bdbdbd; color: white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>Efectividad en la atención de incidentes</td>';
                        html += '<td>Produccion</td>';
                        html += '<td>Medir y mejorar</td>';
                        html += '<td>Mejorar la produccion</td>';
                        html += '<td>Produccion/Mejora</td>';
                        html += '<td>99.61%</td>';
                        html += '<td>100%</td>';
                        html += '<td>99.75%</td>';
                        html += '<td>Mensual</td>';
                        html += '<td>Coordinador</td>';
                        html += '<td>Gerente</td>';
                        html += '<td>Reportes</td>';
                        html += '<td><a onclick="AbrirVentanaModificarIn()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarIn()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                    }  
        }
    }

    llenartablaIn();
}));

function ventanaborrarIn(){
    Swal.fire({
         title: '¿Desea borrar este Indicador?',
         icon: 'warning',
         text:'No se podrán recuperar los datos sí se elimina.',
         showCancelButton: true,
         confirmButtonColor: '#212121',
         cancelButtonColor: '#f44336',
         cancelButtonText:'Cancelar.',
         confirmButtonText: 'Si, borrar.',
         showClass:{
           popup: 'animated fadeInRight'
         },
         hideClass: {
             popup: 'animated hinge'
         }
         }).then((result) => {
           if (result.value) {
             const Toast = Swal.mixin({
               toast: true,
               position: 'top-end',
               showConfirmButton: false,
               timer: 2500,
               timerProgressBar: true,
               onOpen: (toast) => {
                 toast.addEventListener('mouseenter', Swal.stopTimer)
                 toast.addEventListener('mouseleave', Swal.resumeTimer)
               }
             })
             Toast.fire({
               icon: 'success',
               title: 'Indicador eliminado'
             })
           }
         })
   };
   
   function AbrirVentanaCrearIn()
   {
       $( '#save-form-1' )[0].reset();
       $( '#save-modal-1' ).modal( 'open' );
       $( '#modal-title-1' ).text( 'Agregar indicador' );
   }
   
   function AbrirVentanaModificarIn()
   {
     $( '#save-form-2' )[0].reset();
     $( '#save-modal-2' ).modal( 'open' );
     $( '#modal-title-2' ).text( 'Modificar indicador' );
   }
   
   
   
   //para cuando este la parte de create se lanzará un toast confirmandolo
   function confirmacionagregarIn(){
     const Toast2 = Swal.mixin({
       toast: true,
       position: 'top-end',
       showConfirmButton: false,
       timer:  2500,
       timerProgressBar: true,
       onOpen: (toast) => {
         toast.addEventListener('mouseenter', Swal.stopTimer)
         toast.addEventListener('mouseleave', Swal.resumeTimer)
       }
     })
     Toast2.fire({
       icon: 'success',
       title: 'Indicadir agregado'
     })
   }
   
   function confirmacionmodificarIn(){
     const Toast3 = Swal.mixin({
       toast: true,
       position: 'top-end',
       showConfirmButton: false,
       timer:  2500,
       timerProgressBar: true,
       onOpen: (toast) => {
         toast.addEventListener('mouseenter', Swal.stopTimer)
         toast.addEventListener('mouseleave', Swal.resumeTimer)
       }
     })
     Toast3.fire({
       icon: 'success',
       title: 'Indicador modificado'
     })
     }

