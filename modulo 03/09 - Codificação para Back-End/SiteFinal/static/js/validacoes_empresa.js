$(document).ready(function(){
    
    $('#form_empresa').submit(function(event){
        let razao_social = $('#razao_social').val()
        let cnpj = $('#cnpj').val()
        if(razao_social == ''){
            alert('razao_social obrigatorio!')
            event.preventDefault();
        }
        if(cnpj.length != 14){
            alert('campo CNPJ não possui 14 caracteres!')
            event.preventDefault();
        }
    });
});