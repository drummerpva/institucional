<?php
    class Portfolio extends Model{
        public function getTrabalhos($n = null){
            $array = array();
            $sql = $this->db->prepare("SELECT * FROM portfolio ".((!empty($n)) ? "LIMIT ".$n : ""));
            $sql->execute();
            if($sql->rowCount()>0){
                $array = $sql->fetchAll();
            }
            return $array;
        }
    }