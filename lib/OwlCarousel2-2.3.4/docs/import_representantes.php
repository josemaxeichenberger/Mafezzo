
<?php
include('config.php');

// a one-line simple option to reade CSV to array
// it uses PHP str_getcsv
$csvArray = array_map('str_getcsv', file('Relatório CCCDB605CSW.xlsx - Relatório CCCDB605CSW (4).csv'));

foreach($csvArray as $dados){
    echo '<pre>';
    ECHO "INSERT INTO `tecnicos`( `nome`, `email`, `cpf`, `telefone`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `numero`, `atendimento`, `dt_registro`, `lat`, `lng`, `place_id`) VALUES ('{$dados['0']}','{$dados['1']}','{$dados['2']}','{$dados['3']}','{$dados['4']}','{$dados['5']}','{$dados['6']}','{$dados['7']}','{$dados['8']}','{$dados['9']}','{$dados['10']}',NOW(),'{$dados['12']}','{$dados['13']}','{$dados['14']}')";
echo '</pre>';
}
mysql_query("INSERT INTO `tecnicos`( `nome`, `email`, `cpf`, `telefone`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `numero`, `atendimento`, `dt_registro`, `lat`, `lng`, `place_id`) VALUES ('{$dados['0']}','{$dados['1']}','{$dados['2']}','{$dados['3']}','{$dados['4']}','{$dados['5']}','{$dados['6']}','{$dados['7']}','{$dados['8']}','{$dados['9']}','{$dados['10']}',NOW(),'{$dados['12']}','{$dados['13']}','{$dados['14']}')");
?>