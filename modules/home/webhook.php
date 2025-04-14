<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // O Facebook/Instagram envia um parâmetro 'hub.challenge' para validar a URL
    if (isset($_GET['hub_challenge']) && isset($_GET['hub_verify_token'])) {
        $verify_token ='IGAAGo9CE1t75BZAFB2NkdPb051cjlNQWdZASDRiOWFMTXFhNUNoYW5Jb1A0Yi1kX3ZAYTEREbTI2dnpjVkFFZATZALZAUF6V3doUEhjUFR0a0tXOW1DdE5sRy04eGFVdVpRQlBjZA3hYb0JkMmFSZAkZAOSHJWWU1B'; //MESMO TOKEN PAINEL META
        if ($_GET['hub_verify_token'] === $verify_token) {
            // SE DER CERTO RETORNA HUB.CHALLNGE
            echo $_GET['hub_challenge'];
            exit;
        } else {
            echo 'Token de verifica��o inv�lido.';
            exit;
        }
    }
}

// processar notificacoes POST do Instagram
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    // verifica se dados sao validos
    if (isset($input['entry'])) {
        foreach ($input['entry'] as $entry) {
            // obter informacoes da publicacao
            //$entry['changes'][0]['value'] contem as informacoes da midia
            $media_data = $entry['changes'][0]['value'];
            $media_id = $media_data['media_id'];
        }
    }
}
?>
