  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Record</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="supplier/edit.php">
            <div class="form-floating mb-3">
              <input type="text" class="supplier form-control" id="floatingInput" placeholder="brand" name="supplier" required>
              <label for="floatingInput">Nama Supplier</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="alamat form-control" id="floatingInput" placeholder="brand" name="alamat" required>
              <label for="floatingInput">Alamat</label>
            </div>
            <div class="form-floating mb-3">
              <input type="hidden" class="id" name="id" value="">
            </div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="submit"class="btn btn-warning">Edit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
