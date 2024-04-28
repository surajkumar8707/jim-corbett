@extends('layouts.app')

@section('pageTitle', 'Resort')
@section('ogTitle', 'Resort')
@section('ogDescription', "Discover luxurious resorts nestled amidst the serene surroundings of ". getSettings()->app_name .". Experience comfort, tranquility, and warm hospitality amidst the natural beauty of the park.")
@section('twitterTitle', 'Resort')
@section('twitterDescription', "Discover luxurious resorts nestled amidst the serene surroundings of ". getSettings()->app_name .". Experience comfort, tranquility, and warm hospitality amidst the natural beauty of the park.")
@section('keywords', 'Resort')
@section('description', "Discover luxurious resorts nestled amidst the serene surroundings of ". getSettings()->app_name .". Experience comfort, tranquility, and warm hospitality amidst the natural beauty of the park.")

@section('content')
    <!-- Page Header -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Resorts</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Resorts</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Resorts Section -->
    <div class="container-fluid resorts-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="section-title mb-4">Explore Our Resorts</h2>
                    <p class="section-description">Experience luxury and comfort at our exquisite resorts located in breathtaking destinations around the world. Whether you're seeking a tranquil beachfront retreat, an adventurous mountain escape, or a cultural oasis, our resorts offer the perfect blend of relaxation and excitement.</p>
                    <p class="section-description">Indulge in world-class amenities, delectable cuisine, and personalized service as you unwind and create unforgettable memories with your loved ones.</p>
                </div>
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
                                        <h5 class="m-0"><i class="fa fa-rupee-sign"></i> {{ $package->price }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <!-- Resort Cards -->
            {{-- <div class="row mt-5">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="path/to/resort/image1.jpg" class="card-img-top" alt="Resort Image">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Beachfront Resort</h5>
                            <p class="card-text">Escape to paradise at our stunning beachfront resort. Enjoy pristine beaches, crystal-clear waters, and unparalleled hospitality.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="path/to/resort/image2.jpg" class="card-img-top" alt="Resort Image">
                        <div class="card-body">
                            <h5 class="card-title">Mountain Retreat</h5>
                            <p class="card-text">Embrace nature's beauty at our secluded mountain retreat. Discover breathtaking views, serene landscapes, and endless outdoor adventures.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="path/to/resort/image3.jpg" class="card-img-top" alt="Resort Image">
                        <div class="card-body">
                            <h5 class="card-title">Cultural Oasis</h5>
                            <p class="card-text">Immerse yourself in rich history and vibrant culture at our enchanting cultural oasis. Experience authentic traditions, culinary delights, and warm hospitality.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End Resort Cards -->
        </div>
    </div>
    <!-- End Resorts Section -->
@endsection
