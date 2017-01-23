<?php

// verilen tarih hangi gün ile adlandırılır
function hangi_gun($tarih) {
  $gunadi=array('Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi');
  return $gunadi[date('w', strtotime($tarih))];
}


echo hangi_gun('2017/01/23');
