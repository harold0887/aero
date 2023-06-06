$(function () {
  showModalLoad();
  confirmDeleteInternal();
  confirmDeletePlantilla(); 
  confirmDeleteEmail();
  
  //   const elemento = document.querySelector(".contenido-texto");

  //   document.querySelector("#btn-copy").addEventListener("click", () => {
  //     document.querySelector(".mensaje-copy").classList.add("show");
  //     copyToClipBoard(elemento);

  //     setTimeout(() => {
  //       document.querySelector(".mensaje-copy").classList.remove("show");
  //     }, 1300);
  //   });
});

function copyToClipBoard(elemento) {
  const inputOculto = document.createElement("input");

  inputOculto.setAttribute("value", elemento.innerText);

  document.body.appendChild(inputOculto);

  inputOculto.select();

  document.execCommand("copy");

  document.body.removeChild(inputOculto);
}

//activar modal al enviar, se cierra al retornar controlador
function showModalLoad() {
  $("#create-post-admin").submit(() => {
    $("#modal-spinner").modal("show");
  });
}

function confirmDeleteInternal() {
  $(".show-alert-delete-internal").on("click", function () {
    var form = $(this).closest("form");

    var title = form.find("input:text").val();
    //var name = $(this).data("name");
    event.preventDefault();
    swal({
      title: "¿Realmente quiere eliminar " + title + "  ? ",
      //type: "info",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar!",
    }).then(function (isConfirm) {
      if (isConfirm) {
        $("#modal-spinner").modal("show");
        form.submit();
      } else {
        console.log("no aceptp");
      }
    });
  });
}

function confirmDeletePlantilla() {
  $(".show-alert-delete-plantilla").on("click", function () {
    var form = $(this).closest("form");

    var title = form.find("input:text").val();
    //var name = $(this).data("name");
    event.preventDefault();
    swal({
      title: "¿Realmente quiere eliminar " + title + "  ? ",
      //type: "info",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar!",
    }).then(function (isConfirm) {
      if (isConfirm) {
        $("#modal-spinner").modal("show");
        form.submit();
      } else {
        console.log("no aceptp");
      }
    });
  });
}

function confirmDeleteEmail() {
  $(".show-alert-delete-email").on("click", function () {
    var form = $(this).closest("form");

    var title = form.find("input:text").val();
    //var name = $(this).data("name");
    event.preventDefault();
    swal({
      title: "¿Realmente quiere eliminar " + title + "  ? ",
      //type: "info",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar!",
    }).then(function (isConfirm) {
      if (isConfirm) {
        $("#modal-spinner").modal("show");
        form.submit();
      } else {
        console.log("no aceptp");
      }
    });
  });
}