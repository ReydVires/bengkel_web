                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Monitoring Peralatan
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
                                <!-- <div class="small-box">
                                    <span>
                                        <input type="button" name="dipakai" value="dipakai" class="button" onclick="ButtonClick_Test"></input>
                                    </span>
                                    <span>
                                        <input type="button" name="diperbaiki" value="diperbaiki" class="button" onclick="ButtonClick_Test"></input>
                                    </span>
                                    <span>
                                        <input type="button" name="rusak" value="rusak" class="button" onclick="ButtonClick_Test"></input>
                                    </span>
                                    <span>
                                        <input type="button" name="disewakan" value="disewakan" class="button" onclick="ButtonClick_Test"></input>
                                    </span>
                                </div> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Alat</th>
                                                <th>Status</th>
                                                <th>Suplier</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($record->result() as $r) { ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->name ?></td>
                                                <td><?php echo $r->status ?></td>
                                                <td><?php echo $r->sup ?></td>
                                                <td class="center">
                                                    <?php echo anchor('barang/edit/'.$r->kode,'<span class="fa fa-pencil"> ') ?> | 
                                                    <?php echo anchor('barang/delete/'.$r->kode,' <span class="fa fa-trash-o">') ?>
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

<style>
    .button {
      border: none;
      color: white;
      padding: 15px 25px;
      text-align: center;
      font-size: 16px;
      cursor: pointer;
      background-color: #3C6E71;
    }
    .small-box {
        display: flex;
        justify-content: flex-start;
        flex-flow: row wrap;
        margin-bottom: 16px;

    }
    .button:hover {
      background-color: #2C5254;
    }
</style>

<script type="text/javascript">
    var table = $('dataTables_filter').DataTable();
 
    // #myInput is a <input type="text"> element
    
    function ButtonClick_Test()
    {
        if (value = dipakai) {
            $('dipakai').on( 'keyup', function () {
                table.search( this.value ).draw();
            } );
        } else if (value = diperbaiki) {
            $('diperbaiki').on( 'keyup', function () {
                table.search( this.value ).draw();
            } );
        } else if (value = rusak) {
            $('rusak').on( 'keyup', function () {
                table.search( this.value ).draw();
            } );
        } else if (value = disewakan) {
            $('disewakan').on( 'keyup', function () {
                table.search( this.value ).draw();
            } );
        }
        
    }
</script>


