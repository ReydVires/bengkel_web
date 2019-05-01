                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Monitoring Peralatan <small>Update Alat</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php 
                                    echo form_open('barang/edit'); 
                                    $admin_id = $this->session->userdata('username');
                                ?>
                                <input type="hidden" value="<?php echo $record['kode']?>" name="kode">
                                <input type='hidden' value="<?php echo $admin_id ?>" name='admin_id'>
                                <div class="form-group">
                                    <label>Nama Alat</label>
                                    <input type="text" class="form-control" name="nama" value="<?php echo $record['name']?>">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control" active="#">
                                        <?php
                                            $_data = $stat; /*["DIPAKAI", "DIPINJAM", "DIPERBAIKI", "TIDAK TERSEDIA"];*/
                                            for ($i=0; $i < count($_data); $i++) { 
                                                if ($_data[$i] == $record['status']){
                                                    echo "<option selected value='".$_data[$i]."'>".$_data[$i]."</option>";
                                                }
                                                else{
                                                    echo "<option value='".$_data[$i]."'>".$_data[$i]."</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Suplier</label>
                                    <select name="suplier" class="form-control" active="#">
                                        <?php foreach ($suplier as $s) {
                                            // Sesuaikan dengan supply
                                            if ($s->id == $record['suplier_id']){
                                                echo "<option selected value='$s->id'>$s->nama</option>";
                                            }
                                            else {
                                                echo "<option value='$s->id'>$s->nama</option>";
                                            }
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