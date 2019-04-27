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
                                                <td colspan="8">Nama Paket <span>Detail</span></td>
                                            </tr>
                                            <tr>
                                                <td>Unit</td>
                                            </tr>
                                            <tr>
                                                <td>Pagu</td>
                                            </tr>
                                            <tr>
                                                <td>Tahap</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal</td>
                                            </tr>
                                            <tr>
                                                <td>Metode</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                            </tr>
                                            <tr>
                                                <td>Jadwal</td>
                                            </tr>
                                            <tr>
                                                <td>Sumber</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <tr class="center">
                                                    <?php echo anchor('pengadaan/edit/'.$r->id,'Edit'); ?> | 
                                                    <?php echo anchor('pengadaan/delete/'.$r->id,'Delete'); ?>
                                                </tr>
                                                <tr><?php echo $no ?></tr>
                                                <tr><?php echo $r->nama_paket ?></tr>
                                                <tr><?php echo $r->unit ?></tr>
                                                <tr><?php echo $r->pagu ?></tr>
                                                <tr><?php echo $r->tahap ?></tr>
                                                <tr><?php echo $r->tanggal ?></tr>
                                                <tr><?php echo $r->metode ?></tr>
                                                <tr><?php echo $r->lokasi ?></tr>
                                                <tr class="center"> <?php echo anchor('pengadaan/jadwal/'.$r->id,'Lihat Jadwal'); ?> </tr>
                                                <tr><?php echo $r->sumber ?></tr>
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
