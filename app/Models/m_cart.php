<?php namespace App\Models;

use CodeIgniter\Model;

class m_cart extends Model
{
    protected $table = 'tb_barang';

    public function getData()
    {
        $query = $this->db->query('SELECT * FROM tb_barang');
        $data = $query->getResultArray();
        return $data;
    }
    
}

 ?>