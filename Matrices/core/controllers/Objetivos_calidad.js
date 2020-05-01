window.onload = ($(document).ready(function(){


function llenartablaOC(){      
    var tabla, html;
    tabla = $('#cuerpotablaOC');
        for(var i = 1; i<=10; i++){
                    if(i % 2 ==0){                       
                        html = '<tr style="background: #e57373; color:white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>GARANTIA DE CALIDAD.</td>';
                        html += '<td>...</td>';
                        html += '<td><a onclick="AbrirVentanaModificarOC()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarOC()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                    }else{                       
                        html = '<tr style="background: #bdbdbd; color:white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>GARANTIA DE CALIDAD.</td>';
                        html += '<td>...</td>';
                        html += '<td><a onclick="AbrirVentanaModificarOC()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarOC()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                    }  
        }
    }

    llenartablaOC();
}));

function ventanaborrarOC(){
    Swal.fire({
         title: '¿Desea borrar este objetivo?',
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
               title: 'Objetivo eliminado'
             })
           }
         })
   };
   
   function AbrirVentanaCrearOC()
   {
       $( '#save-form-1' )[0].reset();
       $( '#save-modal-1' ).modal( 'open' );
       $( '#modal-title-1' ).text( 'Agregar objetivo' );
   }
   
   function AbrirVentanaModificarOC()
   {
     $( '#save-form-2' )[0].reset();
     $( '#save-modal-2' ).modal( 'open' );
     $( '#modal-title-2' ).text( 'Modificar objetovo' );
   }
   
   
   
   //para cuando este la parte de create se lanzará un toast confirmandolo
   function confirmacionagregarOC(){
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
       title: 'Objetivo agregado'
     })
   }
   
   function confirmacionmodificarOC(){
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
       title: 'Objetivo modificado'
     })
     }

