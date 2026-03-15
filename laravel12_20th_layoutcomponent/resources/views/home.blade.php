@extends('main-layout')

@section('title', 'Home | LaraDesign')

@section('main')
    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Crafting Exceptional Digital Experiences</h1>
            <p>We build scalable, secure, and modern web solutions tailored to your unique business needs.</p>
            <a href="#" class="btn-custom">Get Started Today</a>
        </div>
    </div>

    <!-- Services -->
    <div class="services">
        <h2 class="heading">Our Expert Services</h2>

        <div class="service-boxes">
            <div class="box">
                <h3>Web Development</h3>
                <p>Modern, responsive, and high-performance websites built with the latest technologies.</p>
            </div>

            <div class="box">
                <h3>eCommerce Solutions</h3>
                <p>Scalable online stores designed to convert visitors into loyal customers.</p>
            </div>

            <div class="box">
                <h3>UI/UX Design</h3>
                <p>Intuitive and engaging user interfaces that provide seamless digital journeys.</p>
            </div>
        </div>
    </div>

    <div class="cta-section">
        <div class="container">
            <h2>Ready to Start Your Project?</h2>
            <p>Let’s collaborate to build something truly amazing together.</p>
            <a href="#" class="btn-custom">Contact Us Now</a>
        </div>
    </div>
@endsection
