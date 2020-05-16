<?php include "header.php"; ?>
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
<i class="fas fa-plus"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="proses.php" method="POST">
    <div  class="input-group flex-nowrap">
    <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Nama data</span>
    </div>
<input type="text" class="form-control" name="nm" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>
<br>

<div class="input-group flex-nowrap">
    <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Tanggal Kadaluarsa</span>
    </div>
<input type="date" class="form-control" name="exp" placeholder="Tanggal" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

<br>
<div  class="input-group flex-nowrap">
    <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">provider</span>
    </div>
<input type="text" class="form-control" name="pvr" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required >
</div>
<!--required-->
<br>
<p>
<input class="btn btn-outline-primary" type="submit" value="Daftar" name="daftar" />
<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
</p>

</form>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>