window.addEventListener('DOMContentLoaded', () => {

    //LOGEO DE USUARIO VIA AJAX
    $('#btn-login').click(function () {
        let datos = $('#frmAjaxLogin').serialize();
        $.ajax({
            type: 'POST',
            url: 'Login',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'BIENVENIDO(@)',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboardAdmin";
                    });
                } else if(r == 2){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'BIENVENIDO(@)',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "dashboarUsuario";
                    });
                } else if(r == 0) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Sus credenciales estan incorrectas!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "index";
                    });
                }
            }
        })
        return false;
    });


    //INSERTAR NUEVO USUARIO
    $('#btn-crear-usuario').click(function () {
        let datos = $('#AjaxFrmRegistrarUsuario').serialize();
        $.ajax({
            type: 'POST',
            url: 'CrearUsuario',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'USUARIO CREADO CORRECTAMENTE',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "UsuariosConGrupos";
                    });
                } else if(r == 0){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'ERROR DE CREACION!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "UsuariosConGrupos";
                    });
                }
            }
        })
        return false;
    });

});