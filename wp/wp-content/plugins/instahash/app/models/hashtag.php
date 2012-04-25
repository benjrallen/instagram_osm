<?php

class Hashtag extends MvcModel {

	var $display_field = 'name';
	
	public function after_save($object){
		echo 'Building Cache...';
    MvcDispatcher::dispatch(array("controller" => "admin_pictures", "action" => "rebuild_cache"));
	}
	
}

?>