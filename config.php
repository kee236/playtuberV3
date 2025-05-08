<?php
// +------------------------------------------------------------------------+
// | @author Deen Doughouz (DoughouzForest)
// | @author_url 1: http://www.playtubescript.com
// | @author_url 2: http://codecanyon.net/user/doughouzforest
// | @author_email: wowondersocial@gmail.com   
// +------------------------------------------------------------------------+
// | PlayTube - The Ultimate Video Sharing Platform
// | Copyright (c) 2017 PlayTube. All rights reserved.
// +------------------------------------------------------------------------+
// MySQL Hostname
$sql_db_host = "localhost";
// MySQL Database User
$sql_db_user = "root";
// MySQL Database Password
$sql_db_pass = "ZXasqw12#";
// MySQL Database Name
$sql_db_name = "playtube";

// Site URL
$site_url = "https://px24.pl"; // e.g (http://example.com)

// Purchase code
$purchase_code = "a90e6261-adb0-416b-a950-6da7519867c6"; // Your purchase code, don't give it to anyone. 



////****


$whitelist = array('127.0.0.1', '::1');
// MySQL Hostname
$sql_db_host = "localhost";
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    // MySQL Database User
    $sql_db_user = "exenfdrm_bc7d6f4b36cc2f";
    // MySQL Database Password
    $sql_db_pass = "f556b82e";
    // MySQL Database Name
    $sql_db_name = "exenfdrm_tube";
    // Site URL
    $site_url = "https://tube.exenox.co"; 
}
else{
    // MySQL Database User
    $sql_db_user = "root";
    // MySQL Database Password
    $sql_db_pass = "";
    // MySQL Database Name
    $sql_db_name = "playtube";
    // Site URL
    $site_url = "http://localhost/playtube";

}

// Purchase code
//$purchase_code = "12345678"; // Your purchase code, don't give it to anyone. 


***////








//**** custum add 
/*
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    define('DEBUG_MODE', false);
} else {
    define('DEBUG_MODE', true);
}


if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    error_reporting(0); // ไม่แสดงข้อผิดพลาด
} else {
    error_reporting(E_ALL); // แสดงข้อผิดพลาดทุกระดับ
}


if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $Maps_api_key = "YOUR_PRODUCTION_API_KEY";
} else {
    $Maps_api_key = "YOUR_DEVELOPMENT_API_KEY";
}



if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $smtp_host = "production.smtp.com";
    $smtp_user = "production_user";
    $smtp_pass = "production_password";
    $admin_email = "support@yourwebsite.com";
} else {
    $smtp_host = "development.smtp.com";
    $smtp_user = "development_user";
    $smtp_pass = "development_password";
    $admin_email = "test@yourwebsite.dev";
}


*/





***////
?>