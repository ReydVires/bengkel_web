                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Monitoring Peralatan <small>Tambah Data Barang</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('barang/post'); ?>
                                <input type='hidden' value="<?php echo $this->session->userdata('username'); ?>" name='admin_id'>
                                <div class="form-group">
                                    <label>ID Barang (ex: AB001)</label>
                                    <input class="form-control" name="kode" placeholder="id barang">
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
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" active="#">
                                        <?php
                                            $_data = $stat; /*["DIPAKAI", "DIPINJAM", "DIPERBAIKI", "TIDAK TERSEDIA"];*/
                                            for ($i=0; $i < count($_data); $i++) { 
                                                echo "<option value='".$_data[$i]."'>".$_data[$i]."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ID Pengadaan</label>
                                    <select class="form-control" name="pengadaan_id" active="#">
                                        <?php 
                                        foreach ($pengadaan as $p) {
                                            echo "<option value='$p->id'>$p->nama_paket</option>";
                                        }
                                        ?>
                                    </select>
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