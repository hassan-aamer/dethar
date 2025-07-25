  <footer id="footer" class="footer dark-background">

      <div class="container footer-top">
          <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-about">
                  <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                      <span class="sitename" style="color: #EA9323;">{{ setting('name') ?? '' }}</span>
                  </a>
                  <p>{{ setting('title') ?? '' }}</p>
                  <div class="social-links d-flex mt-4">
                      <a href="{{ setting('twitter') ?? '' }}"><i class="bi bi-twitter-x"></i></a>
                      <a href="{{ setting('facebook') ?? '' }}"><i class="bi bi-facebook"></i></a>
                      <a href="{{ setting('instagram') ?? '' }}"><i class="bi bi-instagram"></i></a>
                      <a href="{{ setting('linkedIn') ?? '' }}"><i class="bi bi-linkedin"></i></a>
                  </div>
              </div>

              <div class="col-lg-4 col-6 footer-links">
                  <h4 style="color: #EA9323;">Useful Links</h4>
                  <ul>
                      <li><a href="{{ route('home') }}">Home</a></li>
                      <li><a href="{{ route('about') }}">About</a></li>
                      <li><a href="{{ route('contact') }}">Get in touch</a></li>
                      <li><a href="{{ route('tds') }}">Technical Data Sheets</a></li>
                  </ul>
              </div>

              {{-- <div class="col-lg-2 col-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                      <li><a href="#">Web Design</a></li>
                      <li><a href="#">Web Development</a></li>
                      <li><a href="#">Product Management</a></li>
                      <li><a href="#">Marketing</a></li>
                      <li><a href="#">Graphic Design</a></li>
                  </ul>
              </div> --}}

              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                  <h4 style="color: #EA9323;">Contact Us</h4>
                  <p>{{ setting('address') ?? '' }}</p>
                  {{-- <p>New York, NY 535022</p>
                  <p>United States</p> --}}
                  <p class="mt-4"><strong>Phone :</strong> <span>{{ setting('phone') ?? '' }}</span></p>
                  <p><strong>Email :</strong> <span>{{ setting('email') ?? '' }}</span></p>
              </div>

          </div>
      </div>

      <div class="container copyright text-center mt-4">
          <p>© <span >{{ setting('copyrights') ?? '' }}</span></p>
          <div class="credits">
              Powered by <a href="https://viral-monkeys.com/" style="color: #EA9323;">Viral Monkeys</a>
          </div>
      </div>

  </footer>
