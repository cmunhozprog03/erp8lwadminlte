

$(document).ready(function(){

$('#cnpj').mask('00.000.000/0000-00', {reverse: true});
$('#ie').mask('000.000.000.000', {reverse: true});
$('#cep').mask('00000-000');  


var SPMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};


$('#mobile').mask(SPMaskBehavior, spOptions);
$('#phone').mask(SPMaskBehavior, spOptions);

 

});




