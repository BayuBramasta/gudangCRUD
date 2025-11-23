        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Data Komputer/Laptop</h1>
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
                  <th scope="col">Brand</th>
                  <th scope="col">Model</th>
                  <th scope="col">Supplier</th>
                  <th scope="col">Tahun</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $iteration = 0; 
                  $get_komputer = mysqli_query($conn, "SELECT * FROM tb_komputer LEFT JOIN tb_supplier ON tb_komputer.supplier = tb_supplier.id;");
                  if(mysqli_num_rows($get_komputer)<1)
                  {
                    echo "<tr><td colspan = '7' class='text-center' >Belum Ada Data</td></tr>";
                  }
                    while ($komputer = mysqli_fetch_array($get_komputer)) {
                        $iteration ++;
                ?>
                <tr>
                  <td><?=$iteration ?></td>
                  <td><?=$komputer['brand'] ?></td>
                  <td><?=$komputer['model'] ?></td>
                  <td><?=$komputer['name'] ?></td>
                  <td><?=$komputer['year'] ?></td>
                  <td><button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-brand="<?=$komputer['brand'] ?>" data-bs-model="<?=$komputer['model'] ?>" data-bs-supplier="<?=$komputer['name'] ?>" data-bs-supplierID="<?=$komputer['id'] ?>" data-bs-year="<?=$komputer['year'] ?>" data-bs-id="<?=$komputer['id_komputer'] ?>">Edit</button></td>
                  <td><a class="btn btn-danger btn-sm" href="komputer/del.php?id=<?=$komputer['id_komputer'] ?>"><b>Delete</b></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    <?php include 'modal.php'; ?>
    <?php include 'modalEdit.php'; ?>
