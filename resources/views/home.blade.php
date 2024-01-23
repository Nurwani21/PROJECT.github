@extends('layouts.app')

@section('content')

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="{{ asset('import/assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('import/assets/css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('import/assets/css/templatemo-festava-live.css') }}" rel="stylesheet">
</head>

<main>

<section class="hero-section" id="section_1">
                <div class="section">
                <video autoplay loop muted class="custom-video w-100 d-block mx-auto" poster="">
                <source src="{{ asset('import/assets/video/videobackg.mp4') }}" type="video/mp4">
                </video>
                </div>
            
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                            <div class="mx-auto">
                                <h2 class="text-white">Welcome to Festava 2024</h2>
            
                                <div class="date-wrap">
                                    <h5 class="text-white">
                                        <i class="custom-icon bi-clock me-2"></i>
                                        Day<sup>th</sup>, Date
                                    </h5>
                                </div>
            
                                <div class="location-wrap py-3 py-lg-0">
                                    <h5 class="text-white">
                                        <i class="custom-icon bi-geo-alt me-2"></i>
                                        MegaStar Arena, Kuala Lumpur
                                    </h5>
                                </div>
            
                                <div class="social-share">
                                    <ul class="social-icon d-flex align-items-center justify-content-center">
                                        <span class="text-white me-3">Share:</span>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link">
                                                <span class="bi-facebook"></span>
                                            </a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link">
                                                <span class="bi-twitter"></span>
                                            </a>
                                        </li>
                                        <li class="social-icon-item">
                                            <a href="#" class="social-icon-link">
                                                <span class="bi-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>






