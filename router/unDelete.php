<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 09.02.2017
 * Time: 13:48
 */
require_once '../model/UnDeleteModel.php';
require_once "../config/db_congif.php";
require_once "../config/site_config.php";
if (!empty($_POST)&&(isset($_POST['alias']))) {

    $alias=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['alias']);

    $del = new UnDeleteModel();
    $del->unDeletePage($alias);
}