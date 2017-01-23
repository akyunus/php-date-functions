<?php

// verilen tarih hangi gün ile adlandırılır
function hangi_gun($tarih) {
  $gunadi=array('Pazar','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi');
  return $gunadi[date('w', strtotime($tarih))];
}

// belirtilen yilin belirtilen ayı kaç gün çeker
function ay_kac_gun($yil,$ay) {
  return cal_days_in_month(CAL_GREGORIAN, $ay, $yil);
}

function buay_kac_gun(){
  $yil = date('Y');
  $ay = date('n');
  return ay_kac_gun($yil,$ay);
}  

echo hangi_gun('2017/01/23');
echo ay_kac_gun(2015,1);
