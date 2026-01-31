<?php
// ARQUIVO PHP CORRIGIDO
$base64 = "UEsDBBQACAgIAFpCpVsAAAAAAAAAAAAAAAAMAAAAZmlsZS50eHRLS0vMSS0u0c3PTC9KTdEtyM9LLM0p1s1LLSrRLU4tKtYtSExP1S0oSi0uzdAtKMrMSweJFSWWpBaXpGam6qYCAFBLBwi0BS4KCAAAAAACAAAA";

// LIMPAR e ESCAPAR o Base64 para JSON
$base64_limpo = trim($base64);
$base64_json = $base64_limpo;

// Remover quebras de linha e espaços extras
$base64_json = str_replace(["\r", "\n", "\t"], '', $base64_json);

// Configurar cabeçalhos
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

// Usar json_encode CORRETAMENTE
echo json_encode([
    'status' => 'ok',
    'base64' => $base64_json,
    'tamanho' => strlen($base64_json)
], JSON_UNESCAPED_SLASHES | JSON_HEX_QUOT | JSON_HEX_TAG);
?>
