<?php
//Conferir os calores de envio pois retorna o ERRO 99 e "dizem" que é por formatação de dados

$data = array();
$data['nCdEmpresa'] = '';
$data['sDsSenha'] = '';
$cep_origem = '86300000';
$cep = '86300000';
$peso = '0.100';
$data['sCepOrigem'] = $cep_origem;
$data['sCepDestino'] = $cep;
$data['nVlPeso'] = $peso;
$data['nCdFormato'] = '1';
$data['nVlComprimento'] = '40';
$data['nVlAltura'] = '5';
$data['nVlLargura'] = '40';
$data['nVlDiametro'] = '0';
$data['sCdMaoPropria'] = 'N';
$data['nVlValorDeclarado'] = '0';
$data['sCdAvisoRecebimento'] = 'S';
$data['StrRetorno'] = 'xml';
$data['nCdServico'] = '04510';
$data = http_build_query($data);
$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
$curl = curl_init($url . '?' . $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$result = simplexml_load_string($result);
foreach($result -> cServico as $row){ 
    if($row->Erro == 0)
    {   echo "<style= style.css>";
        echo "<p> " . $row->Codigo . "</p>";
        echo "<p> " . $row->PrazoEntrega . "</p>";
        echo "<p> " . $row->Valor . "</p>"; 
    } else
    
    {
        echo "<p> ERRO </p>";
        echo "<p>" .  $row->Erro . "</p>";

    }

}
?>