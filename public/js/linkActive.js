window.addEventListener('DOMContentLoaded', () => {
    
    $("#boton").click(function(){
      $('.nav-treeview li a').each(function(){
         alert($(this).attr('id'))
      });
    });

});
