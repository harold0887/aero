

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
  const elemento = document.querySelector('.contenido-texto');

  document.querySelector('#btn-copy').addEventListener('click',()=>{
  
      document.querySelector('.mensaje-copy').classList.add('show');
      copyToClipBoard(elemento);
  
      setTimeout(()=>{
          document.querySelector('.mensaje-copy').classList.remove('show');
      },1300);
  })



});  





function copyToClipBoard(elemento){
    const inputOculto = document.createElement('input');

    inputOculto.setAttribute('value', elemento.innerText);

    document.body.appendChild(inputOculto);

    inputOculto.select();

    document.execCommand('copy');

    document.body.removeChild(inputOculto);

   
}





//activar modal al enviar, se cierra al retornar controlador
function showModalLoad() {
  $(
      "#create-post-admin"
  ).submit(() => {
      $("#modal-spinner").modal("show");
  });
}