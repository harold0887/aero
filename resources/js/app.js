

$(function () {
    

    // modificacion de  navbar
  //Esta es la original
  // if ($('.full-screen-map').length == 0 && $('.bd-docs').length == 0) {
  //   // On click navbar-collapse the menu will be white not transparent
  //   $('.collapse').on('show.bs.collapse', function() {
  //     $(this).closest('.navbar').removeClass('navbar-transparent').addClass('bg-white');
  //   }).on('hide.bs.collapse', function() {
  //     $(this).closest('.navbar').addClass('navbar-transparent').removeClass('bg-white');
  //   });
  // }

  //Esta es la nueva, se agrega ahora por id

  // if ($('.full-screen-map').length == 0 && $('.bd-docs').length == 0) {
  //   // On click navbar-collapse the menu will be white not transparent
  //   $('.collapse').on('show.bs.collapse', function() {
  //         $(this).closest('#navbar-transparent,#navbar-transparent-admin').removeClass('navbar-transparent').addClass('bg-white');
  //       }).on('hide.bs.collapse', function() {
  //         $(this).closest('#navbar-transparent,#navbar-transparent-admin').addClass('navbar-transparent').removeClass('bg-white');
  //       });
  // }

  showModalLoad()
  copy()



});  

const elemento= document.querySelector('.contenido-texto')

function copy(){

  $( "#btn-copy" ).on( "click", function() {
   
    const imputOculto = document.createElement('input');
    imputOculto.setAttribute('value', elemento.innerText);

    imputOculto.select();

    document.execCommand('copy');

    

  } );

}





//activar modal al enviar, se cierra al retornar controlador
function showModalLoad() {
  $(
      "#create-post-admin"
  ).submit(() => {
      $("#modal-spinner").modal("show");
  });
}