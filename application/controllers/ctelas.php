<?php 

class ctelas extends CI_Controller{
	
	public function index(){
		redirect('login');
	}
	public function telaLogin(){
		$data = array('title' => "Lista de Tarefas", "lang" => '"pt-br"');
		$this -> load -> view("header",$data);
		$this -> load -> view("telalogin");
		$this -> load -> view("footer");
	}
	public function telaCadastro(){
		$data = array('title' => "Lista de Tarefas", "lang" => '"pt-br"');
		$this -> load -> view("header",$data);
		$this -> load -> view("telaCadastro");
		$this -> load -> view("footer");
	}
	public function telaInicial(){
		$data = array('title' => "Lista de Tarefas", "lang" => '"pt-br"');
		$this -> load -> view("header",$data);
		$this -> load -> view("navbar");
		$this -> load -> view("telainicial");
		$this -> load -> view("footer");
	}
	public function telaAlterar(){
		$data = array('title' => "Lista de Tarefas", "lang" => '"pt-br"');
		$this -> load -> view("header",$data);
		$this -> load -> view("navbar");
		$this -> load -> view("telaalterar");
		$this -> load -> view("footer");
	}
	public function telaConcluidas(){
		$data = array('title' => "Lista de Tarefas", "lang" => '"pt-br"');
		$this -> load -> view("header",$data);
		$this -> load -> view("navbar");
		$this -> load -> view("telaconcluidas");
		$this -> load -> view("footer");
	}

}