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
                                    <h4 class="card-title">Banner List</h4>
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
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($banners as $banner)
                                                <tr>
                                                    <td>{{ $banner->id }}</td>
                                                    <td>
                                                        <img src="{{ asset($banner->image) }}" alt="Banner Image"
                                                            width="50px">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-1">
                                                            <a href="{{ route('banner.edit', $banner->id) }}"
                                                                class="btn btn-sm btn-warning">Edit</a>
                                                           
                                                            <button type="button" class="btn btn-sm btn-danger delete-btn"
                                                                data-id="{{ $banner->id }}">Delete</button>
                                                        </div>
                                                    </td>
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


    <!-- AJAX Core Handling Script -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"
        integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script> 
    <script>
        $(document).ready(function() {
            $('.delete-btn').on('click', function() {
                var bannerId = $(this).data('id');
                var row = $(this).closest('tr');

                if (confirm("Kya aap sach me is product ko delete karna chahte hain?")) {
                    $.ajax({
                        url: "/banner/" +
                        bannerId, 
                        type: 'DELETE',
                        data: {
                            "_token": $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.success) {
                                row.fadeOut(400, function() {
                                    $(this).remove();
                                });
                                alert(response.message);
                            } else {
                                alert(response.message || 'Kuch gadbad hui.');
                            }
                        },
                        error: function() {
                            alert('Kuch gadbad hui, kripya dubara try karein.');
                        }
                    });
                }
            });
        });
    </script>
@endsection
