@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
            <form method="post">
                @method('PuT')
                @csrf
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input class="form-control" id="productName" name="name" placeholder="Product name"
                           value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="productDescription">Product Description</label>
                    <textarea class="form-control" name="description" id="productDescription"
                              rows="3">{{ $product->description }}</textarea>
                </div>
                <br>

                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach(\App\Models\Product::CATEGORIES as $id => $category)
                                    <option value="{{ $id }}"
                                            @if($product->category_id == $id) selected @endif>{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity"
                                   value="{{ $product->quantity }}">
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </form>
                &nbsp;&nbsp;&nbsp;&nbsp;
            <form method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" href="#" id="edit-btn" role="button">Delete Product</button>
            </form>
        </div>
@endsection
