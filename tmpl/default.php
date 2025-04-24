<?php
defined('_JEXEC') or die;
//echo "Mascara CPF";

$js		= $params->get("jQuery");
$tipo  = $params->get("tipo");
$campo1  = $params->get("campo1");
$campo2 = $params->get("campo2");
$campo3  = $params->get("campo3");
$campo4  = $params->get("campo4");
$campo5  = $params->get("campo5");
$campo6  = $params->get("campo6");
$campo7  = $params->get("campo7");
$campo8  = $params->get("campo8");
$campo9  = $params->get("campo9");
$campo10  = $params->get("campo10");
$tel = $params->get("tel");
$cel = $params->get("cel");
$cel = $params->get("cep");
$data = $params->get("data");
$nome = $params->get("nome");
if($tipo==0){ $vJs='$';} else { $vJs='jQuery';}



if($nome==1){
$verificarCPF=
'
function getCpf() {
 
        var myCPF;
        myCPF = '.$vJs.'("input[name='.$campo1.']").val().replace(".", "").replace(".", "").replace("-", "");
        var numeros, digitos, soma, i, resultado, digitos_iguais;
        digitos_iguais = 1;
 
        if (myCPF.length < 11) {
         '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto, verifique a quantidade de números."});
          '.$vJs.'("input[name='.$campo1.']").val("");
         
           
        }
        for (i = 0; i < myCPF.length - 1; i++)
            if (myCPF.charAt(i) != myCPF.charAt(i + 1)) {
                digitos_iguais = 0;
                break;
            }
        if (!digitos_iguais) {
            numeros = myCPF.substring(0, 9);
            digitos = myCPF.substring(9);
            soma = 0;
            for (i = 10; i > 1; i--)
                soma += numeros.charAt(10 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0)) {
             '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto"});
             '.$vJs.'("input[name='.$campo1.']").val("");
       
            }
            else {
            numeros = myCPF.substring(0, 10);
            soma = 0;
            for (i = 11; i > 1; i--)
                soma += numeros.charAt(11 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1)) {
            	'.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto"});
            	'.$vJs.'("input[name='.$campo1.']").val("");
            }
            return true;
          }
        }
        else {
          
           '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto"});
           '.$vJs.'("input[name='.$campo1.']").val("");
              
        }
 
}            
           
';










if($js==0){
echo '<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';
echo '<script src="'.JURI::root().'modules/mod_mascara_cpf/assets/js/jquery.mask.js" crossorigin="anonymous"></script>';
}



if($campo1){
$script.= " \n  $vJs('input[name=$campo1]').mask('000.000.000-00', {reverse: true});  ";
$script2.= " \n $vJs('input[name=$campo1]').blur(function() {   
    getCpf();
    
});  ";
}
if($campo2){
$script.= " \n $vJs('input[name=$campo2]').mask('000.000.000-00', {reverse: true});  ";

}
if($campo3){
$script.= " \n $vJs('input[name=$campo3]').mask('000.000.000-00', {reverse: true});  ";

}
if($campo4){
$script.= " \n $vJs('input[name=$campo4]').mask('000.000.000-00', {reverse: true});  ";
}
if($campo5){
$script.= " \n $vJs('input[name=$campo5]').mask('000.000.000-00', {reverse: true});  ";
}
if($campo6){
$script.= " \n $vJs('input[name=$campo6]').mask('000.000.000-00', {reverse: true});  ";
}
if($campo7){
$script.= " \n $vJs('input[name=$campo7]').mask('000.000.000-00', {reverse: true});  ";
}
if($campo8){
$script.= " \n $vJs('input[name=$campo8]').mask('000.000.000-00', {reverse: true});  ";
}
if($campo9){
$script.= " \n $vJs('input[name=$campo9]').mask('000.000.000-00', {reverse: true});  ";
}
if($campo10){
$script.= " \n $vJs('input[name=$campo10]').mask('000.000.000-00', {reverse: true});  ";
}
if($tel){
$script.= " \n $vJs('input[name=$tel]').mask('(00) 000000009');  ";
}

