<?php
$Vtiger_Utils_Log = true;
include_once('vtlib/Vtiger/Module.php');

$products = Vtiger_Module::getInstance('Cars');
//$products->setRelatedList(Vtiger_Module::getInstance('ED'),'ED',Array('add','select'));
$products->setRelatedList(Vtiger_Module::getInstance('MemoAdvice'), 'MemoAdvice',Array('ADD'));


?>