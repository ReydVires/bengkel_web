                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Prosedur Pengadaan Alat <small> Tambah Data Alat</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('suplier/post'); ?>
                                <div class="form-group">
                                    <label>ID Suplier (ex: S001)</label>
                                    <input type="text" name="id" class="form-control" placeholder="id suplier">
                                </div>
                                <div class="form-group">
                                    <label>Nama Suplier</label>
                                    <input type="text" name="suplier" class="form-control" placeholder="nama suplier">
                                </div>
                                <div class="form-group">
                                    <label>Kota Suplier</label>
                                    <input type="text" name="asal" class="form-control" placeholder="kota asal">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('suplier','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->