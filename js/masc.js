

$(document).ready(function(){

    $('input[id="cep"]').mask("99999-999");
    $('input[id="cnpj"]').mask('99.999.999/9999-99', {reverse: true});
    $('input[id="telefone"]').mask('(99) 9999-9999')
    $('input[id="inscricao_estadual"]').mask('99-999999-9')
  
  

});