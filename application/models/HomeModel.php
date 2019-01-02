<?php defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{

    public function getAlldt()
    {
        $this->datatables->select('id_tbl_usuarios,nome_tbl_usuarios,senha_tbl_usuarios');
        $this->datatables->from('tbl_usuarios');
        $this->datatables->add_column('acao',
            '<button class="btn btn-success" data-id="$1">ver</button>
             <button class="btn btn-warning" data-id="$1">editar</button>
             <button class="btn btn-danger" data-id="$1">excluir</button>',
            'id_tbl_usuarios');
        return $this->datatables->generate();

    }
}

/* End of file ModelName.php */
