<?php

if(is_uploaded_file($_FILES['file']['tmp_name'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], '../img/admin/'.$_FILES['file']['name']);
}

?>
