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
                                <?php echo form_open('pengadaan/post'); ?>
                                <div class="form-group">
                                    <label>ID Pengadaan (ex: P0001)</label>
                                    <input type="text" name="id" class="form-control" placeholder="id pengadaan">
                                </div>
                                <div class="form-group">
                                    <label>Nama Paket</label>
                                    <input type="text" name="nama_paket" class="form-control" placeholder="nama paket">
                                </div>
                                <div class="form-group">
                                    <label>Unit</label>
                                    <input type="text" name="unit" class="form-control" placeholder="unit">
                                </div>
                                <div class="form-group">
                                    <label>Pagu</label>
                                    <input type="text" name="pagu" class="form-control" placeholder="pagu">
                                </div>
                                <div class="form-group">
                                    <label>Tahap</label>
                                    <input type="text" name="tahap" class="form-control" placeholder="tahap">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" placeholder="tanggal">
                                </div>
                                <div class="form-group">
                                    <label>Metode</label>
                                    <input type="text" name="metode" class="form-control" placeholder="metode">
                                </div>
                                <div class="form-group">
                                    <label>Lokasi</label>
                                    <input type="text" name="lokasi" class="form-control" placeholder="lokasi">
                                </div>
                                <div class="form-group">
                                    <label>Sumber</label>
                                    <input type="text" name="sumber" class="form-control" placeholder="sumber">
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