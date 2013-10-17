<?php

/**
 * 自定义回复
 */
class Reply extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->smarty->display("admin/reply/setreply.html");
    }

    public function AddText() {        
        $this->smarty->display("admin/replyadd/text.html");
    }

    public function AddMedia() {
        $this->smarty->display("admin/replyadd/media.html");
    }

}
