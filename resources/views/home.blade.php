@extends('layouts.app')

@push('styles')
    <style>
        .rating-container {
            margin-bottom: 20px;
        }

        .stars {
            color: #ffd700;
            /* Gold color */
        }

        .star {
            font-size: 20px;
        }

        .average-rating {
            font-size: 18px;
            font-weight: bold;
            margin-top: 5px;
        }

        .review {
            margin-bottom: 15px;
        }

        .reviewer {
            font-weight: bold;
        }

        .rating {
            margin-bottom: 5px;
        }

        .comment {
            font-style: italic;
        }

        .slick-prev:before,
        .slick-next:before {
            color: green !important;
            /* Change the color to green */
        }
    </style>

    <!-- Add CSS/JS links for Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
@endpush

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        @if (count($home_page_carousel) > 0)
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @forelse ($home_page_carousel as $key => $carousel)
                        <div class="carousel-item @if ($key == 0) active @endif">
                            <img class="w-100" src="{{ public_asset($carousel->image) }}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                    <h1 class="display-4 text-white mb-md-4">{{ $carousel->title }}</h1>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        @else
        @endif
        {{-- <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('public/assets/frontend/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('public/assets/frontend/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div> --}}
    </div>
    <!-- Carousel End -->


    {{-- <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End --> --}}

    <!-- Home Page Instro Start -->
    <div class="container-fluid my-5">
        <div class="container mt-5">
            <div class="text-center mb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Home Page</h6>
                <h1>Welcome to {{ isset(getSettings()->app_name) ? getSettings()->app_name : '' }}</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="w-100" class="img-thumbnail" src="{{ public_asset("assets/images/garjiya_temple.jpg") }}"
                            alt="">
                    </div>
                    <div class="col-md-6">
                        <h5>Garjiya Devi Temple</h5>
                        <p class="py-2 text-justify" style="text-indent: 50px;">
                            Garjiya Devi Temple, situated on the banks of the Kosi River near Ramnagar in Uttarakhand,
                            India, is a revered Hindu sanctuary dedicated to Goddess Parvati, known as Garjiya Devi. Rooted
                            in mythology and folklore, the temple serves as a significant pilgrimage site attracting
                            devotees, pilgrims, and tourists seeking spiritual blessings and solace.
                            According to legend, the temple's inception is attributed to Muni Anand, a sage who purportedly
                            discovered an idol of Goddess Parvati submerged in the waters of the Kosi River. This auspicious
                            find led to the construction of the temple, which subsequently evolved into a sacred place of
                            worship and reverence.
                            The allure of Garjiya Devi Temple extends beyond its religious significance, as it is nestled
                            amidst the verdant Kumaon hills, offering visitors a scenic retreat. The suspension bridge
                            spanning the river further enhances the pilgrimage experience, providing breathtaking views of
                            the tranquil surroundings.
                            Throughout the year, devotees congregate at the temple, with heightened fervour during festivals
                            such as Navratri and Kartik Poornima, to partake in special prayers and rituals. Garjiya Devi
                            Temple epitomizes faith, cultural heritage, and natural splendour, inviting all to bask in its
                            divine aura and serene ambiance.

                        </p>
                    </div>
                </div>

                <h5>why to famous of Garjiya Devi, temple</h5>
                <p class="py-2 text-justify">
                    <strong>1. &nbsp;&nbsp;	Religious Significance: </strong>Garjiya Devi Temple holds profound reverence among Hindu devotees, dedicated to Goddess Parvati, revered as Garjiya Devi. Pilgrims flock to this sacred site to seek blessings for prosperity, protection, and the fulfilment of their desires.
                </p>

                <p class="py-2 text-justify">
                    <strong>2. &nbsp;&nbsp;	Mythological Legend: </strong> Rooted in local folklore, the temple's origins are attributed to the discovery of an idol of Goddess Parvati submerged in the waters of the Kosi River by the sage Muni Anand. This auspicious finding led to the establishment of the temple, which has since become a revered sanctuary of worship.
                </p>

                <p class="py-2 text-justify">
                    <strong>3. &nbsp;&nbsp;	Scenic Location: </strong>Situated atop a small hillock amidst the picturesque landscape of the Kumaon hills, Garjiya Devi Temple offers captivating vistas of the Kosi River and verdant forests. Its scenic splendour enhances its allure, drawing not only pilgrims but also nature enthusiasts and tourists seeking serene surroundings.
                </p>

                <p class="py-2 text-justify">
                    <strong>4. &nbsp;&nbsp;	Cultural Importance: </strong>Integral to the cultural fabric of the Kumaon region, Garjiya Devi Temple holds significance in religious festivities such as Navratri and Kartik Poornima. These occasions witness fervent participation in special prayers and rituals, underscoring the temple's cultural relevance and spiritual significance.
                </p>

                <p class="py-2 text-justify">
                    <strong>5. &nbsp;&nbsp;	Hanging Bridge: </strong>A notable feature enhancing the renown of Garjiya Devi Temple is its hanging bridge, which traverses the Kosi River and provides access to the temple grounds. Crossing this bridge is regarded as an integral aspect of the pilgrimage, offering visitors an adventurous element to their spiritual journey.
                </p>

                <p class="py-2 text-justify">
                    <strong>6. &nbsp;&nbsp;	Tourist Attraction: </strong>Beyond its religious importance, Garjiya Devi Temple serves as a prominent tourist attraction. Visitors are captivated not only by the temple's spiritual ambiance but also by its architectural elegance and the scenic grandeur of its environs.
                </p>
            </div>
        </div>
    </div>

    <!-- Home Page Instro end -->

    <!-- Guide Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="text-center mb-3">
                {{-- <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Home Page</h6> --}}
                <h1>Your Guide to {{ isset(getSettings()->app_name) ? getSettings()->app_name : '' }}</h1>
            </div>
            <div class="container">
                <p class="py-2 text-justify" style="text-indent: 50px;line-height:30px;">
                    Fun fact: {{ isset(getSettings()->app_name) ? getSettings()->app_name : '' }} was an Indian-born Brit
                    who was most well-known as a master tiger hunter. Not exactly what we would call conservation today. But
                    back in the early 1900s {{ isset(getSettings()->app_name) ? getSettings()->app_name : '' }} tracked
                    man-eating tigers expertly and protected the small villages of Uttar Pradesh. Despite his dubious
                    conservation techniques (at the time there were MANY more tigers in Indian jungles), he was responsible
                    for establishing India’s very first national park (this one) to protect the unique species inside it.
                </p>
            </div>
            <div class="row">
                @forelse ($tour_packages as $key => $package)
                    {{-- @dd($package) --}}
                    <div class="col-lg-4_ col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="{{ public_asset($package->images) }}" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    {{-- <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small> --}}
                                    <small class="m-0"><i
                                            class="fa fa-calendar-alt text-primary mr-2"></i>{{ $package->duration }}</small>
                                    {{-- <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small> --}}
                                </div>
                                <a class="h5 text-decoration-none"
                                    href="{{ route('package.show', $package->id) }}">{{ $package->name }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        {{-- @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $package->rating)
                                                <i class="fa fa-star text-primary"></i>
                                            @else
                                                <i class="far fa-star text-primary"></i>
                                            @endif
                                        @endfor --}}
                                        <h6 class="m-0">
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            <i class="fa fa-star text-primary"></i>
                                            4
                                            <small>(1250)</small>
                                        </h6>
                                        <h5 class="m-0">{{ $package->price }} <i class="fa fa-rupee-sign  mr-2"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Guide end -->


    <!-- Animal Most like Start -->
    <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="text-center mb-3">
                {{-- <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Home Page</h6> --}}
                <h1>What Animals Are You Most Likely to See in
                    {{ isset(getSettings()->app_name) ? getSettings()->app_name : '' }} ?</h1>
            </div>
            <div class="container">
                <p class="py-2 text-justify" style="text-indent: 30px;line-height:25px;">
                    Even if you don’t see tigers inside {{ isset(getSettings()->app_name) ? getSettings()->app_name : '' }}
                    you will probably see wild elephants because the park has a huge population. And they are relatively
                    easy to spot since they like to follow the park trails for easier movement. You’ll also probably see
                    tropical birds, chital deer, sambar deer, jackal, mongoose, grey langurs, rhesus macaques, and barking
                    deer.
                </p>

                <div class="row">
                    {{-- <div class="col-md-4 my-2">
                        <img class="img-thumbnail" src="{{ public_asset('assets/frontend/img/jim-corbett.jpg') }}"
                            alt="">
                    </div>
                    <div class="col-md-4 my-2">
                        <img class="img-thumbnail" src="{{ public_asset('assets/frontend/img/jim-corbett.jpg') }}"
                            alt="">
                    </div> --}}
                    {{-- <div class="col-md-4 my-2">
                        <img class="img-thumbnail" src="{{ public_asset('assets/frontend/img/jim-corbett.jpg') }}"
                            alt="">
                    </div> --}}

                    @forelse ($corbett_packages as $key => $package)
                        {{-- @dd($package) --}}
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="package-item bg-white mb-2">
                                <img class="img-fluid" src="{{ public_asset($package->images) }}" alt="">
                                <div class="p-4">
                                    {{-- <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i
                                                class="fa fa-calendar-alt text-primary mr-2"></i>{{ $package->duration }}</small>
                                    </div> --}}
                                    <a class="h3 text-decoration-none"
                                        href="{{ route('package.show', $package->id) }}">{{ $package->name }}</a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <p>{{ $package->description }}</p>
                                            {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6> --}}
                                            {{-- <h5 class="m-0">{{ $package->price }} <i class="fa fa-rupee-sign mr-2"></i> </h5> --}}
                                        </div>
                                        <p><strong>Duration: </strong> {{ $package->duration }}</p>
                                        <p><strong>Price: </strong> {{ $package->price }} <i
                                                class="fa fa-rupee-sign mr-2"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Animal Most like end -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Packages Start -->
    <div class="container-fluid ">
        <div class="container pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                @forelse ($packages as $key => $package)
                    {{-- @dd($package) --}}
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="{{ public_asset($package->images) }}" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    {{-- <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small> --}}
                                    <small class="m-0"><i
                                            class="fa fa-calendar-alt text-primary mr-2"></i>{{ $package->duration }}</small>
                                    {{-- <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small> --}}
                                </div>
                                <a class="h5 text-decoration-none"
                                    href="{{ route('package.show', $package->id) }}">{{ $package->name }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6> --}}
                                        <h5 class="m-0">{{ $package->price }} <i class="fa fa-rupee-sign  mr-2"></i>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Packages End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center mx-auto">
                {{-- <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum
                        ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam
                        </li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.
                        </li>
                    </ul>
                </div> --}}
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Enquiry</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">

                            <form action="{{ route('enquiry.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                                    @error('message')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                            {{-- <form action="{{ route('enquiry.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form> --}}

                            {{-- <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Select a destination</option>
                                        <option value="1">destination 1</option>
                                        <option value="2">destination 1</option>
                                        <option value="3">destination 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Registration Start -->
    <div class="container-fluid" style="margin: 90px 0;">
        <div class="container ">
            {{-- <div class="rating-container">
                <div class="stars">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
                <div class="average-rating">Average Rating: 4.5</div>
            </div>

            <div class="reviews-container">
                <div class="review">
                    <div class="reviewer">John Doe</div>
                    <div class="rating">Rating: 4.5</div>
                    <div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae ante eget
                        libero malesuada vestibulum. Ut feugiat odio nec risus accumsan, nec lobortis sapien condimentum.
                        Donec nec mauris elit.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Jane Smith</div>
                    <div class="rating">Rating: 5.0</div>
                    <div class="comment">Integer nec quam vel orci gravida hendrerit. Vivamus a quam sit amet lacus aliquet
                        tristique. Phasellus congue libero sit amet massa sollicitudin, eget consequat justo efficitur.
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer">Michael Johnson</div>
                    <div class="rating">Rating: 4.0</div>
                    <div class="comment">Vestibulum convallis orci ut elit mollis, eget venenatis mi laoreet. Proin ac
                        lectus at felis dignissim viverra nec vel ipsum.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Emily Brown</div>
                    <div class="rating">Rating: 3.5</div>
                    <div class="comment">Suspendisse potenti. Proin ut nisi a purus tempor interdum. Integer vel nibh sit
                        amet nisl dignissim ullamcorper.</div>
                </div>
                <div class="review">
                    <div class="reviewer">David Williams</div>
                    <div class="rating">Rating: 4.5</div>
                    <div class="comment">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis egestas. Nam nec orci vel ante sollicitudin convallis.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Sarah Taylor</div>
                    <div class="rating">Rating: 5.0</div>
                    <div class="comment">Aenean sed velit et purus tempus dapibus. Sed vel risus id lectus viverra
                        consectetur. Curabitur sed lacus ut nisl fringilla dapibus ac sed orci.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Christopher Lee</div>
                    <div class="rating">Rating: 4.0</div>
                    <div class="comment">Fusce nec nunc vel mi mattis consequat. Proin quis tellus odio. Phasellus id diam
                        vel sem vulputate blandit eget sed justo.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Olivia Martinez</div>
                    <div class="rating">Rating: 4.5</div>
                    <div class="comment">Nulla facilisi. Maecenas ac quam at dolor finibus accumsan. Fusce auctor, dui ut
                        sollicitudin fermentum, urna eros lacinia purus, nec ultricies magna nisi nec est.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Daniel Garcia</div>
                    <div class="rating">Rating: 3.5</div>
                    <div class="comment">Vestibulum dignissim, mauris at fringilla placerat, libero nulla vestibulum velit,
                        ac vulputate arcu orci vitae ipsum. Etiam malesuada ligula nec felis vehicula.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Sophia Clark</div>
                    <div class="rating">Rating: 4.0</div>
                    <div class="comment">Donec consectetur, libero et rutrum commodo, odio quam dignissim quam, sit amet
                        lacinia lorem ipsum at lacus.</div>
                </div>
            </div> --}}

            <div class="rating-container">
                <div class="stars">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
                <div class="average-rating">Average Rating: 4.5</div>
            </div>

            <div class="reviews-slider">
                <div class="review">
                    <div class="reviewer">John Doe</div>
                    <div class="rating">Rating: 4.5</div>
                    <div class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae ante eget
                        libero
                        malesuada vestibulum. Ut feugiat odio nec risus accumsan, nec lobortis sapien condimentum. Donec nec
                        mauris elit.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Jane Smith</div>
                    <div class="rating">Rating: 5.0</div>
                    <div class="comment">Integer nec quam vel orci gravida hendrerit. Vivamus a quam sit amet lacus aliquet
                        tristique. Phasellus congue libero sit amet massa sollicitudin, eget consequat justo efficitur.
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer">Michael Johnson</div>
                    <div class="rating">Rating: 4.0</div>
                    <div class="comment">Vestibulum convallis orci ut elit mollis, eget venenatis mi laoreet. Proin ac
                        lectus
                        at felis dignissim viverra nec vel ipsum.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Emily Brown</div>
                    <div class="rating">Rating: 3.5</div>
                    <div class="comment">Suspendisse potenti. Proin ut nisi a purus tempor interdum. Integer vel nibh sit
                        amet
                        nisl dignissim ullamcorper.</div>
                </div>
                <div class="review">
                    <div class="reviewer">David Williams</div>
                    <div class="rating">Rating: 4.5</div>
                    <div class="comment">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                        turpis
                        egestas. Nam nec orci vel ante sollicitudin convallis.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Sarah Taylor</div>
                    <div class="rating">Rating: 5.0</div>
                    <div class="comment">Aenean sed velit et purus tempus dapibus. Sed vel risus id lectus viverra
                        consectetur.
                        Curabitur sed lacus ut nisl fringilla dapibus ac sed orci.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Christopher Lee</div>
                    <div class="rating">Rating: 4.0</div>
                    <div class="comment">Fusce nec nunc vel mi mattis consequat. Proin quis tellus odio. Phasellus id diam
                        vel
                        sem vulputate blandit eget sed justo.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Olivia Martinez</div>
                    <div class="rating">Rating: 4.5</div>
                    <div class="comment">Nulla facilisi. Maecenas ac quam at dolor finibus accumsan. Fusce auctor, dui ut
                        sollicitudin fermentum, urna eros lacinia purus, nec ultricies magna nisi nec est.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Daniel Garcia</div>
                    <div class="rating">Rating: 3.5</div>
                    <div class="comment">Vestibulum dignissim, mauris at fringilla placerat, libero nulla vestibulum velit,
                        ac
                        vulputate arcu orci vitae ipsum. Etiam malesuada ligula nec felis vehicula.</div>
                </div>
                <div class="review">
                    <div class="reviewer">Sophia Clark</div>
                    <div class="rating">Rating: 4.0</div>
                    <div class="comment">Donec consectetur, libero et rutrum commodo, odio quam dignissim quam, sit amet
                        lacinia lorem ipsum at lacus.</div>
                </div>
            </div>
        </div>

    </div>
    <!-- Registration End -->
@endsection


@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.reviews-slider').slick({
                dots: true,
                infinite: true,
                speed: 500, // Increased animation speed for smoother transitions
                slidesToShow: 1,
                slidesToScroll: 1, // Scroll one item at a time
                autoplay: true, // Auto-play the slider
                autoplaySpeed: 5000, // Set autoplay speed to 5 seconds
                arrows: true, // Show arrows for navigation
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>', // Custom prev arrow
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', // Custom next arrow
                fade: true, // Enable fade effect for a smoother transition
                cssEase: 'linear', // Use linear easing for the fade effect
                adaptiveHeight: true,
                responsive: [ // Customize settings for different screen sizes
                    {
                        breakpoint: 768, // Apply these settings for screens smaller than 768px
                        settings: {
                            arrows: false, // Hide arrows for navigation
                            dots: true // Show dots for navigation
                        }
                    }
                ]
            });
        });
    </script>
@endpush
