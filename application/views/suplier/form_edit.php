<b>Prosedur Pengadaan Alat</b><small> Update Data Alat</small>
<?php
echo form_open('suplier/edit');
?>
<input type="hidden" value="<?php echo $record['id']?>" name="id">
<table class="table table-bordered">
    <tr><td width="130">Nama Suplier</td>
        <td><div class="col-sm-4"><input type="text" name="suplier" placeholder="suplier" class="form-control"
                   value="<?php echo $record['nama']?>"></div>
       </td></tr>
    <tr><td width="130">Kota Suplier</td> 
       <td><div class="col-sm-4"><input type="text" name="asal" placeholder="asal" class="form-control"
                   value="<?php echo $record['asal']?>"></div>
       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('suplier','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>