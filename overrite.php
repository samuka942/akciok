<?php

class file_overrite($file_name){
	
	private $f = file_get_contents($file_name);
	
	public Hatarido_Setter($hatarido){
		$f = str_replace("_hatarido_",$hatarido,$f);
	}
	
	public Utazasi_ido_setter($eleje,$vege){
		$f = str_replace("_ido_eleje_",$eleje,$f);
		$f = str_replace("_ido_vege_",$vege,$f);
	}
	
	public Athen_arak_Setter($athenba="€19",$athenbol="€41"){
		$f = str_replace("_athenba_",$athenba,$f);
		$f = str_replace("_athenbol_",$athenbol,$f);
	}
	
}

?>