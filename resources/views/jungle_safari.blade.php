@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <div class="container-fluid page-header" style="">
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

        <div class="container-fluid">
            <img class="w-100" src="{{ public_asset('assets/images/Corbett Banner_0.jpg') }}" alt="">
        </div>
        <center class="my-3">
            <h1 class="text-primary">Jungle safari</h1>
        </center>

        <div class="">
            <p>
                Ramnagar, nestled in Uttarakhand, India, is renowned as the gateway to Jim Corbett National Park, one of
                India's oldest and most esteemed national parks.
                Venturing on a jungle safari from Ramnagar into Jim Corbett National Park presents a distinctive chance to
                delve into the lush biodiversity of the Himalayan foothills. The park harbors a plethora of flora and fauna,
                featuring the regal Bengal tiger, Asian elephants, leopards, sloth bears, and an array of avian species.
                As you journey into the park, whether aboard a jeep or an elephant for safari, you'll navigate through dense
                forests, winding rivers, and open grasslands, all while scanning for glimpses of wildlife. Accompanied by
                knowledgeable guides and naturalists, you'll gain insights into the park's ecosystem, its inhabitants, and
                the ongoing conservation initiatives aimed at safeguarding them.

            </p>

            <p>
                In addition to wildlife safaris, tourists in Ramnagar can delight in activities such as birdwatching, nature
                strolls, and delving into the cultural heritage of the area. With its breathtaking landscapes and thriving
                wildlife, a jungle safari in Ramnagar ensures an unforgettable adventure amidst the marvels of nature.
            </p>

            <ol>
                <li>Ramnagar acts as the entrance to Jim Corbett National Park, one of India's oldest and most renowned national parks.</li>
                <li>Jungle safaris in Ramnagar provide an opportunity for visitors to discover the varied flora and fauna of the Himalayan foothills.</li>
                <li>The park is celebrated for its Bengal tiger population, alongside other wildlife such as elephants, leopards, sloth bears, and diverse bird species.</li>
                <li>Safaris are conducted through different means, including jeep, elephant-back, and walking safaris, each offering a distinct perspective of the park.</li>
                <li>Experienced guides and naturalists accompany visitors on safaris, offering insights into the park's ecosystem and wildlife behavior.</li>
                <li>The park's diverse terrain encompasses dense forests, rivers, and grassy plains, creating diverse habitats for its residents.</li>
                <li>Wildlife enthusiasts can experience exhilarating encounters with iconic species like the Bengal tiger, while observing numerous other animals in their natural habitats.</li>
                <li>Birdwatching is a popular activity, with the park hosting a multitude of bird species, both resident and migratory.</li>
                <li>Visitors can immerse themselves in nature's tranquility, escaping the urban hustle and bustle, while contributing to ecotourism and conservation efforts.</li>
                <li>Alongside safaris, Ramnagar offers opportunities for nature walks, cultural exploration, culinary experiences, and admiring the scenic beauty of the surroundings.</li>
            </ol>
        </div>

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
            <center class="my-4">
                <h1 class="text-primary">Why to famous jungle safaris ramnagar</h1>
            </center>
            <div class="">
                <p>
                    Renowned as the gateway to Jim Corbett National Park, one of India's oldest and most renowned national parks, Ramnagar in Uttarakhand, India, is celebrated for its jungle safaris. Here's why these safaris are famous:
                </p>

                <p>
                    <strong>1.	Tiger Reserve: </strong> Jim Corbett National Park, designated as a tiger reserve, offers one of India's premier opportunities to witness the majestic Bengal tiger in its natural environment.
                </p>
                <p>
                    <strong>2.	Rich Biodiversity: </strong> The park boasts a diverse array of flora and fauna, comprising various mammal species, birds, reptiles, and insects. Alongside tigers, visitors may encounter Asian elephants, leopards, sloth bears, deer, and a multitude of bird species.
                </p>

                <p>
                    <strong>3.	Scenic Landscapes: </strong> Encompassing varied terrain such as dense forests, grasslands, riverine belts, and hilly expanses, the park presents breathtaking vistas and distinctive wildlife habitats.
                </p>

                <p>
                    <strong>4.	Variety of Safari Options:</strong>  Visitors can select from multiple safari choices, including jeep safaris, elephant safaris, and canter safaris, each offering a unique perspective on the park's wildlife and landscapes.
                </p>

                <p>
                    <strong>5.	Experienced Guides: </strong> Accompanying safari expeditions are knowledgeable naturalists and guides, providing valuable insights into the park's ecology, wildlife behaviour, and conservation initiatives.
                </p>

                <p>
                    <strong>6.	Birdwatching Paradise: </strong> With over 600 bird species documented, the park is a paradise for birdwatchers, showcasing both resident and migratory birds, including eagles, vultures, owls, waterfowl, and more.
                </p>

                <p>
                    <strong>7.	Adventure and Thrills : </strong> Jungle safaris in Jim Corbett National Park promise adventure and excitement as visitors traverse rugged terrain, ford rivers, and navigate dense forests in search of wildlife sightings.
                </p>

                <p>
                    <strong>8.	Conservation Legacy: </strong> With a rich conservation heritage as one of India's oldest national parks, Jim Corbett plays a pivotal role in safeguarding endangered species and preserving their natural habitats.
                </p>

                <p>
                    <strong>9.	Nature Photography: </strong> The park's picturesque landscapes and diverse wildlife offer abundant opportunities for nature photographers to capture stunning images of wildlife, scenery, and natural wonders.
                </p>
                <p>
                    <strong>10.	Cultural Experience: </strong> Beyond wildlife encounters, visitors can delve into the cultural heritage of the region, engaging with local communities, exploring nearby villages, and savouring traditional cuisine and customs.
                </p>

                <p>These factors contribute to the renowned status of jungle safaris in Ramnagar, especially within Jim Corbett National Park, drawing wildlife enthusiasts, nature lovers, and adventure seekers from across the globe.</p>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
