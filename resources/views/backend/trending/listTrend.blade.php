
@extends('backend.layout.app') 
@section('content') 
<div class="app-content content "> 
    <div class="content-overlay"></div> 
    <div class="header-navbar-shadow"></div> 
    <div class="content-wrapper container-xxl p-0"> 
        <div class="content-body"> 
            <section id="basic-vertical-layouts"> 
                <div class="row"> 
                    <div class="col-12"> 
                        <div class="card"> 
                            <div class="card-header"> 
                                <h4 class="card-title">Trending List</h4> 
                            </div> 
                            @session('success') 
                                <div class="alert alert-success">{{ $value }}</div> 
                            @endsession 
                            <div class="card-body"> 
                                <table class="table align-middle"> 
                                    <thead class="table-dark"> 
                                        <tr> 
                                            <th>#</th> 
                                            <th>Image</th> 
                                            <th>Image1</th> 
                                            <th>Description</th> 
                                            <th>Color</th> 
                                            <th>Vendor</th> 
                                            <th>Sku</th> 
                                            <th>Discount</th> 
                                            <th>Price</th> 
                                            <th>Action</th> 
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        @foreach ($trends as $trend) 
                                            <tr> 
                                                <td>{{ $trend->id }}</td> 
                                                <td><img src="{{ asset($trend->image) }}" alt="Img" width="50"></td> 
                                                <td><img src="{{ asset($trend->image1) }}" alt="Img1" width="50"></td> 
                                                <td data-bs-toggle="modal" data-bs-target="#descModal{{ $trend->id }}" style="cursor: pointer;"> 
                                                    <div class="d-flex flex-column gap-1"> 
                                                        <span class="text-secondary text-wrap" style="max-width: 200px;"> 
                                                            {{ Str::limit($trend->description, 40, '...') }} 
                                                        </span> 
                                                        <div><button type="button" class="btn btn-sm btn-light py-0 px-0" style="font-size: 11px;">View More</button></div> 
                                                    </div> 
                                                    <!-- Description Modal --> 
                                                    <div class="modal fade" id="descModal{{ $trend->id }}" tabindex="-1" aria-hidden="true" style="color: #000; text-align: left;"> 
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                                                            <div class="modal-content"> 
                                                                <div class="modal-header"> 
                                                                    <h5 class="modal-title">Description Details</h5> 
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                                                                </div> 
                                                                <div class="modal-body"><p>{{ $trend->description }}</p></div> 
                                                            </div> 
                                                        </div> 
                                                    </div> 
                                                </td> 
                                                <td>{{ $trend->color }}</td> 
                                                <td>{{ $trend->vendor }}</td> 
                                                <td>{{ $trend->sku }}</td> 
                                                <td>{{ $trend->discount }}</td> 
                                                <td>₹ {{ number_format((float) ($trend->price ?? 0), 2) }}</td> 
                                                <td> 
                                                    <div class="d-flex gap-1">
                                                        <a href="{{ route('trending.edit', $trend->id) }}" class="btn btn-sm btn-warning">Edit</a> 
                                                        <!-- Delete Button Added Here -->
                                                        <button type="button" class="btn btn-sm btn-danger delete-btn" data-id="{{ $trend->id }}">Delete</button>
                                                    </div>
                                                </td> 
                                            </tr> 
                                        @endforeach 
                                    </tbody> 
                                table> 
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
<script
  src="https://code.jquery.com/jquery-4.0.0.min.js"
  integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao="
  crossorigin="anonymous"></script> <!-- jQuery URL ko correct kiya hai -->
<script> 
    $(document).ready(function() { 
        $('.delete-btn').on('click', function() { 
            var productId = $(this).data('id'); 
            var row = $(this).closest('tr'); 
            
            if (confirm("Kya aap sach me is product ko delete karna chahte hain?")) { 
                $.ajax({ 
                    url: "/product/" + productId, // Agar aapka route /trending/ hai toh ise badal kar "/trending/" + productId kar lein
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

