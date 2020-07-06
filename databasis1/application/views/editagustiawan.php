<?php foreach ($agustiawan as $agn) { ?>
<div class="container">
<form method="post" action="<?php echo base_url().'index.php/agustiawan/update'; ?>">
<!-- Modal -->

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-md-2">NPM</label>
          <div class="col-md-10">
            <input type="hidden" name="id" value="<?php echo $agn->id ?>" class="form-control">
            <input type="text" name="npm" value="<?php echo $agn->npm ?>" class="form-control" placeholder="NIM">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2">Nama</label>
          <div class="col-md-10">
            <input type="text" name="nama" value="<?php echo $mhs->nama ?>"class="form-control" placeholder="Nama Lengkap">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2">Jenis Kelamin</label>
          <div class="col-md-10">
            <div class="form-check">
  <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Laki-Laki">
  <label class="form-check-label" for="exampleRadios2">
    Laki-Laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
  <label class="form-check-label" for="exampleRadios2">
    Perempuan
  </label>
</div>
</div>
</div>
<div class="form-group row">
  <label class="col-md-2">Program Studi</label>
  <div class="col-md-10">
  <select class="form-control" id="exampleFormControlSelect1" name="prodi">
      <option><?php echo $agn->prodi ?></option>
      <option>Teknik Informatika</option>
      <option>Teknik Sipil</option>
      </select>
  </div>
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</form>
</div>
<?php } ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>