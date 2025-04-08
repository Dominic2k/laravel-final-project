@extends('master')
@section('content')
<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    @include('Component.header')
    <div class="container-fluid py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Indulge in an exquisite culinary journey where flavors blend harmoniously. Savor the finest ingredients, artfully crafted into delightful dishes, and experience the warmth of exceptional hospitality in an elegant ambiance.</p>
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{ asset('source/img/hero.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Expert Chefs</h5>
                        <p>Our highly skilled chefs bring creativity and passion to every dish, using fresh ingredients and innovative techniques to craft unforgettable culinary experiences for every guest.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>High-Quality Ingredients</h5>
                        <p>We carefully select only the freshest and finest ingredients, ensuring that every meal we serve is not only delicious but also nutritious, flavorful, and made with love and dedication.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>Easy Online Ordering</h5>
                        <p>Order your favorite meals effortlessly with just a few clicks through our user-friendly platform, and enjoy fast, reliable delivery straight to your doorstep for ultimate convenience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>24/7 Customer Support</h5>
                        <p>Our dedicated support team is available around the clock to assist you with any inquiries, special requests, or concerns, ensuring a seamless and hassle-free dining experience at all times.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Service End -->
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('source/img/about-1.jpg') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('source/img/about-2.jpg') }}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('source/img/about-3.jpg') }}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('source/img/about-4.jpg') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Ondakino</h1>
                <p class="mb-4">At Ondakino, we are passionate about bringing you a unique dining experience where flavors, ambiance, and exceptional service come together. Every dish is carefully crafted using the finest ingredients to ensure an unforgettable meal.</p>
                <p class="mb-4">Our restaurant is a perfect blend of tradition and innovation, offering a menu inspired by both classic and contemporary cuisine. Whether you're here for a casual meal or a special occasion, our warm and welcoming atmosphere ensures a delightful experience for every guest.</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Menu Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Drink</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Food</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Others</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    @if (!empty($message))
                        <p>{{ $message }}</p>
                    @else
                    <div class="row g-4">
                        @foreach($drinks as $drink)
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <a href="details/{{$drink->product_id}}"><img class="flex-shrink-0 img-fluid rounded" src="source/img/{{ $drink->image }}" alt="" style="width: 80px; height: 80px; object-fit: cover;object-position: center"></a>
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>{{ $drink->product_name }}</span>
                                            <span class="text-primary">${{ $drink->price }}</span>
                                        </h5>
                                        <small class="fst-italic">{{ $drink->description }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    @if (!empty($message))
                        <p>{{ $message }}</p>
                    @else
                    <div class="row g-4">
                        @foreach($foods as $food)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <a href="details/{{$food->product_id}}"><img class="flex-shrink-0 img-fluid rounded" src="source/img/{{ $food->image }}" alt="" style="width: 80px;height: 80px; object-fit: cover;object-position: center"></a>
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$food->product_name}}</span>
                                        <span class="text-primary">${{$food->price}}</span>
                                    </h5>
                                    <small class="fst-italic">{{$food->description}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    @if (!empty($message))
                        <p>{{ $message }}</p>
                    @else
                    <div class="row g-4">
                        @foreach($others as $other)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <a href="details/{{$other->product_id}}"><img class="flex-shrink-0 img-fluid rounded" src="source/img/{{ $other->image }}" alt="" style="width: 80px;"></a>
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{ $other->product_name  }}</span>
                                        <span class="text-primary">${{ $other->price }}</span>
                                    </h5>
                                    <small class="fst-italic">{{ $other->description }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
<!-- Team Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            @foreach($chefs as $index => $chef)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="source/img/{{ $chef->image }}" alt="">
                        </div>
                        <h5 class="mb-0">{{ $chef->name }}</h5>
                        <small>{{ $chef->specialty }}</small>
                        <div class="d-flex justify-content-center mt-3">
                            @if(isset($chef->social_links['facebook']))
                                <a class="btn btn-square btn-primary mx-1" href="{{ $chef->social_links['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if(isset($chef->social_links['twitter']))
                                <a class="btn btn-square btn-primary mx-1" href="{{ $chef->social_links['twitter'] }}"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if(isset($chef->social_links['instagram']))
                                <a class="btn btn-square btn-primary mx-1" href="{{ $chef->social_links['instagram'] }}"><i class="fab fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->
<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach($feedbacks as $feedback)
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p class="text-truncate-2">{{ $feedback->message }}</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('source/img/default-avt.jpg') }}" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">{{ $feedback->name }}</h5>
                            <small>{{ Str::mask($feedback->email, '*', 2, strpos($feedback->email, '@') - 2) }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
