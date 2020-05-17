<?php

require __DIR__ . '../../vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir('../templates')
    ->setCacheDir('../cache')
    ->setCompileDir('../templates_c')
    ->setConfigDir('../configs');
$smarty->display('index.tpl');
