<?php 
require_once('library/Shoppingcart.php');
chdir(dirname(__DIR__));
define('path','http://localhost/HQbook/'); 
require_once("smarty/libs/Smarty.class.php");
class Smarty_ung_dung extends Smarty{
	public function __construct(){
		parent::__construct();
		$this->setConfigDir('views/connfigs');
		$this->setCacheDir('views/caches');
		$this->setTemplateDir('views/templates');
		$this->setCompileDir('views/templates_c');
		$this->assign('path',path);
	}
}
?>