@extends('backend.layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Trending Product</h4>
                                </div>
                                
                                @session('success')
                                    <div class="alert alert-success">{{ $value }}</div>
                                @endsession
                                @session('error')
                                    <div class="alert alert-danger">{{ $value }}</div>
                                @endsession

                                <div class="card-body">
                                    <form action="{{ route('trending.store') }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">Image 1</label>
                                                <input class="form-control" type="file" name="image">
                                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">Image 2 (image1)</label>
                                                <input class="form-control" type="file" name="image1">
                                                @error('image1') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">Price</label>
                                                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}" />
                                                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">Discount</label>
                                                <input type="text" class="form-control" name="discount" placeholder="Discount" value="{{ old('discount') }}" />
                                                @error('discount') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">Color</label>
                                                <input type="text" class="form-control" name="color" placeholder="Color" value="{{ old('color') }}" />
                                                @error('color') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">Vendor</label>
                                                <input type="text" class="form-control" name="vendor" placeholder="Vendor" value="{{ old('vendor') }}" />
                                                @error('vendor') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6 col-12 mb-2">
                                                <label class="form-label">SKU</label>
                                                <input type="text" class="form-control" name="sku" placeholder="SKU" value="{{ old('sku') }}" />
                                                @error('sku') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-12 mb-2">
                                                <div class="form-floating">
                                                    <textarea class="form-control" name="description" placeholder="Leave description" id="floatingTextarea2" style="height: 100px">{{ old('description') }}</textarea>
                                                    <label for="floatingTextarea2">Description</label>
                                                </div>
                                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
