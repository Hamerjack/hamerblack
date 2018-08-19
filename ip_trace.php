<?php 

if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    echo $_SERVER["HTTP_CLIENT_IP"];
}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    echo $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    echo $_SERVER["REMOTE_ADDR"];
}


echo "<br />".$_SERVER["HTTP_USER_AGENT"];
$var = get_browser($_SERVER["HTTP_USER_AGENT"],false);
var_export($var);
?>


<?php
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser);
?>
