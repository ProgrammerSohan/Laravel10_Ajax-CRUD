<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true"><!-- addModal -->
    <form action="" method="post" id="addProductForm">
        @csrf


    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Add Product</h5><!-- addModal -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">


            <div class="form-group">
                <label for="name">Product Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Product name">


            </div>


            <div class="form-group">
                <label for="name">Product Price</label>
         <input type="text" class="form-control" name="price" id="price" placeholder="Product Price">




            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_product">Save Product</button>
          </div>
        </div>
      </div>
    </form>
  </div>