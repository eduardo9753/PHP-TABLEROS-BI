window.addEventListener("DOMContentLoaded", () => {
  
  /*AGREGAR TABLERO CON USUARIO*/
  $("#btn-registrar-datos").click(function () {
    let datos = $("#AjaxFrmRegistrarUsuarioGrupo").serialize();
    $.ajax({
      type: "POST",
      url: "asignarUsuarioGrupo",
      data: datos,
      success: function (r) {
        if (r == 1) {
          console.log("Numero de Retorno : " + r);
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "GRUPO ASIGNADO CORRECTAMENTE",
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            //window.location = "Usuarios";
          });
        } else if (r == 0) {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: "ERROR DE ASIGNACION!!!!",
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            // window.location = "Usuarios";
          });
        } else if(r == 3) {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: "GRUPO YA SE ENCUENTRA ASIGNADO AL USUARIO!!!!",
            showConfirmButton: false,
            timer: 1800,
          }).then(function () {
            // window.location = "Usuarios";
          });
        }
      }
    });
    return false;
  });




  /*ACTUALIZAR TABLERO
  $("#btn-editar-tablero").click(function () {
    let datos = $("#AjaxFrmEditarTablero").serialize();
    $.ajax({
      type: "POST",
      url: "actualizarTablero",
      data: datos,
      success: function (r) {
        if (r == 1) {
          console.log("Numero de Retorno : " + r);
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "TABLERO ACTUALIZADO CORRECTAMENTE",
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
            window.location = "Tableros";
          });
        } else if (r == 0) {
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: "ERROR DE ACTUALIZACION!!!!",
            showConfirmButton: false,
            timer: 1500,
          }).then(function () {
             window.location = "Tableros";
          });
        }
      }
    });
    return false;
  });*/

  /*AGREGAR TABLERO*/
  $('#btn-registrar-tablero').click(function () {
    let datos = $('#AjaxFrmRegistrarTablero').serialize();
    $.ajax({
        type: 'POST',
        url: 'CrearTablero',
        data: datos,
        success: function (r) {
            if (r == 1) {
                console.log('Numero de Retorno : ' + r);
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'TABLERO CREADO CORRECTAMENTE',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = "Usuarios";
                });
            } else if(r == 0){
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'ERROR DE CREACION!!!!',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location = "Usuarios";
                });
            }
        }
    })
    return false;
});
});
