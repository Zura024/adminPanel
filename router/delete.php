<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 16:49
 */
require_once '../model/DeleteModel.php';
require_once "../config/db_congif.php";
require_once "../config/site_config.php";
if (!empty($_POST)&&(isset($_POST['alias']))) {
    $del = new DeleteModel();
    $del->deletePage($_POST['alias']);
}