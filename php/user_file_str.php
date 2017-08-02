<?php
$title = "Welcom to Out of line!";
$file_name = basename($_SERVER['PHP_SELF'],".php");

include '../temp/admin_header.php';
include '../root/root.php';
include '../php/mysql_send.php';
include '../php/database.php';
include '../php/select_id.php';

?>
<main>
    <h1>ようこそ<?php echo $user_name_cli; ?>さん</h1>
</main>
<?php
include '../temp/footer_no.html';
?>
