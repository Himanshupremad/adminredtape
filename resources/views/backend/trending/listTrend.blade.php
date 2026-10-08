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

                        <div class=" col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Trending List</h4>
                                </div>
                                @session('success')
                                <div class="alert alert-success">
                                     {{ $value }}
                                </div>
                                @endsession
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="table-dark"> 
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>  
                                                <th>Image1</th>  
                                                <th>Content</th>  
                                                <th>Price</th>  
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trends as $trend)
                                            <tr>
                                                <th>{{ $trend->id }}</th>
                                                <th><img src="{{ asset($trend->image) }}" alt="" width="50px"></th>
                                                <th><img src="{{ asset($trend->image2) }}" alt="" width="50px"></th>
                                                <th>{{ $trend->content }}</th>
                                                <th>₹ {{ number_format((float) ($trend->price ?? 0), 2) }}</th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection