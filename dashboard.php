      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Dashboard</h1>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="bg-success p-2 rounded">
                  <div class="inner">
                    <?php
                      $gSupplier = mysqli_query($conn, "SELECT COUNT(id_supplier) AS total FROM tb_supplier");
                      $totalSupplier = mysqli_fetch_array($gSupplier); 
                    ?>
                    <h3 class="text-light"><?=$totalSupplier['total'] ?></h3>

                    <p class="text-light">Suppliers</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="bg-primary p-2 rounded">
                  <div class="inner">
                    <?php
                      $gKomputer = mysqli_query($conn, "SELECT COUNT(id_komputer) AS total FROM tb_komputer");
                      $totalKomputer = mysqli_fetch_array($gKomputer); 
                    ?>
                    <h3 class="text-light"><?=$totalKomputer['total'] ?></h3>

                    <p class="text-light">Products</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
