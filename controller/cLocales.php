<?php

include_once '../model/localModel.php';

$local = new localModel();
$local->setList(); 
$localJSON=$local->getListJsonString();

echo $localJSON;

?>