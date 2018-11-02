<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 02/11/2018
 * Time: 13:41
 */

include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
