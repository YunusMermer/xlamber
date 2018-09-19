<?php

function satir_ekle($ara,$yazdir,$dosya){
  $satir = explode(PHP_EOL,file_get_contents($dosya));
  foreach ($satir as $key => $value) {
    if (false !== strpos($value, $ara)) {
      array_splice( $satir, ($key + 1), 0, [$yazdir] );
    }
  }
  file_put_contents($dosya,implode("\n",$satir));
}
satir_ekle('RewriteEngine on','yeni satır','.htaccess');
?>
