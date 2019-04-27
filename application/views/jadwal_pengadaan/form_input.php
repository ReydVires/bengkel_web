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
                                    <label>ID Jadwal (ex: 0000001)</label>
                                    <input class="form-control" name="id" placeholder="id jadwal">
                                </div>
                                <div class="form-group">
                                    <label>Tahap</label>
                                    <input class="form-control" name="tahap" placeholder="tahap">
                                </div>
                                <div class="form-group">
                                    <label>Mulai</label>
                                    <input class="form-control" type="date" name="mulai" placeholder="mulai">
                                </div>
                                <div class="form-group">
                                    <label>Sampai</label>
                                    <input class="form-control" type="date" name="sampai" placeholder="sampai">
                                </div>
                                <div class="form-group">
                                    <label>Perubahan</label>
                                    <input class="form-control" name="perubahan" placeholder="perubahan">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('pengadaan','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->