<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="brand">
            <label for="floatingInput">Brand</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="brand">
            <label for="floatingInput">Model</label>
          </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
            </select>
            <label for="floatingSelect">Supplier</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="brand">
            <label for="floatingInput">Code</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="brand">
            <label for="floatingInput">Year</label>
          </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="submit"class="btn btn-success">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>