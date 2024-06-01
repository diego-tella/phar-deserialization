<?php

class AnyClass {
	public $data = null;
	public function __construct($data) {
		$this->data = $data;
	}
	
	function __destruct() { //to execute command when we quit the class! Let's use this to create a backup of the files!
		system($this->data);
	}
}

echo '<img src="data:image/png;base64,'.base64_encode(file_get_contents($_GET['file'])).'"/>';

$myClass = new AnyClass("/tmp/backupImg.sh");
