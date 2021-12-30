<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// redirect based on country code:
if ($var_country_code == "JP") {
header('Location: http://jp.kimino.com/');
}
else if ($var_country_code == "US") {
header('Location: http://us.kimino.com/');
}
else {
header('Location: http://us.kimino.com/');
}
?>
