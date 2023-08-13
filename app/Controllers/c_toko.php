<?php namespace App\Controllers;

use App\models\m_toko;

class c_toko extends BaseController
{

    public function addBarang()
    {
        $tb_barang = new m_toko();
        $nama_barang = $this->request->getPost('nama_barang');
        $harga_barang = $this->request->getPost('harga_barang');
        $stok_barang = $this->request->getPost('stok_barang');
        $gambar_barang = $this->request->getPost('gambar_barang');

        $filetype = explode('.',$_FILES["gambar_barang"]["name"]);
        $filename = "gambar_".$nama_barang.'.'.$filetype[count($filetype)-1];
        $tempname = $_FILES["gambar_barang"]["tmp_name"];
        $folder = "gambar_barang/".$filename;

        if (move_uploaded_file($tempname,$folder)) {
            if (file_exists($filename)) {
                unlink('gambar_barang/'.$filename);
            }
            $tb_barang->inputBarang($nama_barang,$harga_barang,$stok_barang,$filename);
        }

        echo '<script>
            window.location="' . base_url('displayInput') .'"
        </script>';
    }

    public function updateDataBarang($id)
    {
        $tb_barang = new m_toko();
        $data = $tb_barang->getDataBarang($id);

        $nama_barang = $this->request->getPost('nama_barang') ?: $data['nama_barang'];
        $harga_barang = $this->request->getPost('harga_barang') ?: $data['harga_barang'];
        $stok_barang = $this->request->getPost('stok_barang') ?: $data['stok_barang'];

        $gambar_barang = $data['gambar_barang'];
        if (!empty($_FILES["gambar_barang"]["name"])) {
            $filetype = explode('.', $_FILES["gambar_barang"]["name"]);
            $filename = "gambar_" . $nama_barang . '.' . $filetype[count($filetype) - 1];
            $tempname = $_FILES["gambar_barang"]["tmp_name"];
            $folder = "gambar_barang/" . $filename;

            if (move_uploaded_file($tempname, $folder)) {
                if (file_exists($filename)) {
                    unlink('gambar_barang/' . $filename);
                }
                $gambar_barang = $filename;
            }
        }

        $tb_barang->updateDataBarang($id, $nama_barang, $harga_barang, $stok_barang, $gambar_barang);

        return redirect()->to('dashboard');
    }


    public function deleteDataBarang($id)
    {
        $tb_barang = new m_toko();
        $tb_barang->deleteData($id);
        return redirect()->to('dashboard');
    }

    public function displayDataInput()
    {
        $data['content_view'] ="v_barang_input.php";
        return view('v_template2',$data);
    }

    public function displayDataUpdate($id)
    {
        $tb_barang = new m_toko();
        $data['data'] = $tb_barang->getDataBarang($id);
        $data['content_view'] ="v_barang_edit.php";
        return view('v_template2', $data);
    }

    public function display()
    {
        $tb_barang = new m_toko();
        $dataToko['tb_barang'] = $tb_barang->getData();
        $dataToko['content_view'] ="v_barang_data.php";
        return view('v_template2',$dataToko);
    }

    public function displayCart()
    {
        $data['content_view'] ="v_cart.php";
        return view('v_template2',$data);
    }

    public function addCart($id)
	{
		$model = new m_toko();
        $productByCode = $model->getByCode($id);
        $itemArray = array($productByCode[0]->id
            => array(
                'nama_barang'=>$productByCode[0]->nama_barang, 
                'id'=>$productByCode[0]->id, 
                'stok_barang'=>$productByCode[0]->stok_barang, 
                'quantity'=>1, 
                'harga_barang'=>$productByCode[0]->harga_barang, 
                'gambar_barang'=>$productByCode[0]->gambar_barang
            )
        );

        if(session()->get('cart_item')) {
            $ada = 0;
            foreach(session()->get('cart_item') as $k => $v) {
                if($productByCode[0]->id == session()->get('cart_item')[$k]["id"]) {
                    $_SESSION['cart_item'][$k]["quantity"] += 1;
                    $ada = 1;
                    break;
                }
            }
            if($ada == 0){
                session()->set('cart_item', array_merge(session()->get('cart_item'), $itemArray));
            }
        } else {
            session()->set('cart_item', $itemArray);
        }

        return redirect()->to('./');
	}

	public function plusCart($id){
        foreach(session()->get('cart_item') as $k => $v) {
            if(session()->get('cart_item')[$k]["id"] == $id){
                if((session()->get('cart_item')[$k]["quantity"]+1) < session()->get('cart_item')[$k]["stok_barang"]){
                    $_SESSION["cart_item"][$k]["quantity"] += 1;                    
                }
            }
        }
        return redirect()->to('./cart');
    }

    public function minusCart($id){
        foreach(session()->get('cart_item') as $k => $v) {
            if(session()->get('cart_item')[$k]["id"] == $id){
                if((session()->get('cart_item')[$k]["quantity"]-1) != -1){
                    $_SESSION["cart_item"][$k]["quantity"] -= 1;
                }
            }
        }
        return redirect()->to('./cart');
    }

    public function removeCart($id){
        foreach(session()->get('cart_item') as $k => $v) {
            if(session()->get('cart_item')[$k]["id"] == $id){
                unset($_SESSION["cart_item"][$k]);                    
            }
        }
        return redirect()->to('./cart');        
    }   

    public function removeAllCart(){
        session()->destroy();
        return redirect()->to('./cart');        
    }

}

?>