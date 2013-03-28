<?php
class CLICreateMapping extends DataObject {
	public function requireDefaultRecords() {
		global $_FILE_TO_URL_MAPPING;
		if(isset($_FILE_TO_URL_MAPPING)) return;
		if(file_exists(BASE_PATH."/_ss_environment.php")) return;
		if(!Director::absoluteBaseURL()) return;
		if(!is_writable(BASE_PATH)) return;
		
		$path = realpath(BASE_PATH);
		$url = Director::absoluteBaseURL();
		
		file_put_contents(BASE_PATH."/_ss_environment.php", "<?php\n\$_FILE_TO_URL_MAPPING['{$path}'] = '{$url}';");
	}
	
	public function requireTable() { 
		DB::dontRequireTable($this->class); 
	}
}
