<!-- <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script> -->
    <!-- <script src="dashboard.js"></script> -->
  </body>
  <script>
      const exampleModal = document.getElementById('exampleModal1')
      if (exampleModal) {
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
      }      
  </script>
</html>