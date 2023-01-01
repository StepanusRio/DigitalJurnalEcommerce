<div>
    <section class="section-header pb-7 pb-lg-11 bg-soft">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-6 order-2 order-lg-1">
                    <img src="home/assets/img/illustrations/hero-illustration.svg" alt="">
                </div>
                <div class="col-12 col-md-5 order-1 order-lg-2">
                    <h1 class="display-3 mb-3">Keep track of your business’s growth and change with DJurnal.</h1>
                    <p class="lead">Digital Journal is the best electronic journal application that helps you store and
                        manage important information easily. D-Jurnal help you in terms of company finances to improve
                        effectiveness and efficiency.</p>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/product') }}"
                                class="btn btn-md btn-secondary animate-up-2 mt-2 mb-2 d-block"><i
                                    class="fas fa-paper-plane mr-2"></i>Buy Now our Product</a>
                        @else
                            <a href="{{ url('register') }}"
                                class="btn btn-md btn-secondary animate-up-2 mt-2 mb-2 d-block"><i
                                    class="fas fa-paper-plane mr-2"></i>Sign-Up Now</a>
                            <span class="d-flex justify-content-center">with 14 day's trial Dashboards • no card credit
                                required</span>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
        <div class="pattern bottom"></div>
    </section>

    <section class="section section-lg pt-6">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-md-7">
                <div class="col-12 col-md-8 text-center">
                    <h2 class="h1 font-weight-bolder mb-4">Get more done with DJurnal.</h2>
                    <p class="lead">DJurnal is the perfect electronic journal application that helps you store and
                        manage
                        important information easily.</p>
                </div>
            </div>
            <div class="row row-grid align-items-center mb-5 mb-md-7">
                <div class="col-12 col-md-5">
                    <h2 class="font-weight-bolder mb-4">Work with colleagues in real-time.</h2>
                    <p class="lead">With DJurnal, you can work collaboratively with your colleagues in real-time and
                        out
                        of the box features. Get the most out of your applications with powerful collaboration.</p>
                    <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                        Learn More
                        <span class="icon icon-xs ml-2">
                            <i class="fas fa-external-link-alt"></i>
                        </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 ml-md-auto">
                    <img src="home/assets/img/illustrations/feature-illustration.svg" alt="">
                </div>
            </div>
            <div class="row row-grid align-items-center mb-5 mb-md-7">
                <div class="col-12 col-md-5 order-md-2">
                    <h2 class="font-weight-bolder mb-4">Get the information you need without a hassle.</h2>
                    <p>DJurnal is the best electronic journal application that helps you store and manage important data
                        easily.</p>
                    <p> with synchronization with other document processing applications, it has high data security.</p>
                    <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                        Learn More
                        <span class="icon icon-xs ml-2">
                            <i class="fas fa-external-link-alt"></i>
                        </span>
                    </a>
                </div>
                <div class="col-12 col-md-6 mr-lg-auto">
                    <img src="home/assets/img/illustrations/feature-illustration-2.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-light p-4">
                        <div class="card-body">
                            <h2 class="display-2 mb-2">500k+</h2>
                            <span>Downloads this application from 1000 large companies</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-light p-4">
                        <div class="card-body">
                            <h2 class="display-2 mb-2">24/7</h2>
                            <span> Our support team is a quick chat or email away — 24 hours a day</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-light p-4">
                        <div class="card-body">
                            <h2 class="display-2 mb-2">220k+</h2>
                            <span>Website visitors per day</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-soft">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-md-7">
                <div class="col-12 col-md-8 text-center">
                    <h2 class="h1 font-weight-bolder mb-4">Powerful application for every need</h2>
                    <p class="lead">We build best-in-class Journal software for every situation, from our all-in-one
                        Journal platform to tools for local Journal, enterprise Journal, and a powerful Integrated.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card shadow-soft border-light">
                        <div class="card-header p-0">
                            <img src="home/assets/img/saas-platform-5.jpg" class="card-img-top rounded-top"
                                alt="image">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mt-3">DJurnal Trial</h3>
                            <p class="card-text">Experience using DJurnal App for 14 days starting when you first Sign
                                Up
                            </p>
                            <ul class="list-group d-flex justify-content-center mb-4">
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>DJurnal Dashboard</div>
                                </li>
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Example Report Email Recieve</div>
                                </li>
                            </ul>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('product') }}" class="btn btn-primary">Learn More</a>
                                @else
                                    <a href="{{ url('register') }}"
                                        class="btn btn-md btn-secondary animate-up-2 mt-2 mb-2 block"><i
                                            class="fas fa-paper-plane mr-2"></i>Sign-Up Now</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card shadow-soft border-light">
                        <div class="card-header p-0">
                            <img src="home/assets/img/saas-platform-3.jpg" class="card-img-top rounded-top"
                                alt="image">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mt-3">DJurnal Local</h3>
                            <p class="card-text">Suitable for small and medium-sized businesses or home industries.</p>
                            <ul class="list-group d-flex justify-content-center mb-4">
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Real-time</div>
                                </li>
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Report Form</div>
                                </li>
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Send Yearly Report into your email</div>
                                </li>
                            </ul>
                            <a href="{{ url('product') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-5">
                    <div class="card shadow-soft border-light">
                        <div class="card-header p-0">
                            <img src="home/assets/img/saas-platform-4.jpg" class="card-img-top rounded-top"
                                alt="image">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mt-3">Djurnal Pro</h3>
                            <p class="card-text">For Business purposes companies that want to speed up their Journal
                                data
                                processing with API integration.</p>
                            <ul class="list-group d-flex justify-content-center mb-4">
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Real-Time</div>
                                </li>
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Report Form</div>
                                </li>
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Integrated with another Application</div>
                                </li>
                                <li class="list-group-item d-flex pl-0 pb-1">
                                    <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                    <div>Custom Domain</div>
                                </li>
                            </ul>
                            <a href="{{ url('product') }}" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-lg">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-7">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="h1 font-weight-bolder mb-4">Recommended by leading experts in Accountant and CEO</h1>
                    <p class="lead">Our products are loved by users worldwide</p>
                </div>
            </div>
            <div class="row mb-lg-5">
                <div class="col-12 col-lg-6">
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="home/assets/img/team/profile-picture-1.jpg"
                            class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"It really saves me time and effort. Digital Journal is exactly what our
                                business has been lacking."</p>
                            <span class="h6">- James Curran <small class="ml-0 ml-md-2">General Manager
                                    Spotify</small></span>
                        </div>
                    </div>
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="home/assets/img/team/profile-picture-2.jpg"
                            class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"Just what I was looking for. I like Digital Journal more and more each
                                day
                                because it makes my life a lot easier. Digital Journal impressed me on multiple levels.
                                I
                                don't know what else to say."</p>
                            <span class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Front-end developer
                                    Oracle</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-lg-6">
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="home/assets/img/team/profile-picture-4.jpg"
                            class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"We use DJurnal mainly for Manage expense, and it’s immensely improved
                                how we
                                find equilibrium point"</p>
                            <span class="h6">- Jose Evans <small class="ml-0 ml-md-2">Chief Engineer
                                    Apple</small></span>
                        </div>
                    </div>
                    <div class="customer-testimonial d-flex mb-5">
                        <img src="home/assets/img/team/profile-picture-6.jpg"
                            class="image image-sm mr-3 rounded-circle shadow" alt="">
                        <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                            <div class="d-flex mb-4">
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                            </div>
                            <p class="mt-2">"Digital Journal is awesome!"</p>
                            <span class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Manager
                                    IBM</small></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary animate-up-2"><span class="mr-2"><i
                                class="fas fa-book-open"></i></span> See all stories</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-lg pb-5 bg-soft">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="mb-4">Faster count journal with DJurnal</h2>
                    <p class="lead mb-5">Join over <span class="font-weight-bolder">300,000+</span> users</p>
                    <a href="#" class="icon icon-lg text-gray mr-3">
                        <i class="fab fa-mailchimp"></i>
                    </a>
                    <a href="#" class="icon icon-lg text-gray mr-3">
                        <i class="fab fa-cpanel"></i>
                    </a>
                    <a href="#" class="icon icon-lg text-gray mr-3">
                        <i class="fab fa-paypal"></i>
                    </a>
                    <a href="#" class="icon icon-lg text-gray mr-3 ">
                        <i class="fab fa-github-alt"></i>
                    </a>
                    <a href="#" class="icon icon-lg text-gray mr-3">
                        <i class="fab fa-aws"></i>
                    </a>
                    <a href="#" class="icon icon-lg text-gray">
                        <i class="fab fa-php"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
