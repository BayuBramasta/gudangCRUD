        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Data Supplier</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <b>Tambah Record</b>
                </button>
              </div>
            </div>
          </div>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Supplier</th>
                  <th scope="col">Address</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $iteration = 0; 
                  $get_supplier = mysqli_query($conn, "SELECT * FROM tb_supplier");
                  if(mysqli_num_rows($get_supplier)<1)
                  {
                    echo "<tr><td colspan = '5' class='text-center' >Belum Ada Data</td></tr>";
                  }
                  while ($supplier = mysqli_fetch_array($get_supplier)) {
                      $iteration ++;
                ?>
                <tr>
                  <td><?=$iteration ?></td>
                  <td><?=$supplier['name'] ?></td>
                  <td><?=$supplier['address'] ?></td>
                  <td><button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-supplier="<?=$supplier['name'] ?>" data-bs-address="<?=$supplier['address'] ?>" data-bs-id="<?=$supplier['id'] ?>">
                  <b>Edit</b>
                </button></td>
                  <td><a class="btn btn-danger btn-sm" href="supplier/del.php?id=<?=$supplier['id'] ?>"><b>Delete</b></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
<?php include 'supplier/modal.php'; ?> 
<?php include 'supplier/modalEdit.php'; ?> 
