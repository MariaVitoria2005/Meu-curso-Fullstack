$(document).ready(function(){
    
    $('#form_cliente').submit(function(event){
        let nome = $('#nome').val()
        let data_nascimento = $('#data_nascimento').val()
    
        if(nome == ''){
            alert('cliente obrigatorio!')
            event.preventDefault();
        }
        if(data_nascimento == ''){
            alert('data nascimento é obrigatorio!')
            event.preventDefault();
        }
    });
});