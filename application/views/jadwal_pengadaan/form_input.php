                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Update Jadwal Pengadaan <small>Tambah Data</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barang/post'); ?>
                                <div class="form-group">
                                    <label>ID Barang (ex: AB00)</label>
                                    <input class="form-control" name="id" placeholder="id barang">
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input class="form-control" name="nama" placeholder="nama barang">
                                </div>
                                <div class="form-group">
                                    <label>Suplier</label>
                                    <select name="suplier" class="form-control">
                                        <?php foreach ($suplier as $k) {
                                            // Sesuaikan dengan supply
                                            echo "<option value='$k->id'>$k->nama</option>";
                                            
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input class="form-control" name="stok" placeholder="stok">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input class="form-control" name="harga" placeholder="harga">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->