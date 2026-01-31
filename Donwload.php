<?php
// SIMPLES E DIRETO - APENAS ISSO NO ARQUIVO
$base64 = "UEsDBBQACAgIAFpCpVsAAAAAAAAAAAAAAAAMAAAAZmlsZS50eHRLS0vMSS0u0c3PTC9KTdEtyM9LLM0p1s1LLSrRLU4tKtYtSExP1S0oSi0uzdAtKMrMSweJFSWWpBaXpGam6qYCAFBLBwi0BS4KCAAAAAACAAAA";
// ↑↑↑ SUBSTITUA pelo SEU Base64 real

header('Content-Type: application/json');
echo '{"status":"ok","base64":"' . $base64 . '","tamanho":' . strlen($base64) . '}';
?>
