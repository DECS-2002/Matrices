window.onload = ($(document).ready(function(){


function llenartablacorrelativo(){      
    var tabla, html;
    tabla = $('#cuerpotablacorrelativo');
        for(var i = 1; i<=9; i++){
                    if(i % 2 ==0){                       
                        html = '<tr style="background: #e57373; color:white;">';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>'+i+'</td>';
                        html += '<td><a onclick="AbrirVentanaModificarcorrelativo()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarcorrelativo()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                            }else{
                        html = '<tr style="background: #bdbdbd; color: white;">';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>'+i+'</td>';
                        html += '<td><a onclick="AbrirVentanaModificarcorrelativo()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarcorrelativo()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                            }
                            
        }
    }

    llenartablacorrelativo();
}));

function ventanaborrarcorrelativo(){
    Swal.fire({
         title: '¿Desea borrar este correlativo?',
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
               title: 'Correlativo eliminado'
             })
           }
         })
   };
   
   function AbrirVentanaCrearcorrelativo()
   {
       $( '#save-form-1' )[0].reset();
       $( '#save-modal-1' ).modal( 'open' );
       $( '#modal-title-1' ).text( 'Agregar correlativo' );
   }
   
   function AbrirVentanaModificarcorrelativo()
   {
     $( '#save-form-2' )[0].reset();
     $( '#save-modal-2' ).modal( 'open' );
     $( '#modal-title-2' ).text( 'Modificar correlativo' );
   }
   
   
   
   //para cuando este la parte de create se lanzará un toast confirmandolo
   function confirmacionagregarcorrelativo(){
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
       title: 'Correlativo agregado'
     })
   }
   
   function confirmacionmodificarcorrelativo(){
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
       title: 'Correlativo modificado'
     })
     }

