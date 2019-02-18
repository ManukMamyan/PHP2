<?php
/**
 * Created by PhpStorm.
 * User: Манук
 * Date: 17.02.2019
 * Time: 15:36
 */

include 'db.php';

$startFrom = $_POST['startFrom'];

$query = "SELECT * FROM goods order by id desc LIMIT {$startFrom}, 2";
$res = mysqli_query($link,$query);

$goods = array();
while ($row = mysqli_fetch_assoc($res)) {
    $goods[] = $row;
}

echo json_encode($goods);