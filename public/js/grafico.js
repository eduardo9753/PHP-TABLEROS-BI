window.addEventListener('DOMContentLoaded', () => {

    //VARIABLES
    const txt_count_correos_aprobados = document.querySelector('#txt_count_correos_aprobados').value;//0
    const txt_count_correos_pendientes = document.querySelector('#txt_count_correos_pendientes').value; //1
    const txt_count_paginas_aprobadas = document.querySelector('#txt_count_paginas_aprobadas').value; //3
    const txt_count_paginas_pendientes = document.querySelector('#txt_count_paginas_pendientes').value; //4
    const txt_count_aplicativos_aprobadas = document.querySelector('#txt_count_aplicativos_aprobadas').value; //5
    const txt_count_aplicativos_pendientes = document.querySelector('#txt_count_aplicativos_pendientes').value; //6

    const txt_count_total = document.querySelector('#txt_count_total').value;//total 100%


    const graficoVacunacion = (txt_count_correos_aprobados,txt_count_correos_pendientes,txt_count_paginas_aprobadas,txt_count_paginas_pendientes,txt_count_aplicativos_aprobadas,txt_count_aplicativos_pendientes,txt_count_total) => {
       
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ['CORREOS APROBADOS', 'CORREOS PENDIENTES','PAGINAS APROBADAS', 'PAGINAS PENDIENTES','APLICATIVOS PENDIENTES','APLICATIVOS APROBADOS','TOTALES'],
                datasets: [{
                    label: '', 
                    data: [txt_count_correos_aprobados,txt_count_correos_pendientes,txt_count_paginas_aprobadas,txt_count_paginas_pendientes,txt_count_aplicativos_aprobadas,txt_count_aplicativos_pendientes,txt_count_total],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgb(22, 236, 40, 0.2)',
                        'rgba(243, 10, 41, 0.2)',
                        'rgba(26, 82, 118 , 0.2)',
                        'rgba(118, 68, 138, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(22, 236, 40, 1)',
                        'rgba(243, 10, 41, 1)',
                        'rgba(26, 82, 118, 1)',
                        'rgba(118, 68, 138, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }


    //EVENTOS
    window.addEventListener('load', graficoVacunacion(txt_count_correos_aprobados,txt_count_correos_pendientes,txt_count_paginas_aprobadas,txt_count_paginas_pendientes,txt_count_aplicativos_aprobadas,txt_count_aplicativos_pendientes,txt_count_total));
});

