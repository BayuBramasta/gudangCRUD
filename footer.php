<!-- <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script> -->
    <!-- <script src="dashboard.js"></script> -->
  </body>
  <script>
      const exampleModal = document.getElementById('exampleModal1');
      const exampleModal1 = document.getElementById('exampleModal3');
      if (exampleModal) {// for supplier
        exampleModal.addEventListener('show.bs.modal', event => {
          // Button that triggered the modal
          const button = event.relatedTarget
          // Extract info from data-bs-* attributes
          const supplier = button.getAttribute('data-bs-supplier')
          const address = button.getAttribute('data-bs-address')
          const id = button.getAttribute('data-bs-id')
          // If necessary, you could initiate an Ajax request here
          // and then do the updating in a callback.

          // Update the modal's content.
          const modalBodyInputSupplier = exampleModal.querySelector('.modal-body .supplier')
          const modalBodyInputAlamat = exampleModal.querySelector('.modal-body .alamat')
          const modalBodyInputID = exampleModal.querySelector('.modal-body .id')

          modalBodyInputSupplier.value = supplier
          modalBodyInputAlamat.value = address
          modalBodyInputID.value = id
        })
      } else{//for tb_komputer
        exampleModal1.addEventListener('show.bs.modal', event => {
          // Button that triggered the modal
          const button = event.relatedTarget
          // Extract info from data-bs-* attributes
          const id = button.getAttribute('data-bs-id')
          const brand = button.getAttribute('data-bs-brand')
          const model = button.getAttribute('data-bs-model')
          const supplier = button.getAttribute('data-bs-supplier')
          const supplierID = button.getAttribute('data-bs-supplierID')
          const year = button.getAttribute('data-bs-year')
          // If necessary, you could initiate an Ajax request here
          // and then do the updating in a callback.

          // Update the modal's content.
          const modalBodyInputID = exampleModal1.querySelector('.modal-body .id')
          const modalBodyInputBrand = exampleModal1.querySelector('.modal-body .brand')
          const modalBodyInputModel = exampleModal1.querySelector('.modal-body .model')
          const modalBodyInputSupplier = exampleModal1.querySelector('.modal-body .supplier')
          const modalBodyInputYear = exampleModal1.querySelector('.modal-body .year')

          modalBodyInputID.value = id
          modalBodyInputBrand.value = brand
          modalBodyInputModel.value = model
          modalBodyInputSupplier.value = supplierID
          modalBodyInputSupplier.innerHTML = supplier+" selected"
          modalBodyInputYear.value = year
          
        })
      }     
  </script>
</html>