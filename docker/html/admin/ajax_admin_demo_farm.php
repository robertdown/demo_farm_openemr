<?php
/**
 * OpenEMR Demo farm Admin Page
 *
 * @link      http://www.open-emr.org
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2017 Brady Miller <brady.g.miller@gmail.com>
 * @license   GNU General Public License 3
 */

function collectProcedure($command, &$output)
{
    $output[] = " ";
    $output[] = "COMMAND: " . $command;
    exec("ssh -o StrictHostKeyChecking=no -i /home/ssh/openemr-demo-server.pem ec2-user@openemr.io '" . $command . "'", $output);
}

if (!empty($_POST['procedure'])) {
    $output = array();
    switch ($_POST['procedure']) {
        case 'status_farm':
            collectProcedure('cat /etc/motd', $output);
            collectProcedure('docker ps -a', $output);
            collectProcedure('docker images', $output);
            collectProcedure('df -h', $output);
            collectProcedure('free -m', $output);
            collectProcedure('top -bca -n 1', $output);
            collectProcedure('crontab -l', $output);
            break;
        case 'status_one_openemr':
            collectProcedure('docker logs one-openemr', $output);
            break;
        case 'status_two_openemr':
            collectProcedure('docker logs two-openemr', $output);
            break;
        case 'status_three_openemr':
            collectProcedure('docker logs three-openemr', $output);
            break;
        case 'status_four_openemr':
            collectProcedure('docker logs four-openemr', $output);
            break;
        case 'status_five_openemr':
            collectProcedure('docker logs five-openemr', $output);
            break;
        case 'status_six_openemr':
            collectProcedure('docker logs six-openemr', $output);
            break;
        case 'status_seven_openemr':
            collectProcedure('docker logs seven-openemr', $output);
            break;
        case 'status_eight_openemr':
            collectProcedure('docker logs eight-openemr', $output);
            break;
        case 'status_nine_openemr':
            collectProcedure('docker logs nine-openemr', $output);
            break;
        case 'status_ten_openemr':
            collectProcedure('docker logs ten-openemr', $output);
            break;
        case 'status_mysql':
            collectProcedure('docker logs mysql-openemr', $output);
            break;
        case 'status_nginx':
            collectProcedure('docker logs reverse-proxy', $output);
            break;
        case 'status_phpmyadmin':
            collectProcedure('docker logs phpmyadmin-openemr', $output);
            break;
        case 'status_php':
            collectProcedure('docker logs php-serve', $output);
            break;
        case 'restart_one_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh one', $output);
            break;
        case 'refresh_one_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh one empty', $output);
            break;
        case 'restart_two_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh two', $output);
            break;
        case 'refresh_two_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh two empty', $output);
            break;
        case 'restart_three_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh three', $output);
            break;
        case 'refresh_three_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh three empty', $output);
            break;
        case 'restart_four_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four', $output);
            break;
        case 'refresh_four_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four empty', $output);
            break;
        case 'refresh_four_a_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four a', $output);
            break;
        case 'refresh_four_b_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four b', $output);
            break;
        case 'refresh_four_c_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four c', $output);
            break;
        case 'refresh_four_d_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four d', $output);
            break;
        case 'refresh_four_e_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four e', $output);
            break;
        case 'refresh_four_f_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four f', $output);
            break;
        case 'refresh_four_g_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four g', $output);
            break;
        case 'refresh_four_h_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four h', $output);
            break;
        case 'refresh_four_i_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh four i', $output);
            break;
        case 'restart_five_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh five', $output);
            break;
        case 'refresh_five_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh five empty', $output);
            break;
        case 'refresh_five_a_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh five a', $output);
            break;
        case 'restart_six_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh six', $output);
            break;
        case 'refresh_six_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh six empty', $output);
            break;
        case 'restart_seven_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh seven', $output);
            break;
        case 'refresh_seven_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh seven empty', $output);
            break;
        case 'restart_eight_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh eight', $output);
            break;
        case 'refresh_eight_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh eight empty', $output);
            break;
        case 'restart_nine_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh nine', $output);
            break;
        case 'refresh_nine_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh nine empty', $output);
            break;
        case 'restart_ten_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh ten', $output);
            break;
        case 'refresh_ten_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartDemo.sh ten empty', $output);
            break;
        case 'restart_all_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartFarm.sh', $output);
            break;
        case 'restart_database_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartMysql.sh', $output);
            break;
        case 'restart_phpmyadmin_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartPhpmyadmin.sh', $output);
            break;
        case 'restart_nginx_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartNginx.sh', $output);
            break;
        case 'restart_php_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/restartPhp.sh', $output);
            break;
        case 'restart_certs_openemr':
            collectProcedure('bash ~/demo_farm_openemr/docker/scripts/renewLetsencrypt.sh', $output);
            break;
        default:
            $output[] = "ERROR: Did not recognize procedure.";
            break;
    }
    echo json_encode($output);
    exit();
}
