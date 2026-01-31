<?php
// diagnostico.php
$base64 = "UEsDBBQACAgIAFpCpVsAAAAAAAAAAAAAAAAMAAAAZmlsZS50eHRLS0vMSS0u0c3PTC9KTdEtyM9LLM0p1s1LLSrRLU4tKtYtSExP1S0oSi0uzdAtKMrMSweJFSWWpBaXpGam6qYCAFBLBwi0BS4KCAAAAAACAAAA";

echo "=== DIAGNÓSTICO DO BASE64 ===\n\n";
echo "Conteúdo CRÚ:\n";
echo $base64 . "\n\n";

echo "Tamanho: " . strlen($base64) . " caracteres\n\n";

echo "Análise de caracteres:\n";
for ($i = 0; $i < min(100, strlen($base64)); $i++) {
    $char = $base64[$i];
    $code = ord($char);
    echo "Pos $i: '$char' (ASCII: $code) - ";
    if ($code >= 65 && $code <= 90) echo "A-Z";
    elseif ($code >= 97 && $code <= 122) echo "a-z";
    elseif ($code >= 48 && $code <= 57) echo "0-9";
    elseif ($char == '+') echo "+";
    elseif ($char == '/') echo "/";
    elseif ($char == '=') echo "=";
    else echo "INVÁLIDO!";
    echo "\n";
}
?>
