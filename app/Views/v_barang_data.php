<!DOCTYPE html>
<html lang="en">

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Available Products</span></h2>
<div class="row px-xl-5">
<?php
foreach ($tb_barang as $data) { ?>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden max-q">
                <img class="img-fluid" src="<?= base_url('gambar_barang/' . $data['gambar_barang']); ?>" alt="" style="display: block; margin: 0 auto; max-width: 100%; max-height: 100%;">
                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href="/cart/add/<?php echo $data['id']; ?>"><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="/displayUpdate/<?php echo $data['id']; ?>"><i class="fa fa-pen"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="/deleteBarang/<?php echo $data['id']; ?>"><i class="fa fa-trash"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-12 text-truncate" href=""><?php echo $data['nama_barang']; ?></a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <a>
                        <h5>Rp. <?php echo $data['harga_barang']; ?></h5>
                    </a>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <a>
                        <h5>Stok Barang: <?php echo $data['stok_barang']; ?></h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</div>
</div>
</html>