                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Monitoring Peralatan <small>Update Data Barang</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barang/edit'); ?>
                                <input type="hidden" value="<?php echo $record['id']?>" name="id">
                                <div class="form-group">
                                    <label>Nama Alat</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['nama']?>">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" name="stok" value="<?php echo $record['stok']?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga (Rupiah)</label>
                                    <input type="text" class="form-control"  name="harga" placeholder="harga">
                                </div>
                                <div class="form-group">
                                    <label>Suplier</label>
                                    <select name="suplier" class="form-control">
                                        <?php foreach ($suplier as $k) {
                                            // Sesuaikan dengan supply
                                            echo "<option value='$k->username'>$k->nama_lengkap</option>";
                                        } ?>
                                    </select>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('barang','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->