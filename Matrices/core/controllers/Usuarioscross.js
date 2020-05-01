window.onload = ($(document).ready(function(){


function llenartablaUC(){      
    var tabla, html;
    tabla = $('#cuerpotablaUC');
        for(var i = 1; i<=9; i++){
                    if(i % 2 ==0){                       
                        html = '<tr style="background: #e57373; color:white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>'+i+'</td>';
                        html += '<td><a onclick="AbrirVentanaModificarUC()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarUC()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                            }else{
                        html = '<tr style="background: #bdbdbd; color: white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>'+i+'</td>';
                        html += '<td><a onclick="AbrirVentanaModificarUC()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarUC()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                            }
                            
        }
    }

    llenartablaUC();
}));

function ventanaborrarUC(){
    Swal.fire({
         title: '¿Desea borrar este usuario cross?',
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
               title: 'Usuario cross eliminado'
             })
           }
         })
   };
   
   function AbrirVentanaCrearUC()
   {
       $( '#save-form-1' )[0].reset();
       $( '#save-modal-1' ).modal( 'open' );
       $( '#modal-title-1' ).text( 'Agregar usuario cross' );
   }
   
   function AbrirVentanaModificarUC()
   {
     $( '#save-form-2' )[0].reset();
     $( '#save-modal-2' ).modal( 'open' );
     $( '#modal-title-2' ).text( 'Modificar usuario cross' );
   }
   
   
   
   //para cuando este la parte de create se lanzará un toast confirmandolo
   function confirmacionagregarUC(){
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
       title: 'Usuario cross agregado'
     })
   }
   
   function confirmacionmodificarUC(){
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
       title: 'Usuario cross modificado'
     })
     }

