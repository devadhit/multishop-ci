<?php namespace App\Models;

use CodeIgniter\Model;

class m_payment extends Model
{
    protected $table = 'tb_transaksi';

    public function getTransaksi($no_transaksi){
        
        $db = \Config\Database::connect();
        $transaksi = $db->query("SELECT * FROM tb_transaksi WHERE no_transaksi = '$no_transaksi'");
        return $transaksi->getResultArray();
    }
    
    public function getOrder($kode_transaksi){
        
        $db = \Config\Database::connect();
        $transaksi = $db->query("SELECT * FROM tb_jual WHERE kode_transaksi = '$kode_transaksi'");
        return $transaksi->getResultArray();
    }
    
    public function insertTransaksi($no_transaksi, $tgl_transaksi, $total_transaksi, $nama, $kecamatan, $kota, $no_hp, $alamat) {
        $db = \Config\Database::connect();
        $sql = "INSERT INTO tb_transaksi VALUES('$no_transaksi', '$tgl_transaksi', '$total_transaksi', '$nama', '$kecamatan', '$kota', '$no_hp', '$alamat')";
        $db->query($sql);
    }
    
    public function insertOrder($no_transaksi, $kode_barang, $jumlah_jual, $harga_penjualan) {
        $db = \Config\Database::connect();
        $sql = "INSERT INTO `tb_jual` VALUES ('$no_transaksi','$kode_barang','$jumlah_jual','$harga_penjualan')";
        $db->query($sql);
    }

    public function updateBarang($kode_barang, $quantity) {
        $db = \Config\Database::connect();
        $db->query("UPDATE tb_barang SET stok_barang = stok_barang - $quantity WHERE kode_barang = $kode_barang");
    }
    
}

 ?>