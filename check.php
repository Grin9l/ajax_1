<?php
sleep(1);
if ($_POST['name'] == 'admin'){
    echo 'fail';
}
else {
    echo 'Имя '.$_POST['name'].' свободно';
}