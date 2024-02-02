<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <title>Laravel Ajax Crud</title>
  </head>
  <body>


    <div class="container">
        <div class="row">


            <div class="col-md-2">     </div>
                <div class="col-md-8">
                    <h2 class="my-5 text-center">Laravel 10 Jquery Ajax Crud</h2>
                    <a href="" class="btn btn-success my-3"  data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a> <!-- addModal -->
                    <div class="table-data">


                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($products as $key=>$product)
                                
                               <tr>
                                <td >{{ $key+1}}</td>
                                <td>{{ $product->name}}</td>
                                <td>{{ $product->price}}</td>
                                <td>
                <a href="" class="btn btn-success update_product_form" 
                 data-bs-toggle="modal" 
                 data-bs-target="#updateModal"
                 data-id="{{ $product->id}}"
                 data-name="{{ $product->name }}"
                 data-price="{{ $product->price }}"
                
                > <i class="las la-edit"></i></a>
                 <a href="" class="btn btn-danger delete_product" data-id="{{ $product->id }}"> <i class="las la-times"></i></a>
                                </td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                        {!! $products->links() !!}

                    </div>




                </div>
        </div>


    </div>

    @include('add_product_modal')
    @include('update_product_modal')
    @include('product_js')
    {!! Toastr::message() !!}

  </body>
</html>