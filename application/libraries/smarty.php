<?php
require_once(APPPATH.'libraries/smarty/libs/Smarty.class.php');
class CI_Smarty extends Smarty{
	public $ci;
	public function __construct(){
		parent::__construct();
		$this->ci = get_instance();
		$this->template_dir = $this->ci->config->item('template_dir');
		$this->compile_dir = $this->ci->config->item('compile_dir');
		$this->cache_dir = $this->ci->config->item('caching_dir');
		$this->config_dir = $this->ci->config->item('config_dir');
// 		$this->template_ext = $this->ci->config->item('template_ext');
// 		$this->caching = $this->ci->config->item('caching');
// 		$this->cache_lifetime = $this->ci->config->item('cache_lifetime');
	}
	
}