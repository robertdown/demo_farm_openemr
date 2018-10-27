<?php
// resets password

set_time_limit(0);

// Ensure running from command line only
if (php_sapi_name() !== 'cli') {
    exit;
}

// $path requires no explanation
// $seconds is how frequently the passwords are reset
// $mode:
//       1  - just the admin user in a basic demo
//       2  - all the official users in the demos with demo data

$path = $argv[1];
$seconds = $argv[2];
$mode = $argv[3];

$_GET['site'] = 'default';
$ignoreAuth=1;
require_once($path . "/openemr/interface/globals.php");
require_once($GLOBALS['srcdir'] . "/authentication/password_change.php");

if ($mode == 2) {
    while (true) {
        sqlStatement('UPDATE `users` SET `username` = "admin", `active` = 1 WHERE `id` = 1');
        sqlStatement('UPDATE `users_secure` SET `username` = "admin", `password` = "$2a$05$.hH4Godes3dORmHjOjtXXekQPf2n5tQsw2H/ahwsBECLA/QCgWRS.", `salt` = "$2a$05$.hH4Godes3dORmHjOjtXXl$" WHERE `id` = 1');

        sqlStatement('UPDATE `users` SET `username` = "accountant", `active` = 1 WHERE `id` = 4');
        sqlStatement('UPDATE `users_secure` SET `username` = "accountant", `password` = "$2a$05$rMH0ZfoGXKuavGpsmM.UPuAonkS2811YVIE2ZL52.Q/GGCL0AAV4q", `salt` = "$2a$05$rMH0ZfoGXKuavGpsmM.UPy$" WHERE `id` = 4');

        sqlStatement('UPDATE `users` SET `username` = "clinician", `active` = 1 WHERE `id` = 5');
        sqlStatement('UPDATE `users_secure` SET `username` = "clinician", `password` = "$2a$05$LDt00UZrNVbXR8j9Rj0.NuBN6bMoT4hbXoiKnkQkDQetYy9rMXIri", `salt` = "$2a$05$LDt00UZrNVbXR8j9Rj0.N3$" WHERE `id` = 5');

        sqlStatement('UPDATE `users` SET `username` = "physician", `active` = 1 WHERE `id` = 6');
        sqlStatement('UPDATE `users_secure` SET `username` = "physician", `password` = "$2a$05$A89kt2tGxJK18mGDb7byZeEv9wP2CxxTHNczk5JPTZs0Vj4y4nER6", `salt` = "$2a$05$A89kt2tGxJK18mGDb7byZt$" WHERE `id` = 6');

        sqlStatement('UPDATE `users` SET `username` = "receptionist", `active` = 1 WHERE `id` = 7');
        sqlStatement('UPDATE `users_secure` SET `username` = "receptionist", `password` = "$2a$05$K912gu.hnrlOiUYrhBtgUO2cAK93QQ1hd.M7dMNe9zqiYokXGJjmS", `salt` = "$2a$05$K912gu.hnrlOiUYrhBtgUb$" WHERE `id` = 7');

        sqlStatement('UPDATE `users` SET `username` = "zhportal", `active` = 1 WHERE `id` = 8');
        sqlStatement('UPDATE `users_secure` SET `username` = "zhportal", `password` = "$2a$05$U6.L67RPZCz5GT4HEqTwieF6e2QBtIMQrFClRUYlC8vC9tIMiOpVC", `salt` = "$2a$05$U6.L67RPZCz5GT4HEqTwit$" WHERE `id` = 8');
        sleep($seconds);
    }
} else { // ($mode == 1)
    while (true) {
        sqlStatement('UPDATE `users` SET `username` = "admin", `active` = 1 WHERE `id` = 1');
        sqlStatement('UPDATE `users_secure` SET `username` = "admin", `password` = "$2a$05$.hH4Godes3dORmHjOjtXXekQPf2n5tQsw2H/ahwsBECLA/QCgWRS.", `salt` = "$2a$05$.hH4Godes3dORmHjOjtXXl$" WHERE `id` = 1');
        sleep($seconds);
    }
}
