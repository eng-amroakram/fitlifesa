@extends('partials.layout')
@section('content')
    <section class="hero-wrap" id="home" style="background-image: url('{{ asset('web/images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-6">

                    <span class="subheading">Transform Your Life with Wellness and Vitality</span>
                    <h1 class="mb-4">Fuel Your Body, <br>Elevate Your Fitness &amp; Embrace Self-Love</h1>

                    <p>
                        <a href="{{ route('web.index') }}#contact" class="btn btn-primary p-4 py-3">Contact us
                            <span class="ion-ios-arrow-round-forward"></span></a>
                        <!-- <a href="#" class="btn btn-white p-4 py-3">Learn More
                                                                                    <span class="ion-ios-arrow-round-forward"></span></a> -->
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services" id="services">
        <div class="container services-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="row g-lg-1">
                        <div class="col-md d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon"><span class="flaticon-plan"></span></div>
                                <div class="text">
                                    <h2>Nutrition Strategies</h2>
                                    <p>Discover effective nutrition strategies to fuel your body and optimize your health.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon"><span class="flaticon-dumbbell"></span></div>
                                <div class="text">
                                    <h2>Workout Routines</h2>
                                    <p>Unlock your full potential with personalized workout routines designed to challenge
                                        and transform your body.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon"><span class="flaticon-team-support"></span></div>
                                <div class="text">
                                    <h2>Support Motivation</h2>
                                    <p>Experience unwavering support and motivation from a vibrant community, inspiring you
                                        to push past your limits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about-section" id="about">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img w-100 section-counter"
                        style="background-image: url('{{ asset('web/images/about.jpg') }}');">
                        <div class="counter-wrap d-flex">
                            <div class="icon"><span class="flaticon-diet"></span></div>
                            <div class="text ps-3">
                                <span class="number"><span class="countup">24</span></span>
                                <span class="caption">Years of experienced</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-5 mt-md-0">
                        <span class="subheading">About Fit Life Company</span>
                        <p>
                            Fit Life empowers individuals to take control of their health and fitness with our personalized
                            mobile app. Utilizing machine learning algorithms, we create customized diet and exercise plans
                            based on your unique needs and goals.
                        </p>
                        <p>
                            Track your progress, receive actionable insights, and access a library of healthy recipes and
                            workout videos. Our user-friendly app is available on iOS and Android, making it convenient for
                            everyone.
                        </p>
                        <p>
                            Join our community of like-minded individuals and achieve your health and fitness goals with our
                            support. Let us provide you with the tools and guidance to live a healthier, happier life.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="how_to_start">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Procedure</span>
                    <h2 class="mb-4">How It Works?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="services-2">
                        <div class="img" style="background-image: url('{{ asset('web/images/services-2.jpg') }}');">
                            <div class="num"><span>1</span></div>
                        </div>
                        <div class="text">
                            <h2>Download App</h2>
                            <p class="mb-4">Experience the power of our app by downloading it from the App Store or Google
                                Play.</p>
                            <p>
                                <a target="_blank" href="https://google.com" class="btn-custom">
                                    <img src="{{ asset('web/images/app-store.png') }}" width="20" height="20"
                                        alt="">
                                    IOS Store</a>

                                <a target="_blank" href="https://google.com" class="btn-custom">
                                    <img src="{{ asset('web/images/google-play.png') }}" width="20" height="20"
                                        alt="">
                                    Google Play
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="services-2">
                        <div class="img" style="background-image: url('{{ asset('web/images/flow-2.jpg') }}' );">
                            <div class="num"><span>2</span></div>
                        </div>
                        <div class="text">
                            <h2>Register & Login</h2>
                            <p class="mb-4">Get started on your fitness journey by easily registering and logging in to
                                our app.</p>
                            <p>
                                <a href="https://vimeo.com/115041822" class="glightbox btn-custom">Watch Video</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="services-2">
                        <div class="img" style="background-image: url('{{ asset('web/images/flow-3.jpg') }}');">
                            <div class="num"><span>3</span></div>
                        </div>
                        <div class="text">
                            <h2>Feeding Schedule</h2>
                            <p class="mb-4">Create a customized meal schedule that aligns with your unique dietary needs
                                and preferences.</p>
                            <p>
                                <a href="https://vimeo.com/115041822" class="glightbox btn-custom">Watch Video</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="services-2">
                        <div class="img" style="background-image: url('{{ asset('web/images/services-1.jpg') }}' );">
                            <div class="num"><span>4</span></div>
                        </div>
                        <div class="text">
                            <h2>Customized Workout Plan</h2>
                            <p class="mb-4">Design a personalized workout plan tailored to your fitness goals and skill
                                level.</p>
                            <p>
                                <a href="https://vimeo.com/115041822" class="glightbox btn-custom">Watch Video</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about-section" id="vision_mission">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img w-100 section-counter"
                        style="background-image: url('{{ asset('web/images/about.jpg') }}');">
                        <div class="counter-wrap d-flex">
                            <div class="icon"><span class="flaticon-diet"></span></div>
                            <div class="text ps-3">
                                <span class="number"><span class="countup">24</span></span>
                                <span class="caption">Years of experienced</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-5 mt-md-0">

                        <span class="subheading">Our Vision</span>

                        <p>At Fit Life, our vision is to empower individuals to seize control of their health and fitness
                            journey.</p>
                        <p>By harnessing the cutting-edge potential of machine learning technology, we provide a
                            personalized and accessible platform.</p>
                        <p>Our goal is to create tailored diet and exercise plans that fit seamlessly into your lifestyle.
                        </p>

                        <span class="subheading">Our Mission</span>

                        <p>At Fit Life, our mission is to revolutionize the health and fitness industry through our
                            innovative mobile application.</p>
                        <p>By harnessing the power of machine learning algorithms, we provide personalized diet and exercise
                            plans that are tailored to your unique needs and goals.</p>
                        <p>We strive to educate and empower individuals, equipping them with the knowledge to make informed
                            decisions about their health and fitness journey.</p>
                        <p>Through actionable insights, progress tracking, and a supportive community, we are dedicated to
                            helping you achieve your desired outcomes.</p>
                        <p>Our commitment lies in delivering an exceptional user experience that inspires and motivates you
                            to live your healthiest and happiest life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-appointment ftco-section img" id="contact">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-md-6 d-flex align-items-center order-lg-last pl-lg-5">
                    <div class="heading-section heading-section-white" data-aos="fade-up">
                        <!-- <span class="subheading">Who We Are</span> -->
                        <h2 class="mb-3">Welcome to Fit Life Nutrition</h2>
                        <p>Experience the power of nutrition and fitness for a healthier life. Our passion lies in providing
                            you with the tools and guidance to achieve your wellness goals and maintain a balanced
                            lifestyle.</p>
                        <div class="row mt-md-5">
                            <div class="col-lg-12">
                                <div class="services-3 d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-plan"></span>
                                    </div>
                                    <div class="text ps-4">
                                        <h2>Comprehensive Services</h2>
                                        <p>Unlock the full potential of your health with our comprehensive range of services
                                            tailored to your unique needs. From personalized meal plans to expert guidance,
                                            we have you covered.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="services-3 d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-dairy-products"></span>
                                    </div>
                                    <div class="text ps-4">
                                        <h2>Quality Products</h2>
                                        <p>Discover a wide selection of high-quality, nutritious products that support your
                                            health and wellness journey. We carefully source and curate our products to
                                            ensure your satisfaction.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="services-3 d-flex w-100">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-diet-1"></span>
                                    </div>
                                    <div class="text ps-4">
                                        <h2>Natural &amp; Healthy Foods</h2>
                                        <p>Experience the goodness of natural and healthy foods that nourish your body and
                                            support your wellness goals. We believe in the power of wholesome ingredients
                                            for optimal nutrition.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="{{ route('web.contact-us') }}" method="POST" class="appointment" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="200">
                        @csrf
                        <span class="subheading">Drop A Message</span>
                        <h2 class="mb-4 appointment-head">Make An Appointment</h2>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Your Full Name</label>
                                    <input type="text" class="form-control" name="full_name"
                                        placeholder="Your Full Name">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="Send message" class="btn btn-primary py-3 px-4 rounded">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
