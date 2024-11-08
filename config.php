<?php
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);
session_set_cookie_params([
    // cookie destroyed after some time
    'lifetime'=>36000,
    'domain' => 'localhost',
    'path'=>'/',
    'secure'=>true,
    'httponly'=> true,
    // restricts script access from our client(us in the browser)
]);
session_start();

// generate a new id for the particular session
// session id regenerates after some time.

if(!isset($_SESSION['last_regeneration'])){
    session_regenerate_id(true);
    $_SESSION['last_regeneration']=time();

}
else{
    $interval = 60*30;
    if(time() -$_SESSION['last_regeneration']>= $interval){
        session_regenerate_id(true);
        $_SESSION['last_regeneration']=time();
    }}


