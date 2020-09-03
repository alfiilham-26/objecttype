<?php
class computer{
	public $procesor;
	public $memory;
	
public function cetak(){
	return "$this->procesor, $this->memory";
}
public function __construct($procesor,$memory="12 gb"){
	$this->procesor=$procesor;
	$this->memory=$memory;
}
}

class cetakinfoproduk{
	public function cetakinfo($produk){
		$str="{$produk->procesor},{$produk->memory}";
		return $str;
	}
}
$komputersaya = new computer("core i7","8 gb",);
$infoproduk = new cetakinfoproduk();
echo $komputersaya->cetak();
echo "<br/>";
echo $infoproduk->cetakinfo($komputersaya);

?>