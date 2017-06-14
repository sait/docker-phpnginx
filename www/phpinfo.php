<?php
ini_set("display_errors", "on");
ini_set('display_startup_errors','on');
date_default_timezone_set('America/Phoenix');
echo "La fecha y hora actual en SLRC es:" . date('Y-m-d H:i:s') . "<br>";
echo "Ahora veremos la configuracion de php con phpinfo() <br><br>";
phpinfo();
