<?php
	class Main_model extends CI_Model{
		
		function __construct(){
			parent::__construct();
		}

		function insertNewIdea($nome, $conteudo){
			$sql = "INSERT INTO ideia (nome, conteudo, potencial, inovacao, escalabilidade) VALUES (?,?,0,0,0);";
			$result = $this->db->query($sql, array($nome, $conteudo));
			
			return $result;
		}
		
		function getIdeas(){
			$sql = "SELECT * FROM ideia";
			$query = $this->db->query($sql);
				
			if ($query->num_rows() > 0){
				return $query->result();
			}
		
			return null;
		}
		
		function getIdeaById($id){
			$sql = "SELECT * FROM ideia where id_ideia = ?";
			$query = $this->db->query($sql, array($id));
		
			if ($query->num_rows() > 0){
				return $query->result();
			}
		
			return null;
		}
		
		function insertClick($buttonName){
			$sql = "INSERT INTO clique (botao) VALUES (?);";
			$result = $this->db->query($sql, array($buttonName));
				
			return $result;
		}
	}
?>