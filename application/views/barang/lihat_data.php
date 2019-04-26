                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Pengadaan Alat
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('barang/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Alat</th>
                                                <th>Stok</th>
                                                <th>Harga (Satuan)</th>
                                                <th>Suplier</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama ?></td>
                                                <td><?php echo $r->stok ?></td>
                                                <td><?php echo 'Rp.'.$r->harga ?></td>
                                                <td><?php echo $r->sup ?></td>
                                                <td class="center">
                                                    <?php echo anchor('barang/edit/'.$r->id,'Edit'); ?> | 
                                                    <?php echo anchor('barang/delete/'.$r->id,'Delete'); ?>
                                                </td>
                                            </tr>
                                        <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->


