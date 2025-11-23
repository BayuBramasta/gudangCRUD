<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="komputer/edit.php">
          <div class="form-floating mb-3">
            <input type="text" class="brand form-control" id="floatingInput" placeholder="brand" name="brand" required>
            <label for="floatingInput">Nama Brand</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="model form-control" id="floatingInput" placeholder="model" name="model" required>
            <label for="floatingInput">Model</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="supplier" required>
              <option value="" class="supplier" selected></option>
              <?php 
                $gSupplier = mysqli_query($conn, "SELECT id , name FROM tb_supplier");
                while($supplier = mysqli_fetch_array($gSupplier))
                {
              ?>
              <option value="<?=$supplier['id'] ?>"><?=$supplier['name'] ?></option>
              <?php }?>
            </select>
            <label for="floatingSelect">Supplier</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="year form-control" id="floatingInput" placeholder="year" name="year">
            <label for="floatingInput">Tahun</label>
          </div>
          <div class="form-floating mb-3">
            <input type="hidden" class="id form-control" id="floatingInput" placeholder="year" name="id">
          </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="submit" name="edit" class="btn btn-warning">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>