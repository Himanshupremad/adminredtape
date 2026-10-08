@extends('backend.layout.app')
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <section id="basic-vertical-layouts">
                    <div class="row">

                        <div class=" col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Category</h4>
                                </div>
                                @session('success')
                                    <div class="alert alert-success">
                                        {{ $value }}
                                    </div>
                                @endsession

                                @session('error')
                                    <div class="text-danger">
                                        {{ $value }}
                                    </div>
                                @endsession
                                <div class="card-body">
                                    <form action='{{ route('category.store') }}' method="POST" enctype="multipart/form-data"
                                        class="form form-vertical">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">image</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="image">
                                                    <span class="text-danger">
                                                        @error('image')
                                                            {{ $message }}
                                                        @enderror

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-icon">Content</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                                        <input type="text" id="first-name-icon" class="form-control"
                                                            name="content" placeholder="content" />
                                                        <span class="text-danger">
                                                            @error('content')
                                                                {{ $message }}
                                                            @enderror

                                                        </span>
                                                    </div>
                                                </div>
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
