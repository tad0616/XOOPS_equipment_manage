<?php
/**
 * Created by PhpStorm.
 * User: jjes
 * Date: 2016/11/1
 * Time: 下午 02:29
 */
    include '../../../../mainfile.php';

    $post_data = array_map("addslashes", $_POST);
    $post_data_name = $post_data["name"];
    $post_data_amount = $post_data["amount"];
    $owner = $xoopsUser->uname();

    if(strlen( $post_data["name"]) && strlen($post_data["amount"])) {

        $sql = sprintf("INSERT INTO %s VALUES(NULL, '{$post_data_name}', '{$owner}', '{$post_data_amount}')"
            , $xoopsDB->prefix('equipment_manage'));

        echo $sql;
    }
    echo "<script>window.location='../manage.php'</script>";
