<?php
    require_once('../libs/mssql.inc.php');

    $query = "SELECT * FROM users WHERE id=" . $_GET['id'];
    dbQuery($query, false, false, true);
?>
