<?php $no_transaksi = rand();
session()->set('no_transaksi', $no_transaksi);
?>

<?php
$tgl_transaksi = date("Y-m-d");
$total_quantity = 0;
$total_price = 0;

if (session()->get('cart_item')) {
    foreach (session()->get('cart_item') as $item) {
        $harga_penjualan = $item["quantity"] * $item["harga_barang"];
        $c =  $item['quantity'];
        $total_price = $total_price + $harga_penjualan;
        $total_quantity = $total_quantity + $c;
    }
} ?>

<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <form action="/payment" method="post" enctype="multipart/form-data">
            <div class="col-lg-12">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Formulir Data Diri</span></h5>
                <input type="hidden" name="no_transaksi" value=<?php echo $no_transaksi; ?>>
                <input type="hidden" name="total_transaksi" value=<?php echo $total_price; ?>>
                <input type="hidden" name="tgl_transaksi" value=<?php echo $tgl_transaksi; ?>>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Nama Kecamatan">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Kota</label>
                            <input type="text" class="form-control" name="kota" placeholder="Nama Kota">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Nama Kota">
                        </div>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </form>
    </div>
</div>