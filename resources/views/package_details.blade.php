@extends('layouts.app')

@section('pageTitle', $package->name.' Package')
@section('ogTitle', $package->name.' Package')
@section('ogDescription', "Discover a range of exciting packages for your ". getSettings()->app_name .". Explore thrilling safari experiences, luxurious accommodations, and unforgettable moments amidst the beauty of the wilderness. Choose from our curated selection of packages and embark on the ultimate wildlife getaway in ". getSettings()->app_name)
@section('twitterTitle', $package->name.' Package')
@section('twitterDescription', "Discover a range of exciting packages for your ". getSettings()->app_name .". Explore thrilling safari experiences, luxurious accommodations, and unforgettable moments amidst the beauty of the wilderness. Choose from our curated selection of packages and embark on the ultimate wildlife getaway in ". getSettings()->app_name)
@section('keywords', $package->name.' Package')
@section('description', "Discover a range of exciting packages for your ". getSettings()->app_name .". Explore thrilling safari experiences, luxurious accommodations, and unforgettable moments amidst the beauty of the wilderness. Choose from our curated selection of packages and embark on the ultimate wildlife getaway in ". getSettings()->app_name)
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class=" text-white text-uppercase">{{ $package->name }}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Package Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Package Details Content Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid mb-4" src="{{ public_asset($package->images) }}" alt="Package Image">
            </div>
            <div class="col-lg-6">
                <h2>{{ $package->name }}</h2>
                <p class="text-justify">{{ $package->description }}</p>
                <p><strong>Price:</strong> <i class="fa fa-rupee-sign"> {{ $package->price }}</i></p>
                <p><strong>Duration:</strong> {{ $package->duration }} days</p>
                <p><strong>Itinerary:</strong></p>
                <ul>
                    @foreach (explode(PHP_EOL, $package->itinerary) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
    <!-- Package Details Content End -->
@endsection
