<div class="container-fluid">
    <div class="row px-xl-5">
        <form action="/addBarang" method="post" enctype="multipart/form-data">
            <div class="col-lg-12">
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Harga Barang</label>
                            <input type="number" class="form-control" id="harga_barang" name="harga_barang" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Stok barang</label>
                            <input type="number" class="form-control" id="stok_barang" name="stok_barang" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Gambar Barang</label>
                            <input type="file" class="form-control-file" id="gambar_barang" name="gambar_barang" required>
                        </div>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Simpan Data Barang</button>
                </div>
            </div>
        </form>
    </div>
</div>
