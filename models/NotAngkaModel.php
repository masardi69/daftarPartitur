<?php
require('config/connection.php');
class NotAngkaModel{
public function getNotAngka() {
    global $con;
    $sql = "select * from not_angka";
    $result = $con -> query($sql);
    return $result;
}
public function idNotAngka(){
    
}

}

?>