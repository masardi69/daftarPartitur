<?php
require('models/NotAngkaModel.php');
require('views/NotAngkaView.php');
class NotAngkaController{
public function index(){
    $notAngka = new NotAngkaModel();
    $tampilNotAngka['NotAngkaView'] = $notAngka->getNotAngka();
}
}
?>