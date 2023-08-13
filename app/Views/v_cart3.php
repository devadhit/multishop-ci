    <section>
        <div class="shopping-cart section">
            <div class="container">
                <div class="row px-xl-5">
                    <div class="col-lg-8 table-responsive mb-5">
                        <?php
                        $total_quantity = 0;
                        $total_price = 0;

                        if (session()->get('cart_item')) {
                        ?>
                            <table class="table table-light table-borderless table-hover text-center mb-0">
                                <thead class="thead-dark">
                                    <tr class="main-hading">
                                        <th>PRODUCT</th>
                                        <th>NAME</th>
                                        <th class="text-center">PRICE</th>
                                        <th class="text-center">QUANTITY</th>
                                        <th class="text-center">TOTAL</th>
                                        <th class="text-center"><i class="ti-trash remove-icon"></i>REMOVE</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <?php
                                    foreach (session()->get('cart_item') as $item) {
                                        $item_price = $item["quantity"] * $item["harga_barang"];
                                    ?>
                                        <tr>
                                            <!-- gambar -->
                                            <td class="image" class="align-middle" data-title="No"><img src="<?= base_url('gambar_barang/' . $item['gambar_barang']); ?>" width="100" height="100" alt="#"></td>
                                            <!-- nama barang -->
                                            <td class="align-middle">
                                                <a><?php echo $item['nama_barang']; ?>
                                            </td>
                                            <td class="align-middle" class="price" data-title="Price"><span><?php echo $item['harga_barang']; ?></span></td>
                                            <td class="align-middle">
                                                <div class="input-group" width="100px">
                                                    <div class="button minus">
                                                        <a href="/cart/minus/<?php echo $item['kode_barang']; ?>" type="button" class="btn btn-primary btn-number" data-type="minus"><i class="fa fa-minus"></i></a>
                                                    </div>
                                                    <input type="hidden" size="2" name="kode" class="input-number" data-min="1" data-max="100" value="<?php echo $item['kode_barang']; ?>">
                                                    <input type="text" size="2" name="ganti" class="input-number" data-min="1" data-max="100" value="<?php echo $item['quantity']; ?>">
                                                    <div class="button plus">
                                                        <a href="/cart/plus/<?php echo $item['kode_barang']; ?>" type="button" class="btn btn-primary btn-number" data-type="plus"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle" class="total-amount" data-title="Total"><span><?php echo $item["quantity"] * $item["harga_barang"] ?></span></td>
                                            <td class="align-middle" class="action" data-title="Remove"><a href="/cart/remove/<?php echo $item["kode_barang"]; ?>"><i class="fa fa-trash remove-icon"></i></a></td>
                                        </tr>
                                    <?php
                                        $total_quantity += $item["quantity"];
                                        $total_price += ($item["harga_barang"] * $item["quantity"]);
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <button class="btn btn-block btn-danger font-weight-bold my-3 py-3"><a href="/cart/removeAll">Hapus Seluruh Cart</a></button>
                        <?php
                        } else {
                        ?>
                            <div class="no-records">Your Cart is Empty</div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <form class="mb-30" action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Apply Coupon</button>
                                </div>
                            </div>
                        </form>
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                        <div class="bg-light p-30 mb-5">
                            <div class="border-bottom pb-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h6>Subtotal</h6>
                                    <h6>Rp. <?php echo $total_price ?></h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-medium">Shipping</h6>
                                    <h6 class="font-weight-medium">Free</h6>
                                </div>
                            </div>
                            <div class="pt-2">
                                <div class="d-flex justify-content-between mt-2">
                                    <h5>Total</h5>
                                    <h5>Rp. <?php echo $total_price ?></h5>
                                </div>
                                <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>