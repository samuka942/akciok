<?php

class file_overrite{
	
	public $f;
	private $file_name;
	private $hatarido;
	private $eleje;
	private $vege;
	private $athenba;
	private $athenbol;
	
	public function __construct($File_name){
		$this->file_name = $File_name;
	}
	
	public function file_setter(){
		$this->f = file_get_contents($this->file_name);
	}
	
	
	public function Hatarido_Setter($hatarido){
		$this->f = str_replace("_hatarido_",$hatarido,$this->f);
	}
	
	public function Utazasi_ido_setter($eleje,$vege){
		$this->f = str_replace("_ido_eleje_",$eleje,$this->f);
		$this->f = str_replace("_ido_vege_",$vege,$this->f);
	}
	
	public function Athen_arak_Setter($athenba,$athenbol){
		$this->f = str_replace("_athenba_",$athenba,$this->f);
		$this->f = str_replace("_athenbol_",$athenbol,$this->f);
	}
	
	public function article_saver(){
		$saver_file = substr($this->file_name,0,stripos($this->file_name,"."))."_kesz.txt";
		fopen($saver_file,"w");
		if(file_put_contents($saver_file,$this->f)){
			echo "A mentés sikeres!";
		}
	}
	
}

?>