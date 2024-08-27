<?php
$data=$_FILES['filePhoto'];
print_r($data);
move_uploaded_file($data['tmp_name'],"./uploads/".$data['name']);

?>