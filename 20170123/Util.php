<?php

class Util {

	public function __construct($filename){
		$this->filename = $filename;
		$this->chats = [];
	}

	public function convertEscape($name,$text){
		$name = htmlspecialchars($name,ENT_QUOTES);
		$text = $this->convertEOL(htmlspecialchars($text,ENT_QUOTES));
		return [$name,$text];
	}

	private function convertEOL($string, $to = "<br/>"){
		return preg_replace("/\r\n|\r|\n/", $to, $string);	
	}

	public function fwrite($write_data){
		if(is_writable($this->filename)){
			$fp = fopen($this->filename, 'a');
			fwrite($fp,"\n".implode(',',$write_data));
		}else{
			$fp = fopen($this->filename, 'w');
			fwrite($fp,implode(',',$write_data));
		}
		fclose($fp);
	}

	public function fread(){
		$fp = fopen($this->filename,"r");
		$content = fread($fp,filesize($this->filename));
		fclose($fp);

		return $content;
	}

	public function setChatData($chat_data_array){
		foreach($chat_data_array as $chat_data){
			$data = explode(",",$chat_data);
			$this->chats[] = array(
				"name" => $data[0],
				"text" => $data[1]
			);
		}
	}

	public function getChatData(){
		return $this->chats;
	}

}