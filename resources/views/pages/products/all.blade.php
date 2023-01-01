<div>
    {{-- Products --}}
    <section class="section-header bg-primary text-white pb-7 pb-lg-11">
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-12 col-md-10 text-center">
                    <h1 class="display-2 mb-3">Our pricing plan made simple</h1>
                    <p class="lead px-5">Get access to <span class="font-weight-bold">16 trillion</span> company,
                        <span class="font-weight-bold">7 billion</span> accountant
                    </p>
                </div>
            </div>
            <div class="row text-gray">
                @foreach ($product as $product)
                    <div class="col-12 col-lg-4">
                        <!-- Card -->
                        <div class="card shadow-soft mb-5 mb-lg-6 px-2">
                            <div class="card-header border-light py-5 px-4">
                                <!-- Price -->
                                <div class="d-flex mb-3">
                                    <span class="h5 mb-0">$</span>
                                    <span class="price display-2 mb-0" data-annual="0"
                                        data-monthly="0">{{ $product->product_price }}</span>
                                    <span class="h6 font-weight-normal align-self-end">/month</span>
                                </div>
                                <h4 class="mb-3 text-black">{{ $product->product_name }}</h4>
                                <p class="font-weight-normal mb-0">{{ $product->product_desc }}</p>
                            </div>
                            <div class="card-body pt-5">
                                @if ($product->id == '1')
                                    <ul class="list-group simple-list">
                                        <li class="list-group-item font-weight-normal"><span class="icon-gray"><i
                                                    class="fas fa-check"></i></span>Users<span
                                                class="font-weight-bolder">
                                                1</span></li>
                                        <li class="list-group-item font-weight-normal"><span class="icon-gray"><i
                                                    class="fas fa-check"></i></span>Full access</li>
                                        <li class="list-group-item font-weight-normal"><span class="icon-gray"><i
                                                    class="fas fa-check"></i></span>Publish <span
                                                class="font-weight-bolder">DJurnal</span> &reg; label</li>
                                        <li class="list-group-item font-weight-normal"><span class="icon-gray"><i
                                                    class="fas fa-check"></i></span>Share clude storage</li>
                                        <li class="list-group-item font-weight-normal"><span class="icon-gray"><i
                                                    class="fas fa-check"></i></span>Public Share & Comments</li>
                                        <li class="list-group-item font-weight-normal"><span class="icon-gray"><i
                                                    class="fas fa-check"></i></span>Chat Support</li>
                                    </ul>
                                @else
                                    @if ($product->id == '2')
                                        <ul class="list-group simple-list">
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>Users<span
                                                    class="font-weight-bolder">
                                                    3</span></li>
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>All features on <span
                                                    class="font-weight-bolder">FREE</span> plan</li>
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>Hide <span
                                                    class="font-weight-bolder">DJurnal</span> &reg; label</li>
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>All apps</li>
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>Connect to custom domain</li>
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>3rd party service integrations
                                            </li>
                                            <li class="list-group-item font-weight-normal"><span class="icon-primary"><i
                                                        class="fas fa-check"></i></span>Unlimited editable exports</li>
                                        </ul>
                                    @else
                                        <ul class="list-group simple-list">
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i class="fas fa-check"></i></span>Users<span
                                                    class="font-weight-bolder">
                                                    5</span></li>
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i class="fas fa-check"></i></span>All
                                                features on <span class="font-weight-bolder">BASIC</span> plan</li>
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i class="fas fa-check"></i></span>Content
                                                Management System</li>
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i class="fas fa-check"></i></span>Premium
                                                Analytics</li>
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i class="fas fa-check"></i></span>Version
                                                Control</li>
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i class="fas fa-check"></i></span>Single
                                                Sign-On (SSO)</li>
                                            <li class="list-group-item font-weight-normal"><span
                                                    class="icon-secondary"><i
                                                        class="fas fa-check"></i></span>Co-conception program</li>
                                        </ul>
                                    @endif
                                @endif
                            </div>
                            @if ($product->product_price == '0' && $userstats == 'free')
                                <div class="card-footer">
                                    <a href="{{ url('detail_product/' . $product->id) }}"
                                        class="btn btn-outline-primary d-block disabled">It's Free 14 days</a>
                                </div>
                            @else
                                <div class="card-footer">
                                    <a wire:click="mount({{ $product->id }})" href="{{ url('detail_product/' . $product->id) }}"
                                        class="btn btn-primary d-block animate-up-2">Buy Now</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pattern
        bottom">
        </div>
    </section>
    <section class="section section-lg pt-6 line-bottom-light">
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-3 mb-4">All subscriptions plan include these powerfull features</h1>
                    <p class="lead">We add new tools and features regularly.</p>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-12 col-md-6">
                    <!-- Icon Box -->
                    <div class="card shadow-soft border-light mb-4">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-lg-row p-3">
                                <div class="mb-3 mb-lg-0">
                                    <div class="icon icon-primary"><i class="far fa-life-ring"></i></div>
                                </div>
                                <div class="pl-lg-4">
                                    <h5 class="mb-3">24/5 customer support</h5>
                                    <p>Have a question, concern or feedback for us? Our support team is just a quick
                                        chat or email away — 24 hours a day, Monday to Friday.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Icon Box -->
                </div>
                <div class="col-12 col-md-6">
                    <!-- Icon Box -->
                    <div class="card shadow-soft border-light mb-4">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-lg-row p-3">
                                <div class="mb-3 mb-lg-0">
                                    <div class="icon icon-primary"><i class="fas fa-street-view"></i></div>
                                </div>
                                <div class="pl-lg-4">
                                    <h5 class="mb-3">Private Facebook community</h5>
                                    <p>Take full advantage of insights from the highly accomplished SEOs and digital
                                        marketers in our customers-only community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Icon Box -->
                </div>
                <div class="col-12 col-md-6">
                    <!-- Icon Box -->
                    <div class="card shadow-soft border-light mb-4">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-lg-row p-3">
                                <div class="mb-3 mb-lg-0">
                                    <div class="icon icon-primary"><i class="fas fa-street-view"></i></div>
                                </div>
                                <div class="pl-lg-4">
                                    <h5 class="mb-3">Tailored learning materials</h5>
                                    <p>Ever notice that the marketing tutorials on our blog and YouTube channel, and
                                        in the Ahrefs Academy, often feature our tools?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Icon Box -->
                </div>
                <div class="col-12 col-md-6">
                    <!-- Icon Box -->
                    <div class="card shadow-soft border-light mb-4">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-lg-row p-3">
                                <div class="mb-3 mb-lg-0">
                                    <div class="icon icon-primary"><i class="fas fa-street-view"></i></div>
                                </div>
                                <div class="pl-lg-4">
                                    <h5 class="mb-3">New features released regularly</h5>
                                    <p>Our development cycle is fast. We frequently update existing tools and
                                        release updates — heavily influenced by requests from our customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Icon Box -->
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-soft pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="mb-5 text-center">We accept PayPal and all major credit cards.</h3>
                </div>
                <div class="col-12 text-black text-center mb-5">
                    <div class="icon icon-lg mr-2 mr-sm-3">
                        <i class="fab fa-cc-visa"></i>
                    </div>
                    <div class="icon icon-lg mr-2 mr-sm-3">
                        <i class="fab fa-bitcoin"></i>
                    </div>
                    <div class="icon icon-lg mr-2 mr-sm-3">
                        <i class="fab fa-cc-mastercard"></i>
                    </div>
                    <div class="icon icon-lg mr-2 mr-sm-3">
                        <i class="fab fa-cc-stripe"></i>
                    </div>
                    <div class="icon icon-lg mr-2 mr-sm-3">
                        <i class="fab fa-cc-amazon-pay"></i>
                    </div>
                    <div class="icon icon-lg mr-2 mr-sm-3">
                        <i class="fab fa-cc-paypal"></i>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="./contact.html"><strong>Chat with us</strong></a><span
                        class="border-right border-gray mx-2"></span>Send us an email to <a
                        href="mailto:stepanusriodefaardian@gmail.com"><strong>support@djurnal.com</strong></a>
                </div>
            </div>
        </div>
    </section>
    {{-- End Products --}}
</div>
