window.onload = ($(document).ready(function(){
    $('#textarea_descripcion').val('New Text');
    M.textareaAutoResize($('#textarea_descripcion'));
    $('#textarea_requisito').val('New Text');
    M.textareaAutoResize($('#textarea_requisito'));
    $('#textarea_descripcion2').val('New Text');
    M.textareaAutoResize($('#textarea_descripcion2'));
    $('#textarea_requisito2').val('New Text');
    M.textareaAutoResize($('#textarea_requisito2'));
    M.updateTextFields();


function llenartablaPI(){      
    var tabla, html;
    tabla = $('#cuerpotablaPI');
        for(var i = 1; i<=10; i++){
                    if(i % 2 ==0){                       
                        html = '<tr style="background: #e57373; color:white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td><a onclick="AbrirVentanaModificarPI()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarPI()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                            }else{
                        html = '<tr style="background: #bdbdbd; color: white;">';
                        html += '<td>'+i+'</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td>viejo lin</td>';
                        html += '<td><a onclick="AbrirVentanaModificarPI()" class="btn modal-trigger white tooltipped" data-position="bottom" data-tooltip="Modificar"><i class="material-icons light-blue-text text-accent-3">border_color</i></a><a onclick="ventanaborrarPI()" class="btn white tooltipped" data-position="bottom" data-tooltip="Eliminar"><i class="material-icons red-text text-accent-3">delete</i></a></td>';
                        html += '</tr>';
                        tabla.append(html);
                            }
                            
        }
    }

    llenartablaPI();
}));

function ventanaborrarPI(){
    Swal.fire({
         title: '¿Desea borrar esta parte interesada?',
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
               title: 'Parte interesada eliminada'
             })
           }
         })
   };
   
   function AbrirVentanaCrearPI()
   {
       $( '#save-form-1' )[0].reset();
       $( '#save-modal-1' ).modal( 'open' );
       $( '#modal-title-1' ).text( 'Agregar parte interesada' );
   }
   
   function AbrirVentanaModificarPI()
   {
     $( '#save-form-2' )[0].reset();
     $( '#save-modal-2' ).modal( 'open' );
     $( '#modal-title-2' ).text( 'Modificar parte interesada' );
   }
   
   
   
   //para cuando este la parte de create se lanzará un toast confirmandolo
   function confirmacionagregarPI(){
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
       title: 'Parte interesada agregada'
     })
   }
   
   function confirmacionmodificarPI(){
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
       title: 'Parte interesada modificada'
     })
     }

