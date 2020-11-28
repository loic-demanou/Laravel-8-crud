@extends('../layouts/app')
@section('content')
<div class="container">
        <h2>Modification form
            <a href="{{ route('index') }}" class="btn btn-primary mb-5 float-right">Back</a>
        </h2><br>

<form action="{{ route('product.update',$product->id) }}" method="post" class="form" enctype="multipart/form-data">
    @method('put')
    @csrf
        <div class="form-group">

            <div class="row">
                <div class="col-md-6">
                    <label for="">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $product->title }}"  autocomplete="title" autofocus>
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                </div>
                <div class="col-md-6">
                    <label for="">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}"  autocomplete="price" autofocus>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" value="{{ $product->description }}"  autocomplete="description" autofocus>{{ $product->description }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Old image</label>
                            <img src="{{ asset('storage') . '/' . $product->image }}" alt="Indisponible" style="width: 80px; height:70px">
                        <br>
                        </div>

                        <div class="col-md-9">
                            <label for="">New image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"name="image" value="{{ $product->image }}"  autofocus>
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
        </div>
        <button class="btn btn-primary col-md-3 " >Modify</button>
    </form>
</div>

@endsection
