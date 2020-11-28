@extends('../layouts/app')
@section('content')
    <div class="container">
        <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Fill in the form
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fill in the form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('product.store') }}" method="post" class="form" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"  value="{{ old('title') }}"  autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="">Price</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"  value="{{ old('price') }}"  autocomplete="price" autofocus>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                            <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>

                            </div>
                            <div class="col-md-12">
                                <label for="">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"  name="image" value="{{ old('image') }}"  autofocus>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>

                            </div>
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary col-md-3 " >Validate</button>
        </div>
        </form>
        </div>
    </div>
  </div>


        <div class="container">
        {{-- <a href="{{ route('product.create') }}" class="btn btn-primary float-right mb-5">Add a new product</a> --}}
        <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#exampleModal">
            Add a new product
        </button>


            <table class="table table-striped">
                <thead class="thead" style="background:rgb(0,162,232); color:white";>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price (Fcfa)</th>
                        <th>Description</th>
                        <th>Publication day</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ number_format($product->price,2,',',' ') }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td><img src="{{ asset('storage') . '/' . $product->image }}" alt="rien" style="width: 60px; height:60px"></td>
                    <td>
                        <a href="{{ route('product.show',  $product->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('product.edit',  $product->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('product.delete',  $product->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                @endforeach
            </table>
            <div class="container">{{!! $products->links() !!}}</div>

        </div>
    </div>
@endsection
