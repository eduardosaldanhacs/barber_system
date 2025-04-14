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
                <?php

                $token = "IGQWRNanREenZAMWTgxTU94TFpMb1NsVDFnSlZASem1LVzZA5Q1MzTFNCUmpBMjBVQjZAlN1VpdjJNeUlzQWtwZATJ5YjBNT1I1WXhRa3FLbVQwUjVrX3doX3U0QktkNnhwRWJnSnRBdGhXMFE5Y0xTVjVIdno4dHRmaTgZD";

                $url = "https://graph.instagram.com/me/media?access_token=$token&fields=caption,id,media_type,media_url,permalink,thumbnail_url,timestamp,username,children";

                $contents = file_get_contents($url);
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
                }
                ?>
            </div>
        </div>
    </div>
</section>