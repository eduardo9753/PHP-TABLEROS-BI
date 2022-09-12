setInterval(() => {
  $.ajax({
    //data: {id_causa:id_causa},
    dataType: "html",
    type: "POST",
    url: "recargaPaginaAjax", //COMBINACION PARA PODER MOSTRAR LA CAUSA ESPECIFICA EN FUNCION DE LA CAUSA POR BASE DE DATOS
  }).done(function (data) {
    //causa_especifica.html('Contandos'+data); //PINTANDO LOS DATOS CON AJAX
    console.log("Datos" + data);
  });
}, 1000);
