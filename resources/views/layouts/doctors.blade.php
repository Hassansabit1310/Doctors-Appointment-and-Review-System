<section class="section section-doctor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-header ">
                    <h2>Top Doctors</h2>
                    <p></p>
                </div>
                <div class="about-content">
                    <p></p>
                    <p></p>
                    <a href="{{route('doctor.index')}}">Show all</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="doctor-slider slider">

                    <!-- Doctor Widget -->
                    @foreach($doctors ?? '' as $doc)
                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">{{$doc->name}}</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">{{$doc->designation}}</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-rating">(17)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> {{$doc->chamber_location}}-{{$doc->city}}
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> {{$doc->shift->start}}-{{$doc->shift->end}}
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> {{$doc->charge}}
                                    <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /Doctor Widget -->

                </div>
            </div>
        </div>
    </div>
</section>
