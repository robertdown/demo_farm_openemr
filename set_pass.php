<?php
// resets password

// Ensure running from command line only
if (php_sapi_name() !== 'cli') {
    exit;
}

$path = $argv[1];
$_GET['site'] = 'default';
$ignoreAuth=1;
require_once($path . "/openemr/interface/globals.php");
require_once($GLOBALS['srcdir'] . "/authentication/password_change.php");

sqlStatement("UPDATE `users` SET `username` = 'admin', `active` = 1 WHERE `id` = 1");
sqlStatement("UPDATE `users` SET `username` = 'admin', `password` = '$2a$05$.hH4Godes3dORmHjOjtXXekQPf2n5tQsw2H/ahwsBECLA/QCgWRS.', `salt` = '$2a$05$.hH4Godes3dORmHjOjtXXl$' WHERE `id` = 1");

