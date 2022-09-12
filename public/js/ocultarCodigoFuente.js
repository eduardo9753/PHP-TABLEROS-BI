window.addEventListener('DOMContentLoaded', () => {

    onkeydown = e => {
        let tecla = e.which || e.keyCode;
        
        // Evaluar si se ha presionado la tecla Ctrl:
        if ( e.ctrlKey ) {
          // Evitar el comportamiento por defecto del nevagador:
          e.preventDefault();
          e.stopPropagation();
          
          // Mostrar el resultado de la combinación de las teclas:
          if ( tecla === 85 )
            console.log("Ha presionado las teclas Ctrl + U");
          
          if ( tecla === 83 )
            console.log("Ha presionado las teclas Ctrl + S");
        }
    }
    
    document.oncontextmenu = function(){return false;}
});