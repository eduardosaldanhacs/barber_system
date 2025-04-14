<?php
// Dados do aplicativo (Facebook Developers)
$client_id = '467241459365822';
$client_secret = 'cfaa8423506a80bab5acb0fe2955c594';
$redirect_uri = SITE;

function curl_get_contents($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
?>


<section id="instagram" class="w-10 h-auto py-90 bg-white">
    <div class="container">
        <div class="text-center">
            <a href="https://www.instagram.com/escolavovoolmira" target="_blank">
                <img src="<?php echo SITE ?>images/slices/instagram.png" alt="Instagram" class="img-fluid mx-auto mb-2 efeito">
            </a>
            <h1 class="fw-bold text-1 dosis"><span class="text-2">@</span>escolavovoolmira</h1>
        </div>
        <div class="instagram-feed w-100 mt-5">
            <div class="owl-carousel w-100 owl-theme" id="carousel-insta">
                <?
                $query = "SELECT * FROM instagram";
                $result = mysqli_query($conn, $query);
                $dados = mysqli_fetch_assoc($result);

                $token = $dados['token'];
                $toggle = $dados['instaToggle'] == 'S';
                $mail = $dados['mail'] == 'S';

                // URL DE RENOVAÇÃO DO TOKEN (PROLONGA O TOKEN POR 60 DIAS)
                $renew_token_url = "https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=$token";

                // RENOVAR O TOKEN AUTOMATICAMENTE
                function renovar_token($conn, $token, $renew_token_url)
                {
                    $response = curl_get_contents($renew_token_url);
                    $data = json_decode($response, true);

                    if (isset($data['access_token'])) {
                        $novo_token = $data['access_token'];
                        $update_query = "UPDATE instagram SET token = '$novo_token' WHERE id = 1";
                        mysqli_query($conn, $update_query);
                    }
                }


                // RENOVA O TOKEN ANTES DE BUSCAR DADOS, SE A FUNCIONALIDADE ESTIVER ATIVA
                if ($toggle) {
                    renovar_token($conn, $token, $renew_token_url);

                    $url = "https://graph.instagram.com/me/media?access_token=$token&fields=caption,id,media_type,media_url,permalink,thumbnail_url,timestamp,username,children";
                    $contents = curl_get_contents($url);
                    $array = json_decode($contents);

                    if (!empty($array) && !isset($array->error)) {
                        $i = 1;
                        foreach ($array->data as $value) {
                            if (isset($value->media_url)) {
                                if ($i <= 4) {
                ?>
                                    <div class="item-video bg-3">
                                        <a href="<?= $value->permalink ?>" target="_blank">
                                            <?php
                                            if ($value->media_type == "IMAGE" || $value->media_type == "CAROUSEL_ALBUM") {
                                            ?>
                                                <div class="img-insta" style="background-image: url('<?= $value->media_url ?>');" alt="<?= !empty($value->caption) ? $value->caption : NULL ?>"></div>
                                            <?php
                                            } else {
                                            ?>
                                                <video autoplay muted>
                                                    <source src="<?= $value->media_url ?>">
                                                    </source>
                                                </video>
                                            <?php
                                            }
                                            ?>
                                        </a>
                                    </div>
                                <?php
                                }

                                ?>
                            <?php
                                $i++;
                            }
                            ?>
                <?php
                        }
                    } else {
                        // Envio de e-mail se o token falhar
                        if ($mail) {
                            $to = "suporte1@webdbsolution.com.br";
                            $subject = "Token do Instagram | Olmira";
                            $message = "<html><body><p>Verifique o token da Olmira!</p></body></html>";
                            $headers = "Content-type:text/html;charset=UTF-8\r\n";
                            $headers .= 'From: <suporte1@webdbsolution.com.br>' . "\r\n";

                            if (mail($to, $subject, $message, $headers)) {
                                $mailQuery = "UPDATE instagram SET mail = 'N' WHERE id = 1";
                                mysqli_query($conn, $mailQuery);
                            }
                        }
                    }
                }

                ?>
            </div>
        </div>
    </div>
</section>