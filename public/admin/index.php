<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 24/03/2019
 * Time: 23:20
 */

spl_autoload_register(function($className) {
    $dir = strtolower(substr(strrchr($className, '_'), 1));
    require_once dirname(dirname(__DIR__)) . '/src/' . $dir . "/" . $className . '.php';
});

$sessionController = new Session_Controller();
$sessionController->protectedPage();
$sessionController->checkDisconnect();

require_once(dirname(dirname(__DIR__)) . '/src/view/admin/index-view.php');