if($cel){
$script.= " \n $vJs('input[name=$cel]').mask('(00) 000000009');  ";
}

if($cep){
$script.= " \n $vJs('input[name=$cep').mask('00000-000');  ";
}

if($data){
$script.= " \n $vJs('input[name=$data').mask('00/00/0000');  ";
}

}
else

{
    
    
  $verificarCPF=
'
function getCpf() {
 
        var myCPF;
        myCPF = '.$vJs.'("#'.$campo1.'").val().replace(".", "").replace(".", "").replace("-", "");
        var numeros, digitos, soma, i, resultado, digitos_iguais;
        digitos_iguais = 1;
 
        if (myCPF.length < 11) {
         '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto, verifique a quantidade de números."});
          '.$vJs.'("#'.$campo1.'").val("");
         
           
        }
        for (i = 0; i < myCPF.length - 1; i++)
            if (myCPF.charAt(i) != myCPF.charAt(i + 1)) {
                digitos_iguais = 0;
                break;
            }
        if (!digitos_iguais) {
            numeros = myCPF.substring(0, 9);
            digitos = myCPF.substring(9);
            soma = 0;
            for (i = 10; i > 1; i--)
                soma += numeros.charAt(10 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(0)) {
             '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto"});
             '.$vJs.'("#'.$campo1.'").val("");
       
            }
            else {
            numeros = myCPF.substring(0, 10);
            soma = 0;
            for (i = 11; i > 1; i--)
                soma += numeros.charAt(11 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if (resultado != digitos.charAt(1)) {
              '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto"});
              '.$vJs.'("#'.$campo1.'").val("");
            }
            return true;
          }
        }
        else {
          
           '.$vJs.'.alert({  title: "Atenção",  content: "CPF incorreto"});
           '.$vJs.'("#'.$campo1.'").val("");
              
        }
 
}            
           
';
    
    
    
    
    
    



if($js==0){
echo '<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>';
echo '<script src="'.JURI::root().'modules/mod_mascara_cpf/assets/js/jquery.mask.js" crossorigin="anonymous"></script>';
}



if($campo1){
$script.= " \n  $vJs('#$campo1').mask('000.000.000-00', {reverse: true});  ";
$script2.= " \n $vJs('#$campo1').blur(function() {   
    getCpf();
    
});  ";
}
if($campo2){
$script.= " \n $vJs('#$campo2').mask('000.000.000-00', {reverse: true});  ";

}
if($campo3){
$script.= " \n $vJs('#$campo3').mask('000.000.000-00', {reverse: true});  ";

}
if($campo4){
$script.= " \n $vJs('#$campo4').mask('000.000.000-00', {reverse: true});  ";
}
if($campo5){
$script.= " \n $vJs('#$campo5').mask('000.000.000-00', {reverse: true});  ";
}
if($campo6){
$script.= " \n $vJs('#$campo6').mask('000.000.000-00', {reverse: true});  ";
}
if($campo7){
$script.= " \n $vJs('#$campo7').mask('000.000.000-00', {reverse: true});  ";
}
if($campo8){
$script.= " \n $vJs('#$campo8').mask('000.000.000-00', {reverse: true});  ";
}
if($campo9){
$script.= " \n $vJs('#$campo9').mask('000.000.000-00', {reverse: true});  ";
}
if($campo10){
$script.= " \n $vJs('#$campo10').mask('000.000.000-00', {reverse: true});  ";
}
if($tel){
$script.= " \n $vJs('#$tel').mask('(00) 000000009');  ";
}

if($cel){
$script.= " \n $vJs('#$cel').mask('(00) 000000009');  ";
}

if($cep){
$script.= " \n $vJs('#$cep').mask('00000-000');  ";
}
if($data){
$script.= " \n $vJs('#$data').mask('00/00/0000');  ";
}


    
}

echo "
<script>
".$verificarCPF."
$vJs(document).ready(function(){
 
  ".$script."
  ".$script2."
})
</script>
";








