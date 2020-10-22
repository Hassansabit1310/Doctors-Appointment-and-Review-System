@extends('layouts.front')
@include('layouts.menu')

@section('content')
<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Checkout Form -->
                        <form action="{{route('checkout')}}" method="post">
                            @csrf
                            <!-- Personal Information -->
                            @if(!Auth::check())
                            <div class="info-widget">
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group card-label">
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="exist-customer">Existing Customer? <a href="{{route('login')}}">Click here to login</a></div>
                            </div>
                            @endif
                            <!-- /Personal Information -->

                            <div class="payment-widget">
                                <h4 class="card-title">Payment Method</h4>

                                <!-- Credit Card Payment -->
                                <div class="payment-list">
                                    <label class="payment-radio credit-card-option">
                                        <input type="radio" name="radio" checked>
                                        <span class="checkmark"></span>
                                        Bkash
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="trx_id">Bkash Transaction ID</label>
                                                <input class="form-control" id="trx_id" name="trx_id" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group card-label">
                                                <label for="agent">Agent No</label>
                                                <input class="form-control" id="agent" type="text" value="0172018445" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit Section -->
                                <div class="submit-section mt-4">
                                    <button type="submit" class="btn btn-primary submit-btn">Confirm and Pay</button>
                                </div>
                                <!-- /Submit Section -->

                            </div>
                        </form>
                        <!-- /Checkout Form -->

                    </div>
                </div>

            </div>

            <div class="col-md-5 col-lg-4 theiaStickySidebar">

                <!-- Booking Summary -->
                <div class="card booking-card">
                    <div class="card-header">
                        <h4 class="card-title">Booking Summary</h4>
                    </div>
                    <div class="card-body">

                        <!-- Booking Doctor Info -->
                        <div class="booking-doc-info">
                            <a href="doctor-profile.html" class="booking-doc-img">
                                <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                            </a>
                            <div class="booking-info">
                                <h4><a href="doctor-profile.html">{{$doctor->name}}</a></h4>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">35</span>
                                </div>
                                <div class="clinic-details">
                                    <p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{$doctor->chamber_location}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Booking Doctor Info -->

                        <div class="booking-summary">
                            <div class="booking-item-wrap">
                                <ul class="booking-date">
                                    <li>Date Time<span>{{$appointed_at}}</span></li>
                                </ul>
                                <ul class="booking-fee">
                                    <li>Consulting Fee <span>{{$doctor->charge}}</span></li>
                                </ul>
                                <div class="booking-total">
                                    <ul class="booking-total-list">
                                        <li>
                                            <span>Total</span>
                                            <span class="total-cost">{{$doctor->charge}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Summary -->

            </div>
        </div>

    </div>

</div>
@endsection
