<?php namespace App\Controllers;

use App\models\m_payment;
use App\models\m_toko;

class c_payment extends BaseController
{
    public function displayPayment()
    {
        $data['content_view'] ="v_checkout.php";
        return view('v_template2',$data);
    }

    public function invoice(){
        $model = new m_payment();
        $data =[ 
            'tb_transaksi'    => $model->getTransaksi(session()->get('no_transaksi')),
            'tb_jual'    => $model->getOrder(session()->get('kode_transaksi')),
            'content_view' => "/v_invoice.php"
           ];
   
           return view("/v_template2", $data);  
    }

    public function payment(){
        $model = new m_payment();
        $modelPayment = new m_toko();
        $no_transaksi = $this->request->getPost('no_transaksi');
        if($this->request->getPost('tgl_transaksi') != null){
            $tgl_transaksi = $this->request->getPost('tgl_transaksi');
            echo $tgl_transaksi;
        }
		$nama = $this->request->getPost('nama');
		$kecamatan = $this->request->getPost('kecamatan');
        $kota = $this->request->getPost('kota');
        $no_hp = $this->request->getPost('no_hp');
        $alamat = $this->request->getPost('alamat');
        $total_transaksi = $this->request->getPost('total_transaksi');
		$model->insertTransaksi($no_transaksi, $tgl_transaksi, $total_transaksi, $nama, $kecamatan, $kota, $no_hp, $alamat);


		if(session()->get('cart_item')){
			foreach (session()->get('cart_item') as $item){
                $kode_barang =  $item['kode_barang']; 
				$harga_penjualan = $item["quantity"]*$item["harga_barang"];
				$item_qty  =  $item['quantity']; 

                $model->insertOrder($no_transaksi, $kode_barang, $item_qty, $harga_penjualan);
                $modelPayment->updateBarang($kode_barang, $item_qty);
         }
        } 
        
        echo '<script>
                window.location="'.base_url('invoice').'"
            </script>';
        }
}
?>