<?php

class file_overrite(){
	
	private $file_name;
	private $hatarido;
	private $eleje;
	private $vege;
	private $athenba;
	private $athenbol;
	
	public function file_setter($file_name){
		$f = file_get_contents($file_name);
	}
	
	
	public function Hatarido_Setter($hatarido){
		$f = str_replace("_hatarido_",$hatarido,$f);
	}
	
	public function Utazasi_ido_setter($eleje,$vege){
		$f = str_replace("_ido_eleje_",$eleje,$f);
		$f = str_replace("_ido_vege_",$vege,$f);
	}
	
	public function Athen_arak_Setter($athenba="€19",$athenbol="€41"){
		$f = str_replace("_athenba_",$athenba,$f);
		$f = str_replace("_athenbol_",$athenbol,$f);
	}
	
}

?>