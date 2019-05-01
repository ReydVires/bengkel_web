                <script type="text/javascript">
                    $('.header').click(function(){
                    $(this).find('span').text(function(_, value){return value=='-'?'+':'-'});
                        $(this).nextUntil('tr.header').slideToggle(100, function(){
                        });
                    });
                </script>
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
                                 <?php echo anchor('pengadaan/post','Tambah Data',array('class'=>'btn btn-danger btn-sm')) ?>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr class="header">
                                                <th>No.</th>
                                                <th>Nama Paket</th>
                                                <th>Unit</th>
                                                <th>Pagu</th>
                                                <th>Tahap</th>
                                                <th>Tanggal</th>
                                                <th>Metode</th>
                                                <th>Lokasi</th>
                                                <th>Jadwal</th>
                                                <th>Sumber</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_paket ?></td>
                                                <td><?php echo $r->unit ?></td>
                                                <td><?php echo $r->pagu ?></td>
                                                <td><?php echo $r->tahap ?></td>
                                                <td><?php echo $r->tanggal ?></td>
                                                <td><?php echo $r->metode ?></td>
                                                <td><?php echo $r->lokasi ?></td>
                                                <td class="center"> <?php echo anchor('pengadaan/jadwal/'.$r->id,'Menuju Jadwal'); ?> 
                                                <td><?php echo $r->sumber ?></td>
                                                <td class="center">
                                                    <?php echo anchor('pengadaan/edit/'.$r->id,'<span class="fa fa-pencil">') ?> | 
                                                    <?php echo anchor('pengadaan/delete/'.$r->id,' <span class="fa fa-trash-o">') ?>
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
