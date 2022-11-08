<?php
require_once dirname(dirname(__FILE__)). "/../../../../../../vendor/autoload.php";
$globalConfig = \SimpleSAML\Configuration::getInstance();
$t = new \SimpleSAML\XHTML\Template($globalConfig, 'saml:sp/wrong_authncontextclassref.tpl.php');
$t->show();
