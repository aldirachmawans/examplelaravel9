@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">{{ __('Update Product') }}</div>

                <div class="card-body">
                    <form action="{{ route('update_product', $product) }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form_group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="name" class="form-control"
                                value="{{ $product->name }}">
                        </div>

                        <div class="form_group">
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Description" class="form-control"
                                value="{{ $product->description }}">
                        </div>

                        <div class="form_group">
                            <label for="">Price</label>
                            <input type="number" name="price" placeholder="Price" class="form-control"
                                value="{{ $product->price }}">
                        </div>

                        <div class="form_group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" placeholder="Stock" class="form-control"
                                value="{{ $product->stock }}">
                        </div>

                        <div class="form_group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection