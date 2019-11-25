<?php
include_once 'public/linkmysql.php';
include_once 'public/tool.inc.php';
include_once 'public/page.inc.php';
$link=connect();
$is_manage_login=is_manage_login($link);

?>
<?php include 'public/header.inc.php'?>

<?php include 'public/footer.php'?>