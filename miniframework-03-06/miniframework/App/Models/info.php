<?php
    namespace App\Models;

    use MF\Model\Model;
    class Info extends Model{
        
        public function getInformacoes(){
            //return array('Caderno','Mesa','Cadeira');
            $query = "select id, titulo, descricao from tb_info";
            return $this->db->query($query)->fetchAll();
        }
    }
?>