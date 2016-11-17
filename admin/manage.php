<?php
    include '../../../mainfile.php';
    include '../../../include/cp_header.php';
    xoops_cp_header();

    $sql = sprintf("SELECT  name, owner, amount, id FROM %s WHERE owner=%s",
        $xoopsDB->prefix('equipment_desc'), $xoopsUser);

    $query = $xoopsDB->query($sql);

    $query_rows = [];
    if($xoopsDB->getRowsNum($query) > 0){

        while ($row = $xoopsDB->fetchArray($query)){
            $query_rows[] = $row;
        }
    }

    $json_data = json_encode($query_rows);
    $xoopsTpl->assign('json_data', $json_data);
    $xoopsTpl->display('db:equipment_manage.html');
    xoops_cp_footer();
?>