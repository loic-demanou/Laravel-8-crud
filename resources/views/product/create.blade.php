{{-- @extends('../layouts/app')
@section('content')
<div class="container">
    <form action="{{ route('product.store') }}" method="post" class="form" enctype="multipart/form-data">
        <div class="modal-body">
                @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="title" @error('title') is-invalid @enderror name="title" value="{{ old('title') }}"  autocomplete="title" autofocus>
                                @error('title')
                                <span class="help-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price" @error('price') is-invalid @enderror name="price" value="{{ old('price') }}"  autocomplete="price" autofocus>
                                @error('price')
                                <span class="help-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            </div>
                            <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control" @error('description') is-invalid @enderror name="description" value="{{ old('description') }}"  autocomplete="description" autofocus></textarea>
                                @error('description')
                                <span class="help-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>

                            </div>
                            <div class="col-md-12">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror name="image" value="{{ old('image') }}"  autofocus>
                                @error('image')
                                <span class="help-block" role="alert">
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

@endsection --}}
