<?php namespace App\Models;

use CodeIgniter\Model;

class m_toko extends Model
{
    protected $table = 'tb_barang';
    protected $primaryKey = "id";

    public function getData()
    {
        $query = $this->db->query('SELECT * FROM tb_barang');
        $data = $query->getResultArray();
        return $data;
    }

    public function getDataBarang($id)
    {
        return $this->find($id);
    }

    public function getByCode($id) {
        $db = \Config\Database::connect();
        $data = $db->query("SELECT * FROM tb_barang WHERE id= '$id' ");
        return $data->getResult();
    }

    public function updateBarang($id, $quantity) {
        $db = \Config\Database::connect();
        $db->query("UPDATE tb_barang SET stok_barang = stok_barang - $quantity WHERE id = $id");
    }

    public function inputBarang($nama_barang, $harga_barang, $stok_barang, $gambar_barang)
    {
        $db = \Config\Database::connect();

        $db->query("INSERT INTO tb_barang VALUES ('$nama_barang', $harga_barang, $stok_barang, '$gambar_barang')");
    }

    public function updateDataBarang($id, $nama_barang, $harga_barang, $stok_barang, $gambar_barang)
    {
        $db = \Config\Database::connect();
        $db->table('tb_barang')
            ->where('id', $id)
            ->set([
                'nama_barang' => $nama_barang,
                'harga_barang' => $harga_barang,
                'stok_barang' => $stok_barang,
                'gambar_barang' => $gambar_barang
            ])
            ->update();
    }    

    public function deleteData($id)
    {
        $db = \Config\Database::connect();
        $db->query("DELETE FROM tb_barang WHERE id = '$id'");
    }
    
    
}
