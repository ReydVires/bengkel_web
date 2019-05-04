<b>Prosedur Pengadaan Alat</b><small> Update Data Alat</small>
<?php
echo form_open('pengadaan/edit');
?>
<input type="hidden" value="<?php echo $record['id']?>" name="id">
<input type="hidden" value="<?php echo $record['jadwal']?>" name="jadwal_id">
<table class="table table-bordered">
    <tr>
      <td width="130">Nama Paket</td>
        <td>
          <div class="col-sm-4"><input type="text" name="nama_paket" placeholder="nama paket" class="form-control"
                   value="<?php echo $record['nama_paket']?>"></div>
        </td>
    </tr>
    <tr>
      <td width="130">Unit</td> 
       <td>
        <div class="col-sm-4"><input type="text" name="unit" placeholder="unit" class="form-control"
                   value="<?php echo $record['unit']?>"></div>
       </td>
    </tr>
    <tr>
      <td width="130">Pagu</td> 
       <td>
        <div class="col-sm-4"><input type="text" name="pagu" placeholder="pagu" class="form-control"
                   value="<?php echo $record['pagu']?>"></div>
       </td>
    </tr>
    <tr>
      <td width="130">Tahap</td> 
       <td>
        <div class="col-sm-4"><input type="tahap" name="tahap" placeholder="tahap" class="form-control"
                   value="<?php echo $record['tahap']?>"></div>
       </td>
    </tr>
    <tr>
      <td width="130">Tanggal</td> 
       <td>
        <div class="col-sm-4"><input type="text" name="tanggal" placeholder="tanggal" class="form-control"
                   value="<?php echo $record['tanggal']?>"></div>
       </td>
    </tr>
    <tr>
      <td width="130">Metode</td> 
       <td>
        <div class="col-sm-4"><input type="text" name="metode" placeholder="metode" class="form-control"
                   value="<?php echo $record['metode']?>"></div>
       </td>
    </tr>
    <tr>
      <td width="130">Lokasi</td> 
       <td>
        <div class="col-sm-4"><input type="text" name="lokasi" placeholder="lokasi" class="form-control"
                   value="<?php echo $record['lokasi']?>"></div>
       </td>
    </tr>
    <tr>
      <td width="130">Sumber</td> 
       <td>
        <div class="col-sm-4"><input type="text" name="sumber" placeholder="sumber" class="form-control"
                   value="<?php echo $record['sumber']?>"></div>
       </td>
    </tr>
    <tr>
      <td colspan="2">
        <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('pengadaan','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
      </td>
    </tr>
</table>
</form>