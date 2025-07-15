    <footer id="footer" class="footer dark-background">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                            <span class="sitename">{{ setting('name') }}</span>
                        </a>
                        <div class="footer-contact pt-3">
                            {{-- <p>A108 Adam Street</p> --}}
                            <p>{{ setting('address') }}</p>
                            <p class="mt-3">
                                <strong>Phone:</strong> <span>{{ setting('phone') }}</span>
                            </p>
                            <p><strong>Email:</strong> <span>{{ setting('email') }}</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href="{{ setting('twitter') }}"><i class="bi bi-twitter-x"></i></a>
                            <a href="{{ setting('facebook') }}"><i class="bi bi-facebook"></i></a>
                            <a href="{{ setting('instagram') }}"><i class="bi bi-instagram"></i></a>
                            <a href="{{ setting('linkedIn') }}"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}"> Home</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#about"> About</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#services">
                                    Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#portfolio">
                                    Portfolio</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#contact"> Contact</a>
                            </li>
                            {{-- <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#"> Terms of service</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#"> Privacy policy</a>
                            </li> --}}
                        </ul>
                    </div>
                    @if ($result['services']->count())
                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                @foreach ($result['services']->sortBy('position') as $service)
                                    <li>
                                        <i class="bi bi-chevron-right"></i>
                                        <a href="{{ route('services.details', $service->id) }}">
                                            {{ shortenText($service->title ?? '', 20) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>
                            Subscribe to our newsletter and receive the latest news about
                            our products and services!
                        </p>
                        <form action="{{ route('subscription') }}" method="post">
                            @csrf
                            <div class="newsletter-form">
                                <input type="email" name="email_subscription" class="@error('email_subscription') is-invalid @enderror" /><input type="submit" value="Subscribe" />
                            </div>
                            @error('email_subscription')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container text-center">
                <p>
                    {{ setting('copyrights') }} | <span>Powered by
                        {{-- <i class="bi bi-heart-fill text-danger"></i> --}}
                        <a href="https://future-sword-test.al-kafi.com"> Future Sword</a></span>
                </p>
                {{-- <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div> --}}
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
