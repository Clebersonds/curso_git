<?php

class teste{

public $nome;

public function setNome($n){
    $this->nome = $n;
}


public function getNome(){

   return $nome = $this->nome;

}

}

$ob = new teste();
$meto = $ob->setNome('GitHub');
$meto = $ob->getNome();

echo $meto;

?>
