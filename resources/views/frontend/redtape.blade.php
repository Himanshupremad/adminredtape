<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container-fluid p-0  ">
        <nav class="navbar sticky-top  head ">
            <div class="container-fluid topic">
                <a class="navbar-brand ms-5 ps-5" href="#">Store Locator Help</a>
            </div>
        </nav>

        <nav class="navbar navbar-light bg-light ">
            <div class="container">
                <div class="mx-auto me-5 logimg">
                    <img src="{{ asset('frontend/image/img1.webp') }}" alt="">
                </div>
                <form class="d-flex justify-content-between forms">
                    <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">

                    <div class="me-5 fs-4">
                        <i class="bi bi-person"></i>
                    </div>
                    <div class="me-5 fs-4">
                        <i class="bi bi-basket3"></i>
                    </div>
                    <div class="me-5 fs-4">
                        <i class="bi bi-heart"></i>
                    </div>
                </form>
            </div>
        </nav>

        <div class="main " style=" display: flex; justify-content: center; ">
            <div class="btn-group" style="width: 0 auto; width: 100%; ">
                <span class="btn btn-light btn-md dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 auto;">
                    Men
                </span>
                <ul class="dropdown-menu" style="min-width: 100%;">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Footwear</h5>
                            <p>Boots</p>
                            <p>Casuals Shoes</p>
                            <p>Formal Shoes</p>
                            <p>Slider</p>
                            <p>Sports Shoes</p>

                        </div>
                        <div class="col-md-2">
                            <h5>Top Wear</h5>
                            <p>Shirts</p>
                            <p>T-shirts</p>
                            <p>Jackets</p>
                            <p>Sweat shirt/Hoodies</p>
                            <p> Sweater</p>

                        </div>
                        <div class="col-md-2">
                            <h5>Bottomwear</h5>
                            <p>Jeans</p>
                            <p>Trouser</p>
                            <p>Shorts</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Sportswear</h5>
                            <p>Active T-Shirt</p>
                            <p>Shorts</p>
                            <p>Trackpant/Joggers</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Inner Wear</h5>
                            <p>Briefs-Trunks</p>
                        </div>

                    </div>

                </ul>

                <span class="btn btn-light btn-md dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 auto;">
                    Women
                </span>
                <ul class="dropdown-menu" style="min-width: 100%;">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Footwear</h5>
                            <p>Boots</p>
                            <p>Casuals Shoes</p>
                            <p>Formal Shoes</p>
                            <p>Slider</p>
                            <p>Sports Shoes</p>

                        </div>
                        <div class="col-md-2">
                            <h5>Top Wear</h5>
                            <p>Shirts</p>
                            <p>T-shirts</p>
                            <p>Jackets</p>
                            <p>Sweat shirt/Hoodies</p>
                            <p> Sweater</p>

                        </div>
                        <div class="col-md-2">
                            <h5>Bottomwear</h5>
                            <p>Jeans</p>
                            <p>Trouser</p>
                            <p>Shorts</p>
                        </div>
                        <div class="col-md-2">
                            <h5>Sportswear</h5>
                            <p>Active T-Shirt</p>
                            <p>Shorts</p>
                            <p>Trackpant/Joggers</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Inner Wear</h5>
                            <p>Briefs-Trunks</p>
                        </div>

                    </div>

                </ul>



                <span class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Accessories
                </span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Wallet</button></li>
                    <li><button class="dropdown-item" type="button">Socks</button></li>
                    <li><button class="dropdown-item" type="button">Handkerchief</button></li>
                    <li><button class="dropdown-item" type="button">Caps</button></li>
                    <li><button class="dropdown-item" type="button">Belt</button></li>
                    <li><button class="dropdown-item" type="button">Backpacks</button></li>
                    <li><button class="dropdown-item" type="button">Perfume</button></li>
                    <li><button class="dropdown-item" type="button">Combo Gift Set</button></li>
                    <li><button class="dropdown-item" type="button">Trolley Bag</button></li>
                    <li><button class="dropdown-item" type="button">Women's Handbags</button></li>
                </ul>




                <span class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Ozark
                </span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">Hiking</button></li>
                    <li><button class="dropdown-item" type="button">Trail Running</button></li>
                    <li><button class="dropdown-item" type="button">Trekking</button></li>

                </ul>


            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- <div class="carousel-item active">
                <img src="{{ asset('frontend/image/img3.webp') }}" class="d-block w-100" alt="...">
            </div> --}}
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>
                        <img src="{{ asset($banner->image) }}" alt="Banner Image" width="100">
                    </td>
                </tr>
            @endforeach

            {{-- <div class="carousel-item">
                <img src="{{ asset('frontend/image/img4.webp') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/image/img5.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/image/img6.webp') }}" class="d-block w-100" alt="...">
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="banner my-4">

        <img src="{{ asset('frontend/image/img7.webp') }}" alt="">

    </div>


    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card cards h-100">
                    <img src="{{ asset('frontend/image/img8.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body card-cntt">
                        <a href="">
                            <div class=" d-flex justify-content-between">
                                <p>Footwear</p>
                                <button type="button" class="btn btn-outline-dark  btns"><i
                                        class="bi bi-chevron-right"></i></button>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cards h-100">
                    <img src="{{ asset('frontend/image/img9.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body card-cntt">

                        <a href="">
                            <div class=" d-flex justify-content-between">
                                <p>Clothing</p>
                                <button type="button" class="btn btns btn-outline-dark"><i
                                        class="bi bi-chevron-right"></i></button>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cards h-100">
                    <img src="{{ asset('frontend/image/img11.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body card-cntt">

                        <a href="">
                            <div class=" d-flex justify-content-between">
                                <p>New Arrival</p>
                                <button type="button" class="btn btns btn-outline-dark"><i
                                        class="bi bi-chevron-right"></i></button>
                            </div>

                        </a>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cards h-100">
                    <img src="{{ asset('frontend/image/img10.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body card-cntt">

                        <a href="">
                            <div class=" d-flex justify-content-between">
                                <p>Accesories</p>
                                <button type="button" class="btn btns btn-outline-dark"><i
                                        class="bi bi-chevron-right"></i></button>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid my-3">
        <div class="img12">
            <img src="{{ asset('frontend/image/img12.webp') }}" alt="">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row my-5">
            <div class="col-md-8">
                <div class="img13 ">
                    <img src="{{ asset('frontend/image/img13.webp') }}" class="w-100 object-fit-cover "
                        alt="Responsive image" style="height: 600px;">
                </div>

            </div>
            <div class="col-md-4">
                <div class="img14 ">
                    <img src="{{ asset('frontend/image/img14.webp') }}" class="w-100 object-fit-cover"
                        alt="Responsive image" style="height: 600px;">
                </div>

            </div>

        </div>

    </div>


    <div class="container-fluid">
        <div>
            <div class="d-flex justify-content-between">
                <div style="font-weight: 700;">
                    <h3>Trending Now</h3>
                </div>
                <div class="d-flex card-cntt" style="gap: 20px;">
                    <a href="">
                        <p>Shoes</p>
                    </a>
                    <a href="">
                        <p>Shirts</p>
                    </a>
                    <a href="">
                        <p>Accessories</p>
                    </a>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-6 g-4">
                <div class="col">
                    <div class=" cards h-100">
                        <img class="interactive-image" src="{{ asset('frontend/image/img24.webp') }}"
                            data-default="{{ asset('frontend/image/img25.webp') }}"
                            data-hover="{{ asset('frontend/image/img24.webp') }}" alt="Hover Effect" width="250"
                            style="cursor: pointer;">

                        <div class="card-body card-b">
                            <a href="">
                                <h6>Low Cut Sports Shoes for Men <br>in White | Sports Shoes</h6>
                            </a>
                            <div class="d-flex" style="gap: 13px; font-size: 16px;">
                                <p>Save 84%</p>
                                <span style="color: #c41d31; font-size: 15px;">₹ 1,237.00</span>
                            </div>
                            <span class="text-decoration-line-through" style="background-color: rgb(217, 217, 217);">₹
                                7,499.00</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class=" cards h-100">
                        <img class="interactive-image" src="{{ asset('frontend/image/img26.webp') }}"
                            data-default="{{ asset('frontend/image/img27.webp') }}"
                            data-hover="{{ asset('frontend/image/img26.webp') }}" alt="Hover Effect" width="250"
                            style="cursor: pointer;">

                        <div class="card-body card-b">
                            <a href="">
                                <h6>Men's Light Blue Sports Shoes | <br> For Everyday Comfort</h6>
                            </a>
                            <div class="d-flex" style="gap: 13px; font-size: 16px;">
                                <p>Save 85%</p>
                                <span style="color: #c41d31; font-size: 15px;">₹ 1,224.00</span>
                            </div>
                            <span class="text-decoration-line-through" style="background-color: rgb(217, 217, 217);">₹
                                7,899.00</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class=" cards h-100">
                        <img class="interactive-image" src="{{ asset('frontend/image/img28.webp') }}"
                            data-default="{{ asset('frontend/image/img19.webp') }}"
                            data-hover="{{ asset('frontend/image/img28.webp') }}" alt="Hover Effect" width="250"
                            style="cursor: pointer;">
                        <div class="card-body card-b">
                            <a href="">
                                <h6>Men's Black and White Walking <br> Slip-On Shoes | Mesh Walking Shoes</h6>
                            </a>
                            <div class="d-flex" style="gap: 13px; font-size: 16px;">
                                <p>Save 84%</p>
                                <span style="color: #c41d31; font-size: 15px;">₹ 1,039.00</span>
                            </div>
                            <span class="text-decoration-line-through" style="background-color: rgb(217, 217, 217);">₹
                                6,299.00</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class=" cards h-100">
                        <img class="interactive-image" src="{{ asset('frontend/image/img26.webp') }}"
                            data-default="{{ asset('frontend/image/img27.webp') }}"
                            data-hover="{{ asset('frontend/image/img26.webp') }}" alt="Hover Effect" width="250"
                            style="cursor: pointer;">
                        <div class="card-body card-b">
                            <a href="">
                                <h6>Sports Shoes for Men in Blue <br> | Athleisure Shoes</h6>
                            </a>
                            <div class="d-flex" style="gap: 13px; font-size: 16px;">
                                <p>Save 84%</p>
                                <span style="color: #c41d31; font-size: 15px;">₹ 1,270.00</span>
                            </div>
                            <span class="text-decoration-line-through" style="background-color: rgb(217, 217, 217);">₹
                                7,699.00</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class=" cards h-100">
                        <img class="interactive-image" src="{{ asset('frontend/image/img33.webp') }}"
                            data-default="{{ asset('frontend/image/img34.webp') }}"
                            data-hover="{{ asset('frontend/image/img33.webp') }}" alt="Hover Effect" width="250"
                            style="cursor: pointer;">
                        <div class="card-body card-b">
                            <a href="">
                                <h6>Drift+ Sports Shoes for Men for <br> High-Comfort in Black | Low-Cut Athleisure
                                    Sports Shoes.</h6>
                            </a>
                            <div class="d-flex" style="gap: 13px; font-size: 16px;">
                                <p>Save 84%</p>
                                <span style="color: #c41d31; font-size: 15px;">₹ 1,424.00</span>
                            </div>
                            <span class="text-decoration-line-through" style="background-color: rgb(217, 217, 217);">₹
                                8,899.00</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class=" cards h-100">
                        <img class="interactive-image" src="{{ asset('frontend/image/img31.webp') }}"
                            data-default="{{ asset('frontend/image/img32.webp') }}"
                            data-hover="{{ asset('frontend/image/img31.webp') }}" alt="Hover Effect" width="250"
                            style="cursor: pointer;">
                        <div class="card-body card-b">
                            <a href="">
                                <h6>Sports Shoes for Men in White <br>Sea Green | Athleisure Shoes</h6>
                            </a>
                            <div class="d-flex" style="gap: 13px; font-size: 16px;">
                                <p>Save 84%</p>
                                <span style="color: #c41d31; font-size: 15px;">₹ 1,424.00</span>
                            </div>
                            <span class="text-decoration-line-through" style="background-color: rgb(217, 217, 217);">₹
                                8,899.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container-fluid">
        <div id="pureAutoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row g-2">
                        <div class="col-3"><img src="{{ asset('frontend/image/img16.webp') }}"
                                class="d-block w-100" alt="Slide 1"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img15.webp') }}"
                                class="d-block w-100" alt="Slide 2"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img17.webp') }}"
                                class="d-block w-100" alt="Slide 3"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img18.webp') }}"
                                class="d-block w-100" alt="Slide 4"></div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row g-2">
                        <div class="col-3"><img src="{{ asset('frontend/image/img16.webp') }}"
                                class="d-block w-100" alt="Slide 5"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img15.webp') }}"
                                class="d-block w-100" alt="Slide 6"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img17.webp') }}"
                                class="d-block w-100" alt="Slide 7"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img18.webp') }}"
                                class="d-block w-100" alt="Slide 8"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-2">
                        <div class="col-3"><img src="{{ asset('frontend/image/img16.webp') }}"
                                class="d-block w-100" alt="Slide 5"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img15.webp') }}"
                                class="d-block w-100" alt="Slide 6"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img17.webp') }}"
                                class="d-block w-100" alt="Slide 7"></div>
                        <div class="col-3"><img src="{{ asset('frontend/image/img18.webp') }}"
                                class="d-block w-100" alt="Slide 8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="video-container my-4">
        <video width="100%" height="auto" controls autoplay muted loop>
            <source src="{{ asset('frontend/video/img19.mp4') }}" type="video/mp4">

        </video>
    </div>


    <div class="container">
        <hr>
        <div class="row tootrr">
            <div class="col-4">
                <h5><span><i class="bi bi-chat-square-dots"></i></span> Customer Service</h5>
                <p>09:30 A.M. to 05:00 P.M</p>


            </div>


            <div class="col-4">
                <h5><span><i class="bi bi-telephone"></i></span> Call Us</h5>
                <p>+91 7836850000</p>

            </div>
            <div class="col-4">
                <h5><span><i class="bi bi-symmetry-vertical"></i></span> Get in Touch</h5>
                <p>customercare@redtapeindia.com</p>

            </div>


            <div class="row my-5 tootrr">
                <div class="col-2 ftr">
                    <h5>Collection</h5>
                    <p>Men</p>
                    <p>Women</p>
                    <p>Accessories</p>
                    <p>Ozark</p>

                </div>
                <div class="col-2 ftr">
                    <h5>Get Help</h5>
                    <p>About Us</p>
                    <p>Contact Us</p>
                    <p>My Account</p>
                    <p>Store Locator</p>
                    <p>Store Expansion</p>
                    <p>FAQs</p>
                </div>
                <div class="col-2 ftr">
                    <h5>Company</h5>
                    <p>Return & Exchange</p>
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                </div>
                <div class="col-6 ftr">
                    <h5>About Redtape</h5>
                    <p>RedTape is known for emerging as one of the Finest Brands of Footwear and <br> Clothing for Men,
                        Women
                        and Kids. It has emerged as a complete Family Fashion <br> Destination by providing the Best
                        International Styles and World-Class Quality <br> through Shoes, Apparels and Accessories for
                        all age
                        groups. We own a Portfolio <br> of Well-Recognized Brands:
                    </p>
                    <div class="mt-5">
                        <a href="" style="color: black;">Read More</a>
                    </div>
                </div>

            </div>

            <div class="icons  d-flex justify-content-end">
                <span><i class="bi bi-facebook"></i></span>
                <span><i class="bi bi-twitter-x"></i></span>
                <span><i class="bi bi-instagram"></i></span>
                <span><i class="bi bi-youtube"></i></span>
            </div>

        </div>

    </div>
    <div class="container-fluid">
        <div class="footer text-center my-4">
            <a href="">
                <p>© 2026 The content of this site is copyright-protected and is the property of RedTape .</p>
            </a>

        </div>

    </div>


    <!-- JavaScript: Isme aapko koi change nahi karna hai, direct paste karein -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const animationSpeed = 600; // Medium speed

            document.querySelectorAll('.interactive-image').forEach(imgElement => {

                // Hover In
                imgElement.addEventListener('mouseover', function() {
                    const hoverSrc = this.getAttribute('data-hover');
                    if (this.src === hoverSrc || !hoverSrc) return;

                    this.animate([{
                        opacity: 1
                    }, {
                        opacity: 0
                    }], {
                        duration: animationSpeed / 2,
                        fill: 'forwards'
                    }).onfinish = () => {
                        this.src = hoverSrc;
                        this.animate([{
                            opacity: 0
                        }, {
                            opacity: 1
                        }], {
                            duration: animationSpeed / 2,
                            fill: 'forwards'
                        });
                    };
                });

                // Hover Out
                imgElement.addEventListener('mouseout', function() {
                    const defaultSrc = this.getAttribute('data-default');
                    if (this.src === defaultSrc || !defaultSrc) return;

                    this.animate([{
                        opacity: 1
                    }, {
                        opacity: 0
                    }], {
                        duration: animationSpeed / 2,
                        fill: 'forwards'
                    }).onfinish = () => {
                        this.src = defaultSrc;
                        this.animate([{
                            opacity: 0
                        }, {
                            opacity: 1
                        }], {
                            duration: animationSpeed / 2,
                            fill: 'forwards'
                        });
                    };
                });

                // Click Effect
                imgElement.addEventListener('click', function() {
                    const clickedDefault = this.getAttribute('data-clicked-default');
                    const clickedHover = this.getAttribute('data-clicked-hover');

                    if (clickedDefault && clickedHover) {
                        this.animate([{
                            opacity: 1
                        }, {
                            opacity: 0
                        }], {
                            duration: animationSpeed / 2,
                            fill: 'forwards'
                        }).onfinish = () => {
                            this.setAttribute('data-default', clickedDefault);
                            this.setAttribute('data-hover', clickedHover);
                            this.src = clickedDefault;
                            this.animate([{
                                opacity: 0
                            }, {
                                opacity: 1
                            }], {
                                duration: animationSpeed / 2,
                                fill: 'forwards'
                            });
                        };
                    }
                });

            });
        });
    </script>






</body>

</html>
