
@extends('layouts.master')
@section('content')


            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                           
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-title">Get In Touch</h2>
                            <div class="contact-info">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.8657333246992!2d-73.95447848459209!3d40.80894417932154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW%20123rd%20St%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1589004464646!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <h3>How to reach us:</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor.
                                </p>
                                <h3>Mobile <span>+012 345 6789</span></h3>
                                <h3>E-mail <span>contact@example.com</span></h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="editor-info">
                                <h2 class="section-title">Contact Person</h2>
                                <div class="editor-item">
                                    <div class="editor-img">
                                        <img src="{{url('assets/img/editor-1.jpg')}}" alt="Editor Image">
                                    </div>
                                    <div class="editor-text">
                                        <h3>Ask Your Query</h3>
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                        <h4>{{Session::get('msg')}}</h4>
                                        <form action="addcontact" method="POST">
                                        @csrf
                                    <input type="text" required class="form-control"name="username"placeholder="Username"><br>   
                                    <input type="email" required class="form-control"name="emails"placeholder="UserEmail"><br> 
                                    <input type="text" required class="form-control"name="subject"placeholder="Subject"><br>   
                                    <textarea  class="form-control"rows="5" cols="50" required name="message"></textarea><br>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <!-- <a href="mailto:email@example.com">Email Now</a> -->
                                    </form>
                                    </div>
                                </div>
                                <!-- <div class="editor-item">
                                    <div class="editor-img">
                                        <img src="{{url('assets/img/editor-1.jpg')}}" alt="Editor Image">
                                    </div>
                                    <div class="editor-text">
                                        <h3>Name Goes Here</h3>
                                        <a href="mailto:email@example.com">Email Now</a>
                                    </div>
                                </div> -->
                                <!-- <div class="editor-item">
                                    <div class="editor-img">
                                        <img src="{{url('assets/img/editor-1.jpg')}}" alt="Editor Image">
                                    </div>
                                    <div class="editor-text">
                                        <h3>Name Goes Here</h3>
                                        <a href="mailto:shubhambhattshubh@gmail.com">Email Now</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
@endsection
