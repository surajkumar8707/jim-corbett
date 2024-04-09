@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Jungle Safari</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Jungle Safari</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Main Content -->
    <div class="container-fluid py-5">
        {{-- <div class="row">
        <div class="col-lg-8">
            <h2 class="text-primary mb-4">Discover the Untamed Wilderness</h2>
            <p>Embark on an exhilarating journey through the heart of the jungle with our expert guides. Our jungle safari tours offer a unique opportunity to immerse yourself in the wonders of nature and witness the diverse wildlife and stunning landscapes of some of the world's most pristine wilderness areas.</p>
            <h3 class="text-primary mt-5 mb-4">Highlights of Our Jungle Safari Tours</h3>
            <ul>
                <li>Guided tours led by experienced naturalists and wildlife experts</li>
                <li>Opportunities to spot rare and endangered species in their natural habitat</li>
                <li>Comfortable accommodations in eco-friendly lodges and campsites</li>
                <li>Customizable itineraries to suit your interests and schedule</li>
                <li>Optional activities such as birdwatching, nature walks, and cultural experiences</li>
            </ul>
            <h3 class="text-primary mt-5 mb-4">Our Safari Packages</h3>
            <p>Choose from a variety of safari packages tailored to suit different preferences and interests:</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Classic Safari</h5>
                            <p class="card-text">Ideal for wildlife enthusiasts and first-time visitors, this package offers an immersive safari experience with guided tours, comfortable accommodations, and exciting activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Photography Safari</h5>
                            <p class="card-text">Designed for photography enthusiasts, this package provides exclusive opportunities to capture stunning images of wildlife and landscapes under the guidance of professional photographers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-primary mt-5 mb-4">Book Your Adventure</h3>
            <p>Ready to embark on your jungle safari adventure? Book your tour now and prepare for an unforgettable experience in the heart of nature.</p>
        </div>
        <div class="col-lg-4">
            <div class="bg-light p-4">
                <h4 class="text-primary mb-4">Book Your Jungle Safari</h4>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <select class="form-control" id="destination" name="destination">
                            <option value="1">Amazon Rainforest</option>
                            <option value="2">Sundarbans Mangrove Forest</option>
                            <option value="3">Maasai Mara National Reserve</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Select Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="participants">Number of Participants</label>
                        <input type="number" class="form-control" id="participants" name="participants" min="1">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                </form>
            </div>
        </div>
    </div> --}}

        <center>
            <h1 class="text-primary">Jungle Safari Price And Zones</h1>
        </center>

        <div class="col-sm-12 col-xs-12">
            <ul class="nav nav-tabs">
                <li class="active"><a class="btn btn-primary active" data-toggle="tab" href="#Jeep"
                        aria-expanded="true">Jeep</a></li>
                <li class=""><a class="btn btn-primary" data-toggle="tab" href="#Canter"
                        aria-expanded="false">Canter</a></li>
                <li class=""><a class="btn btn-primary" data-toggle="tab" href="#Elephant"
                        aria-expanded="false">Elephant</a></li>
            </ul>

            <div class="tab-content">
                <div id="Jeep" class="tab-pane fade active in show">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/pricing.png" class="icons">
                                <h4>Pricing</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> INR 7000-10000 / -
                                            Jeep</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Maximum 6
                                            Persons &amp; 2 children</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Between - 5 to
                                            12 years</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> allowed in ONE
                                            Jeep</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/zone.png" class="icons">
                                <h4>Zone</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Bijrani ,
                                            Garjiya</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Jhirna ,
                                            Dhela</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png">
                                            Durgadevi , Phato</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png">
                                            Sitabani</span></li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/Timing.png" class="icons">
                                <h4>Timing</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Morning 6:00
                                            AM - 9.30 AM</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Evening 3:00
                                            PM - 6:00 PM</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Safari Timing
                                            Varies</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Season
                                            Changes</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/Inclusion.png" class="icons">
                                <h4>Inclusion</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Permission of
                                            CTR</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Jeep</span>
                                    </li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Driver</span>
                                    </li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Permit and All
                                            Entries &amp; Taxes.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Canter" class="tab-pane fade">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/pricing.png" class="icons">
                                <h4>Pricing</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> INR 3500-4500 /
                                            Person</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> ONE Canter has
                                            16 Seats</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/zone.png" class="icons">
                                <h4>Zone</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Peaceful
                                            Dhikala</span></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/Timing.png" class="icons">
                                <h4>Timing</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Morning 6:00
                                            AM - 11.00 AM</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Evening 11:15 AM -
                                            5:00 PM<br>You have to reach 45 min before safari start.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Elephant" class="tab-pane fade">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/pricing.png" class="icons">
                                <h4>Pricing</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> INR 3500 Indian
                                            (Only 4 Person Allow in one Elephant)</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> INR 5500 Foreigner
                                            (Only 4 Person Allow in one Elephant)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/zone.png" class="icons">
                                <h4>Zone</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Corbett landscape
                                            Zone</span></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-12 my-3">
                            <div class="jeep-grid">
                                <img src="https://jimcorbett.in/image/icons/Timing.png" class="icons">
                                <h4>Timing</h4>
                                <ul class="list-unstyled">
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> Timings are Between
                                            6 AM to 6 PM (Elephant safari is for only 1 hr) </span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> You can choose only
                                            Morning or Evening slot at the time of booking</span></li>
                                    <li><span><img src="https://jimcorbett.in/image/icons/check-d.png"> You can finalise
                                            your timings from the Elephant safari Coordinator after booking.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <center class="my-4">
                <h1 class="text-primary">Safari Image</h1>
            </center>
            <div class="row">
                <div class="col-md-6 my-3">
                    <img class="w-100 img-thumbnail" src="{{ public_asset('assets/frontend/img/safari/safari1.jpg') }}"
                        alt="">
                </div>

                <div class="col-md-6 my-3">
                    <img class="w-100 img-thumbnail" src="{{ public_asset('assets/frontend/img/safari/safari4..jpg') }}"
                        alt="">
                </div>

                <div class="col-md-6 my-3">
                    <img class="w-100 img-thumbnail" src="{{ public_asset('assets/frontend/img/safari/safari3.jpg') }}"
                        alt="">
                </div>

                <div class="col-md-6 my-3">
                    <img class="w-100 img-thumbnail" src="{{ public_asset('assets/frontend/img/safari/safari2.jpg') }}"
                        alt="">
                </div>

            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