<section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                            <div class="services-info">
                                <h2 class="text-white mb-4">About Festava 2024</h2>

                                <p class="text-white">Welcome to Festava 2024 – Your Ultimate Concert Experience!</p>

                                <h6 class="text-white mt-4">Why Choose Festava 2024</h6>

                                <h6 class="text-white mt-4">Diverse Lineup</h6>

                                <p class="text-white">Explore a melting pot of musical genres. Pop, rock, indie, and more – we've got the sounds that speak to you!</p>
                                
                                <h6 class="text-white mt-4">Easy Ticketing</h6>

                                <p class="text-white">Say goodbye to queues and complexity! With Festava, getting your tickets is as easy as hitting play. Just a few clicks, and you're concert-ready!</p>
                                <h6 class="text-white mt-4">Up-to-Date Info</h6>

                                <p class="text-white">No surprises here! Stay in the loop with real-time updates on concerts, venues, and artists. Your guide to staying ahead of the music curve!</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="about-text-wrap">
                                <img src="{{ asset ('import/assets/images/taylor.jpg') }}" class="about-image img-fluid">

                                <div class="about-text-info d-flex">
                                    <div class="d-flex">
                                        <i class="about-text-icon bi-person"></i>
                                    </div>


                                    <div class="ms-4">
                                        <h3>a happy moment</h3>

                                        <p class="mb-0">Ready for a Concert Revolution? Dive into Festava 2024 – Where Every Beat is a Ticket to Your Next Adventure! </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="artists-section section-padding" id="section_3">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Meet Artists For Upcoming Concert</h1>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="{{ asset('import/assets/images/artists/hyper.jpg') }}" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Hyper Act
                                    </p>

                                    <p>
                                        <strong>Debut Date:</strong>
                                         2009
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Rock Ballad
                                    </p>

                                </div>
                            </div>

                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="{{ asset('import/assets/images/artists/Ed.png') }}" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Ed Sheeran
                                    </p>

                                    <p>
                                        <strong>Debut Date:</strong>
                                         2004
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Pop, Soft Rock
                                    </p>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-5 col-10">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="{{ asset ('import/assets/images/artists/ungu.jpg') }}" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        UNGU
                                    </p>

                                    <p>
                                        <strong>Debut Date:</strong>
                                        1996
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Pop Rock
                                    </p>
                                </div>
                            </div>

                            <div class="artists-thumb">
                                <img src="{{asset ('import/assets/images/artists/therose.jpeg') }}" class="artists-image img-fluid">

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        The Rose
                                    </p>

                                    <p>
                                        <strong>Debut Date:</strong>
                                        2017
                                    </p>

                                    <p>
                                        <strong>Music:</strong>
                                        Indie Pop & Rock
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="schedule-section section-padding" id="section_4">
                <div class="container" >
                    <div class="row">

                        <div class="col-12 text-center">
                            <h3 class="text-white mb-4">Event Schedule</h3>

                            <div class="table-responsive" style=" height: 900px; overflow-y: auto;" >
                                <table class="schedule-table table table-dark">
                                    <thead>
                                        <tr >
                                            <th scope="col" style="background-color: #e4571f">Date</th>

                                            <th scope="col" style="background-color: #f57744">Monday</th>
                                            <th scope="col" >Tuesday</th>
                                            <th scope="col" style="background-color: #f57744">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col" style="background-color: #f57744">Friday</th>
                                            <th scope="col">Saturday</th>
                                            <th scope="col" style="background-color: #f57744">Sunday</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        
                                        <tr>
                                            <th scope="row" style="background-color: #f57744">Week 1</th>
                
                                            <td style="background-color: #ECC9C7"></td>

                                            <td style="background-color: #dbfdff"></td>
                                            <td class="table-background-image-wrap rose-background-image">
                                                
                                                <p>Dawn to Dusk</p>
                                                <p>By The Rose</p>
                                                <p class="mb-2">21 February 2024</p>
                                                <p>8:30PM</p>
                                                <p>Mega Star Arena</p>

                                             <div class="section-overlay"></div>
                                            </td>
                                            <td style="background-color: #dbfdff"></td>
                                            <td style="background-color: #ECC9C7"></td>
                                            

                                            <td class="table-background-image-wrap act-background-image">
                                                
                                                <p>15 Years Journey</p>
                                                <p>By Hyper Act</p>
                                                <p class="mb-2">24 February 2024</p>
                                                <p>8:30PM</p>
                                                <p>Sunway Lagoon Surf Beach</p>

                                            
                                                <div class="section-overlay"></div>
                                            </td>
                                            <td style="background-color: #ECC9C7"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row" style="background-color: #e4571f">Week 2</th>
                                            
                                            <td style="background-color: #ECC9C7"></td>
                                            <td style="background-color: #dbfdff"></td>
                                            <td class="table-background-image-wrap ive-background-image">
                                                
                                                <p>Show What I Have</p>
                                                <p>By IVE</p>
                                                <p class="mb-2">27 February 2024</p>
                                                <p>7:00PM</p>
                                                <p>Mega Star Arena</p>
                                               

                                                <div class="section-overlay"></div>
                                            </td>
                                            
                                            <td style="background-color: #dbfdff"></td>
                                            <td style="background-color: #ECC9C7"></td>
                                            <td class="table-background-image-wrap island-background-image">
                                                
                                                <p>Hey Day!</p>
                                                <p>By F.T Island</p>
                                                <p class="mb-2">02 March 2024</p>
                                                <p>8:00PM</p>
                                                <p>Axiata Arena Kuala Lumpur</p>
                                               
                                                <div class="section-overlay"></div>
                                            </td>
                                            <td style="background-color: #ECC9C7"></td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #f57744">Week 3</th>
                
                                            <td class="table-background-image-wrap purple-background-image">
                                                <p>MAYAPADA</p>
                                                <p>By UNGU</p>
                                                <p class="mb-2">18 March 2024</p>
                                                <p>8:30PM</p>
                                                <p>Zepp Kuala Lumpur</p>
                                                

                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #dbfdff"></td>
                                            <td style="background-color: #ECC9C7"></td>

                                            <td class="table-background-image-wrap the-background-image">
                                                <p>The Mathematics Tour</p>
                                                <p>By Ed Sheeran</p>
                                                <p class="mb-2">21 March 2024</p>
                                                <p>8:00PM</p>
                                                <p>Bukit Jalil National Stadium, Kuala Lumpur</p>
                                                
                                            </td>
                                            <td style="background-color: #ECC9C7"></td>
                                            <td style="background-color: #dbfdff"></td>
                                            

                                            <td class="table-background-image-wrap KNOW-background-image">
                                                <p>Street Beethoven World Tour</p>
                                                <p>By KNOWKNOW</p>
                                                <p class="mb-2">24 March 2024</p>
                                                <p>8:30PM</p>
                                                <p>Zepp Kuala Lumpur</p>
                                                
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" style="background-color: #e4571f">Week 4</th>

                                            <td style="background-color: #ECC9C7"></td>
                                            <td style="background-color: #dbfdff"></td>
                                            <td style="background-color: #ECC9C7"></td>
                                            <td style="background-color: #dbfdff"></td>

                                            <td class="table-background-image-wrap kak-background-image">
                                                <p>MAYAPADA</p>
                                                <p>By UNGU</p>
                                                <p class="mb-2">18 March 2024</p>
                                                <p>8:30PM</p>
                                                <p>Zepp Kuala Lumpur</p>
                                                
                                                <div class="section-overlay"></div>
                                            </td>

                                            <td style="background-color: #dbfdff"></td>
                                            <td style="background-color: #ECC9C7"></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </main>

            <footer class="site-footer">
            <div class="site-footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-12 text-center">
                            <h2 class="text-white mb-lg-0">Fusion Flick</h2>
                        </div>
        
                        <div class="col-lg-6 col-md-12 col-12 text-center">
                            <h5 class="site-footer-title mb-3">Have a question?</h5>
        
                            <p class="text-white d-flex mb-1 justify-content-center">
                                <a href="tel: 090-080-0760" class="site-footer-link">
                                    090-080-0760
                                </a>
                            </p>
        
                            <p class="text-white d-flex justify-content-center">
                                <a href="mailto:fusionflick@company.com" class="site-footer-link">
                                    fusionflick@company.com
                                </a>
                            </p>
        
                            <ul class="social-icon d-flex justify-content-center">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>
        
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-apple"></span>
                                    </a>
                                </li>
        
                                <li class="social-icon-item text-center">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>
        
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-youtube"></span>
                                    </a>
                                </li>
        
                                <li class="social-icon-item text-center">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-pinterest"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-12 mt-lg-5 text-center">
                            <p class="site-footer-copyright">&copy; <span id="2023 - 2024"></span> FusionFlick. All rights reserved.</p>
                            
                            <ul class="site-footer-links">
                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                                </li>
                                
                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Privacy Policy</a>
                                </li>
                                
                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Your Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </footer>



@endsection
