<?php
//+------------------------------------------------------------------+
//|　クラス記号:IH12A621　出席No:21
//|　氏名: 河野純也
//|　課題No:08　　課題名:会員登録システム
//+------------------------------------------------------------------+

class FileUtil {

	public function __construct($count_file_path,$data_file_path){
		$this->count_file_path = $count_file_path;
		$this->data_file_path = $data_file_path;
	}

	/**
	 *	set_count
	 *	カウントをファイルに書き込む
	 *
	 *	@params { int } $count
	 */
	private function set_count($count){
		$fp = fopen($this->count_file_path, 'wb');
		fwrite($fp,$count);
		fclose($fp);
	}

	/**
	 *	get_current_count
	 *	現在の会員数を取り出す
	 *
	 *	@return { int } $count
	 */
	private function get_current_count(){
		$fp = fopen($this->count_file_path,"r");
		$count = fread($fp,filesize($this->count_file_path));
		fclose($fp);

		return $count;
	}

	/**
	 *	increment_counter
	 *	現在の会員数を取り出して+1をして同じファイルに書き込む
	 */
	private function increment_counter(){
		$count = $this->get_current_count();
		$count += 1;
		$this->set_count($count);
	}

	/**
	 *	get_zero_cuppressed_id
	 *	会員のIDを0サプレスして返す
	 *
	 *	@return { string } $id
	 */
	public function get_zero_suppressed_id(){
		$id = $this->get_current_count();
		$id = str_pad($id, 7, '0', STR_PAD_LEFT);
		return $id;
	}

	/**
	 *	set_consumer_data
	 *	会員情報を書き込む
	 *
	 *	@params { array } $consumer_data
	 */
	public function set_consumer_data($consumer_data){
		$this->increment_counter();
		$id = $this->get_zero_suppressed_id();

		$write_str = [$id,$consumer_data["name"],$consumer_data["postal_code"],$consumer_data["address"],$consumer_data["tel"]];
		if(is_writable($this->data_file_path)){
			$fp = fopen($this->data_file_path, 'a');
			fwrite($fp,implode(',',$write_str)."\n");
		}else{
			$fp = fopen($this->data_file_path, 'w');
			fwrite($fp,implode(',',$write_str));
		}
		fclose($fp);

	}

}