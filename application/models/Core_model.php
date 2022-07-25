<?php

defined('BASEPATH') OR exit('Acesso não permitido');

class Core_model extends CI_Model{

    public function get_all($table = null, $condition = null){
        //Se foi passado a tabela e se a tabela existe
        if($table && table_exists($table)){
            //Se foi passado um array de condições
            if(is_array($condition)){
                $this->db->where($condition);
            }
            return $this->db->get($table)->result();
        }
        else{
            return false;
        }
    }


    public function get_by_id($table = null, $condition = null){
        //Se foi passado a tabela, se a tabela existe e Se foi passado um array de condições
        if($table && table_exists($table) && is_array($condition)){
            $this->db->where($condition);
            $this->db->limit(1);
            return $this->db->get($table)->row();
        }
        else{
            return false;
        }
    }   


    public function insert($table = null, $data = null){
        //Se foi passado a tabela, se a tabela existe e Se foi passado um array de condições
        if($table && table_exists($table) && is_array($data)){
            $this->db->insert($table, $data);
            //Se alguma linha foi afetada no banco de dados
            if($this->db->affected.rows() > 0){
                $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
            }
            else{
                $this->session->set_flashdata('error', 'Erro ao salvar');
            }
        }
        else{
            return false;
        }
    }   


    public function update($table = null, $data = null, $condition = null){
        //Se foi passado a tabela, se a tabela existe,se foi passado um array de dados, e se foi passado um array de condições  
        if($table && table_exists($table) && is_array($data) && is_array($condition)){
            //Se foi atualizado
            if($this->db->delete($table, $condition)){
                $this->session->set_flashdata('sucesso', 'Dados deletados com sucesso');
            }
            else{
                $this->session->set_flashdata('error', 'Erro ao deletar');
            }
        }
        else{
            return false;
        }
    }


    public function delete($table = null, $condition = null){
        //Se foi passado a tabela, se a tabela existe e Se foi passado um array de condições
        if($table && table_exists($table) && is_array($data)){
            $this->db->insert($table, $data);
            //Se alguma linha foi afetada no banco de dados
            if($this->db->affected.rows() > 0){
                $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
            }
            else{
                return false;
            }
    }
}
}