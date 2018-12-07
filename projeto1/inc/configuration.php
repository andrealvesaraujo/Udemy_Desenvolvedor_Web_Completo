<?php 

session_start();

class Sql {

	public $conn; //Variavel global

	//Função que ocorre quando instancia uma classe(construtor)
	public function __construct(){

		return $this->conn = mysqli_connect("127.0.0.1", "root","", "hcode_shop"); 
		//Quando o sql utiliza a variavel $conn para fazer a conexão com o banco de dados

	}
	public function query($string_query){ //Realiza as query no banco de dados MySql atraves do php

		return mysqli_query($this->conn,$string_query);

	}

	public function select($string_query){
		$result = $this->query($string_query);

		$data = array();
		//Cada linha de result vira um array e salva na variavel row enquanto tiver linha
    	while($row = mysqli_fetch_array($result)) {

    		foreach ($row as $key => $value) {//Key é numero da posição da coluna com o valor $value
    			$row[$key] = utf8_encode($value); //Formatar cada valor utilizando o UTF8
    		}
    		
        	array_push($data, $row);
    	}
    	unset($result);

    	return $data;
	}
	//Função que ocorre quando destroi uma classe
	public function __destruct() { 

		mysqli_close($this->conn);
	}

}
?>