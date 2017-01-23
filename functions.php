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

echo '23 Ocak 2017 tarihi '.hangi_gun('2017/01/23').' gününe denk gelir.<br>';;
echo '2016 yılı Şubat ayı '.ay_kac_gun(2016,2).' gün çeker.<br>';
echo 'Şuan içinde bulunduğumuz ay '.buay_kac_gun().' gün çeker.<br>';
