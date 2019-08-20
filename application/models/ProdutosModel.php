<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdutosModel extends CI_Model
{

    public function getProdutos()
    {
        // PEGANDO TODAS AS INFORMAÇÕES DO BANCO
        $query = $this->db->get('produtos');
        return $query->result();
    }

}

?>
