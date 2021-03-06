                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Prosedur Pengadaan Alat
                        </h2>
                    </div>
                </div>
                
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo anchor('suplier/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Suplier</th>
                                                <th>Asal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama ?></td>
                                                <td><?php echo $r->asal ?></td>
                                                <td class="center">
                                                    <?php echo anchor('suplier/edit/'.$r->id,'<span class="fa fa-pencil"> ') ?> | 
                                                    <?php echo anchor('suplier/delete/'.$r->id,' <span class="fa fa-trash-o">') ?>
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
