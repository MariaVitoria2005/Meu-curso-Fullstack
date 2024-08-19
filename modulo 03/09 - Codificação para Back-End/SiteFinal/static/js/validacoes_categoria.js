// $(document).ready(function() {
//     $("h2").text("jQuery está funcionando!");
// });

$(document).ready(function(){
    
    $('#form_categoria').submit(function(event){
        let tipo = $('#tipo').val()
        if(tipo == ''){
            alert('Tipo obrigatorio!')
            event.preventDefault();
        }
    });
});