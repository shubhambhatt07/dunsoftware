@extends('layouts.master')  
@section('content')


            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Portfolio</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Portfolio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".web-des">Design</li>
                                <li data-filter=".web-dev">Development</li>
                                <li data-filter=".dig-mar">Digital Marketing</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-1.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-1.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-dev">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-2.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-2.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item dig-mar">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-3.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-3.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-4.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-4.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-1.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-1.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-dev">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-2.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-2.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item dig-mar">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-3.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-3.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-4.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-4.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-1.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-1.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-dev">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-2.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-2.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item dig-mar">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-3.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-3.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{url('assets/img/portfolio-4.jpg')}}" alt="Portfolio Image">
                                    <a href="{{url('assets/img/portfolio-4.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="#">Project Name Here</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 load-more">
                            <a class="btn" href="#">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Start -->

            @endsection
           
