<x-guest-layout>

      <div class="comingsoon pt-5">
          <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="comingsoon-info">
                      <a href="">
                      <img src="{{asset('images/logo-full2.png')}}" class="img-fluid w-50" alt="">
                      </a>
                      <h2 class="mt-4 mb-1">Stay tunned, we're launching very soon</h2>
                      <p>We are working very hard to give you the best experience possible!</p>
                      <ul class="countdown d-flex flex-wrap align-items-center list-inline" data-date="Feb 02 2022 20:20:22">
                          <li class="col-md-6 col-lg-3">
                            <div class="card">
                              <div class="card-body">
                                <span data-days="">203</span>Days
                              </div>
                            </div>
                          </li>
                          <li class="col-md-6 col-lg-3">
                            <div class="card">
                              <div class="card-body">
                                <span data-hours="">0</span>Hours
                              </div>
                            </div>
                          </li>
                          <li class="col-md-6 col-lg-3">
                            <div class="card">
                              <div class="card-body">
                                <span data-minutes="">32</span>Minutes
                              </div>
                            </div>
                          </li>
                          <li class="col-md-6 col-lg-3">
                            <div class="card">
                              <div class="card-body">
                                <span data-seconds="">26</span>Seconds
                              </div>
                            </div>
                          </li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form class="iq-comingsoon-form mt-5">
                      <div class="form-group">
                          <input type="email" class="form-control comming mb-0" id="exampleInputEmail1"  placeholder="Enter email address">
                          <button type="submit" class="btn btn-primary">Subscribe</button>
                      </div>
                    </form>
                </div>
              </div>
          </div>
      </div>
    
    <script src="{{asset('js/countdown.js')}}"></script>
    
</x-guest-layout>