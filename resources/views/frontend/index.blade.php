@extends('frontend.master')

@section('content')
    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="col-12 col-md-8 mx-auto">
                <h1 class="text-uppercase text-light text-center mb-3"> Welcome Back </h1>
                <div class="search-box">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="form-control" id="searchInput"
                            placeholder="Search Make, Model, or Keyword">
                        <button class="go-button">Go</button>
                    </div>
                    <div class="suggestion-box" id="suggestionBox">
                        <div class="mb-4">
                            <h5 class="mb-2 fs-6 fw-semibold">Vehicle Styles</h5>
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/suv.webp" alt="suv">
                                        <p class="m-0"> SUVs </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/sedan.webp" alt="sedan">
                                        <p class="m-0"> Sedans </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/truck.webp" alt="truck">
                                        <p class="m-0"> Trucks </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/coupe.webp" alt="coupe">
                                        <p class="m-0"> Coupes </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/minivan.webp"
                                            alt="minivan">
                                        <p class="m-0"> Minivans </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/convertible.webp"
                                            alt="convertible">
                                        <p class="m-0"> Convertibles </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/wagon.webp" alt="wagon">
                                        <p class="m-0"> Wagons </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/hatchback.webp"
                                            alt="hatchback">
                                        <p class="m-0"> Hatchbacks </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/electric.webp"
                                            alt="electric">
                                        <p class="m-0"> EVs </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/hybrid.webp"
                                            alt="hybrid">
                                        <p class="m-0"> Hybrids </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <img class="img-fluid rounded"
                                            src="{{ '/' }}assets/images/vehicle-styles/plug-in-hybrid.webp"
                                            alt="plug-in-hybrid">
                                        <p class="m-0"> Plug in hybrid </p>
                                    </a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#"
                                        class="d-inline-block overflow-hidden rounded vehicle-item text-decoration-none card h-100 w-100">
                                        <div class="h-100 w-100 d-flex justify-content-center align-items-center">
                                            <div>
                                                <svg fill=none height=33 viewBox="0 0 33 33" width=33
                                                    xmlns=http://www.w3.org/2000/svg>
                                                    <path
                                                        d="M18.0789 2.60039L18.3895 2.76191L18.733 2.69443L20.5901 2.32969L21.9551 3.64051L22.2076 3.88299L22.5562 3.91504L24.4408 4.08825L25.3812 5.73055L25.5552 6.03435L25.8806 6.1633L27.6401 6.86044L28.0797 8.70117L28.161 9.04167L28.437 9.2571L29.9287 10.4217L29.832 12.3117L29.8141 12.6613L30.0182 12.9458L31.1214 14.4835L30.4961 16.2697L30.3804 16.6001L30.4961 16.9305L31.1214 18.7167L30.0182 20.2544L29.8141 20.5389L29.832 20.8885L29.9287 22.7785L28.437 23.9431L28.161 24.1585L28.0797 24.499L27.6401 26.3398L25.8806 27.0369L25.5552 27.1658L25.3812 27.4696L24.4408 29.1119L22.5562 29.2852L22.2076 29.3172L21.9551 29.5597L20.5901 30.8705L18.733 30.5058L18.3895 30.4383L18.0789 30.5998L16.3999 31.473L14.7209 30.5998L14.4103 30.4383L14.0668 30.5058L12.2097 30.8705L10.8447 29.5597L10.5922 29.3172L10.2436 29.2852L8.35902 29.1119L7.41859 27.4696L7.24463 27.1658L6.91916 27.0369L5.15974 26.3398L4.72009 24.499L4.63876 24.1585L4.36282 23.9431L2.87107 22.7785L2.96782 20.8885L2.98572 20.5389L2.78164 20.2544L1.67842 18.7167L2.30374 16.9305L2.41941 16.6001L2.30374 16.2697L1.67842 14.4835L2.78164 12.9458L2.98572 12.6613L2.96782 12.3117L2.87107 10.4217L4.36282 9.2571L4.63876 9.04167L4.72009 8.70117L5.15974 6.86044L6.91916 6.1633L7.24463 6.03435L7.41859 5.73055L8.35902 4.08825L10.2436 3.91504L10.5922 3.88299L10.8447 3.64051L12.2097 2.32969L14.0668 2.69443L14.4103 2.76191L14.7209 2.60039L16.3999 1.72723L18.0789 2.60039Z"
                                                        stroke=#00619E stroke-width=2 />
                                                    <g clip-path=url(#clip0_17975_9013)>
                                                        <path
                                                            d="M11.7787 16.6001H21.0212C22.3862 16.6001 23.3999 17.6386 23.3999 18.7801V21.6001V22.6001H22.2749H10.5249H9.3999V21.6001V18.7801C9.3999 17.6386 10.4136 16.6001 11.7787 16.6001Z"
                                                            stroke=#00619E stroke-width=2 />
                                                        <path
                                                            d="M14.2566 12.6001H18.5432C20.1912 12.6001 21.3999 13.8262 21.3999 15.1601V15.6001V16.6001H20.2332H12.5666H11.3999V15.6001V15.1601C11.3999 13.8262 12.6086 12.6001 14.2566 12.6001Z"
                                                            stroke=#00619E stroke-width=2 />
                                                        <path
                                                            d="M24.3999 15.3929C24.3999 15.7072 24.2142 15.9919 23.9266 16.1185L23.0599 16.5001C22.2999 16.8301 21.3999 16.3401 21.3999 15.6001C21.3999 15.0501 21.9099 14.6001 22.5499 14.6001H23.6071C24.0449 14.6001 24.3999 14.9551 24.3999 15.3929Z"
                                                            fill=#00619E />
                                                        <path
                                                            d="M8.3999 15.3929C8.3999 15.7072 8.58558 15.9919 8.87324 16.1185L9.7399 16.5001C10.4999 16.8301 11.3999 16.3401 11.3999 15.6001C11.3999 15.0501 10.8899 14.6001 10.2499 14.6001H9.19272C8.75486 14.6001 8.3999 14.9551 8.3999 15.3929Z"
                                                            fill=#00619E />
                                                        <path
                                                            d="M21.3999 24.6001C20.8499 24.6001 20.3999 24.1501 20.3999 23.6001C20.3999 23.0501 20.8499 22.6001 21.3999 22.6001H22.3999C22.9499 22.6001 23.3999 23.0501 23.3999 23.6001C23.3999 24.1501 22.9499 24.6001 22.3999 24.6001H21.3999Z"
                                                            fill=#00619E />
                                                        <path
                                                            d="M22.7999 23.6001H21.9999H22.7999ZM22.7999 21.6001H21.9999C21.1199 21.6001 20.3999 22.5001 20.3999 23.6001C20.3999 24.7001 21.1199 25.6001 21.9999 25.6001H22.7999C23.6799 25.6001 24.3999 24.7001 24.3999 23.6001C24.3999 22.5001 23.6799 21.6001 22.7999 21.6001Z"
                                                            fill=#00619E />
                                                        <path
                                                            d="M10.7999 23.6001H9.9999H10.7999ZM10.7999 21.6001H9.9999C9.1199 21.6001 8.3999 22.5001 8.3999 23.6001C8.3999 24.7001 9.1199 25.6001 9.9999 25.6001H10.7999C11.6799 25.6001 12.3999 24.7001 12.3999 23.6001C12.3999 22.5001 11.6799 21.6001 10.7999 21.6001Z"
                                                            fill=#00619E />
                                                        <circle cx=19.3999 cy=19.6001 fill=#00619E r=1 />
                                                        <circle cx=13.3999 cy=19.6001 fill=#00619E r=1 />
                                                    </g>
                                                    <mask fill=white id=path-11-inside-1_17975_9013>
                                                        <ellipse cx=16.3999 cy=8.1001 rx=5 ry=1.5 />
                                                    </mask>
                                                    <path
                                                        d="M19.3999 8.1001C19.3999 7.72926 19.5306 7.4447 19.6461 7.27541C19.7517 7.1206 19.8474 7.05442 19.8499 7.05264C19.858 7.04691 19.8261 7.0701 19.7343 7.11088C19.6456 7.15024 19.5223 7.19664 19.3607 7.24511C18.6894 7.44651 17.6421 7.6001 16.3999 7.6001V11.6001C17.9192 11.6001 19.3718 11.4179 20.5101 11.0764C21.0665 10.9095 21.6625 10.671 22.164 10.3153C22.6136 9.99642 23.3999 9.27683 23.3999 8.1001H19.3999ZM16.3999 7.6001C15.1578 7.6001 14.1104 7.44651 13.4391 7.24511C13.2775 7.19664 13.1542 7.15024 13.0655 7.11088C12.9737 7.0701 12.9418 7.04691 12.9499 7.05264C12.9524 7.05442 13.0481 7.1206 13.1537 7.27541C13.2692 7.4447 13.3999 7.72926 13.3999 8.1001H9.3999C9.3999 9.27683 10.1862 9.99642 10.6358 10.3153C11.1373 10.671 11.7333 10.9095 12.2897 11.0764C13.428 11.4179 14.8806 11.6001 16.3999 11.6001V7.6001ZM13.3999 8.1001C13.3999 8.47093 13.2692 8.75549 13.1537 8.92479C13.0481 9.07959 12.9524 9.14578 12.9499 9.14755C12.9418 9.15328 12.9737 9.1301 13.0655 9.08932C13.1542 9.04995 13.2775 9.00356 13.4391 8.95509C14.1104 8.75368 15.1578 8.6001 16.3999 8.6001V4.6001C14.8806 4.6001 13.428 4.7823 12.2897 5.12378C11.7333 5.29071 11.1373 5.52919 10.6358 5.88491C10.1862 6.20378 9.3999 6.92337 9.3999 8.1001H13.3999ZM16.3999 8.6001C17.6421 8.6001 18.6894 8.75368 19.3607 8.95509C19.5223 9.00356 19.6456 9.04995 19.7343 9.08932C19.8261 9.1301 19.858 9.15328 19.8499 9.14755C19.8474 9.14578 19.7517 9.07959 19.6461 8.92479C19.5306 8.75549 19.3999 8.47093 19.3999 8.1001H23.3999C23.3999 6.92337 22.6136 6.20378 22.164 5.88491C21.6625 5.52919 21.0665 5.29071 20.5101 5.12378C19.3718 4.7823 17.9192 4.6001 16.3999 4.6001V8.6001Z"
                                                        fill=#00619E mask=url(#path-11-inside-1_17975_9013) />
                                                    <defs>
                                                        <clipPath id=clip0_17975_9013>
                                                            <rect fill=white height=14 transform="translate(8.3999 11.6001)"
                                                                width=16 />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <br>
                                                <p class="mb-0 mt-2"> View All </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="recommended mb-4">
                            <h5 class="mb-2 fs-6 fw-semibold">Recommended</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    <i class="fa-solid fa-tag"></i> Shop Great Deals
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    <i class="fa-solid fa-circle-right" style="transform: rotate(45deg)"></i> Price Drops
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    <i class="fa-solid fa-truck-fast"></i> Free Shipping
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    <i class="fa-solid fa-plug"></i> Clean Vehicle Tax Credit
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Cars Under $20,000
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Delivery by Wednesday
                                </a>
                            </div>
                        </div>

                        <div class="trending-models mb-4">
                            <h5 class="mb-2 fs-6 fw-semibold">Trending models</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Rivian R1S/R1T
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Tesla Model 3
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Chevrolet Equinox
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Nissan Rogue
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Ford Escape
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Ford Explorer
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Toyota Camry
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Honda Civic
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Nissan Altima
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Jeep Grand Cherokee
                                </a>
                                <a href="#" class="text-decoration-none d-inline-block px-3 py-2 border rounded">
                                    Ford F-150 SuperCrew
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Rental Fleet -->
    <section class="bg-white service-item-list">
        <div class="container py-4 py-md-5">
            <h2 class="mb-3 fs-28 fw-semibold text-center text-md-start"> Our Rental Fleet </h2>

            <div class="row g-0 g-md-4">

                <!-- Service Item -->
                @foreach ($cars as $car)
                    <div class="col-12">
                        <div class="service-card">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="service-img-container"
                                        style="background-image: url('{{ $car->cover_image }}')">
                                        <a href="#" class="overlay-link"></a>

                                        <button class="bg-transparent border-0 wishlist-btn position-absolute theme-color"
                                            data-bs-toggle="tooltip" title="Add to wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>

                                        <div class="sm-content position-absolute d-md-none">
                                            <h3 class="service-title fw-medium fs-4"> {{ $car->title }} </h3>

                                            <div class="service-content justify-content-center">
                                                <p class="price mb-0 mb-md-1"> {{ $car->selling_price }} </p>
                                                <p class="down-price text-start text-md-center mb-2"> <span>
                                                        {{ $car->down_payment }} </span>
                                                    Downpayment <span> {{ $car->weekly_rent }} </span> Weekly Rent </p>

                                                <ul class="feature-list">
                                                    @foreach ($car->carFeature as $feature)
                                                        <li>{{ $feature->feature }}</li>
                                                    @endforeach
                                                </ul>

                                                <div class="row g-2 align-items-end">
                                                    <div class="col-4">
                                                        <a href="#!"
                                                            class="btn theme-btn text-light py-1 px-2 w-100">
                                                            Buy Now </a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#!"
                                                            class="btn theme-btn text-light py-1 px-2 w-100">
                                                            Rent to Own </a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a href="#!"
                                                            class="btn theme-btn text-light py-1 px-2 w-100">
                                                            Features List </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8 d-none d-md-block">
                                    <div class="row align-items-center justify-content-between">
                                        <div class="col-md-12 col-lg-8">
                                            <a href="./vehicle-details.html" class="text-decoration-none">
                                                <div class="service-content">
                                                    <h3 class="service-title fw-medium fs-4"> {{ $car->title }} </h3>
                                                    <ul class="feature-list">
                                                        @foreach ($car->carFeature as $feature)
                                                            <li>{{ $feature->feature }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <div class="service-content ps-0 justify-content-center">
                                                <h4 class="price text-start text-md-center mb-2">{{ $car->selling_price }}
                                                    <sub> Was <del>
                                                            {{ $car->reguller_price }} </del> </sub></h4>
                                                <a href="#!"
                                                    class="btn theme-btn text-light py-2 px-4 fs-6 w-100 mb-4">
                                                    Buy Now Price </a>
                                                <p class="down-price mb-1"> <span> {{ $car->down_payment }} </span>
                                                    Downpayment <span> {{ $car->weekly_rent }}
                                                    </span> Weekly Rent </p>
                                                <a href="#!" class="btn theme-btn text-light py-2 px-4 fs-6"> Rent to
                                                    Own
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{ $cars->links('pagination::bootstrap-5') }}

            </div>

        </div>
    </section>
@endsection
