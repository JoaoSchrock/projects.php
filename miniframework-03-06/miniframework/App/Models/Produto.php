<?php
    namespace App\Models;
    use MF\Model\Model;
    class Produto extends Model{
    
        public function getProdutos(){
            //return array('Caderno','Mesa','Cadeira');
            $query = "select id, descricao, preco from tb_produtos";
            return $this->db->query($query)->fetchAll();
        }
    }
?>