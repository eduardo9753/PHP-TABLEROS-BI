window.addEventListener('DOMContentLoaded', () => {


    /*CREAR GRUPO*/
    $('#btn-crear-grupo').click(function () {
        let datos = $('#AjaxFrmRegistrarGrupo').serialize();
        $.ajax({
            type: 'POST',
            url: 'CrearGrupo',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'GRUPO CREADO CORRECTAMENTE',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Grupos";
                    });
                } else if(r == 0){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'ERROR DE CREACION!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Grupos";
                    });
                }
            }
        })
        return false;
    });


    /*ACTUALIZAR GRUPO 
    $('#btn-editar-grupo').click(function () {
        let datos = $('#AjaxFrmEditarGrupo').serialize();
        $.ajax({
            type: 'POST',
            url: 'actualizarGrupo',
            data: datos,
            success: function (r) {
                if (r == 1) {
                    console.log('Numero de Retorno : ' + r);
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'GRUPO EDITADO CORRECTAMENTE',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Grupos";
                    });
                } else if(r == 0){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'ERROR DE CREACION!!!!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function () {
                        window.location = "Grupos";
                    });
                }
            }
        })
        return false;
    });*/

});