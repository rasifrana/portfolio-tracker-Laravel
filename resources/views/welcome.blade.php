@extends('base')

@section('title', 'Welcome')

@section('content')


<!-- Main Section -->
<main class="header p-3">
    <div class="container">
      <div class="row ">
        <div class="col-s-12 col-md-6 d-flex align-items-center justify-content-center">
          <div class="jumbotron jumbotron-fluid">
            <div class="container text-sm-center text-xs-center">
              <h1 class="main-heading">
                The most authentic Investment Portfolio tracker.
              </h1>
              <p>
                Now with Stacked Signal, receiving updates directly from team
                leaders of the instrument you care about.
              </p>
             
              <!-- Button trigger modal -->
  @auth
  <a href="/home" class="btn btn-success">
    Portfolio</a
  >
        @else
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Register Account
          </button>
        @endauth
  
  <!-- Register Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-left">
            <div>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter Name">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login to Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-left">
            <div>
                <form action="/login" method="POST">
                    @csrf
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="loginemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="loginpassword"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
            </div>
        </div>
      </div>
    </div>
  </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 hero-img-container">
          <img
            src="{{URL('img/leaf.png')}}"
            class="hero leaf img-fluid"
            alt="..."
          />
          <img
            src="{{URL('img/phone.png')}}"
            class="hero phone img-fluid"
            alt="..."
          />
        </div>
      </div>
    </div>
  </main>
  
  <!-- Features Section-->
  
  <section class="types">
    <div class="container">
      <div
        class="row asset-type justify-content-center py-5 d-flex align-items-center my-5"
      >
        <div class="col-sm-12 col-md-5 p-4 text-sm-center text-xs-center sm-mb-2">
          <h2>Your guide to financial wellness</h2>
          <p>
            We’ll help you invest, save and spend responsibly for just $1, $2 or
            $3 per month. No surprise fees, just surprise upgrades.
          </p>
          <a href="" class="btn btn-success">
            Create Portfolio</a
          >
        </div>
        <div class="col-sm-12 col-md-7 pl-5 sm-pl-1">
          <div class="row mb-2 sm-mb-2">
            <div class="col-sm-4">
              <img
                src="{{URL('img/stocks.jpg')}}"
                class="img-fluid"
                alt="..."
              />
            </div>
            <div class="col-sm-8 py-3">
              <h4>Stocks & Bonds</h4>
              <p>
                Get analysis on your trade history and assets. Stacked gives a
                detailed overview of your stocks
              </p>
            </div>
          </div>
  
          <div class="row mb-2 sm-mb-2">
            <div class="col-sm-4">
              <img
                src="{{URL('img/bitcoin.jpg')}}"
                class="img-fluid"
                alt="..."
              />
            </div>
            <div class="col-sm-8 py-3">
              <h4>Cryptocurrencies</h4>
              <p>
                Stacked is the ultimate Bitcoin & cryptocurrency portfolio tracker
                app. Keep track of all cryptocoins.
              </p>
            </div>
          </div>
  
          <div class="row mb-2">
            <div class="col-sm-4">
              <img
                src="{{URL('img/property.jpg')}}"
                class="img-fluid"
                alt="..."
              />
            </div>
            <div class="col-sm-8 py-3">
              <h4>Real Estate</h4>
              <p>
                Supported by our global network of property portfolio we
                seamlessly guide corporate and private investors.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Services Section-->
  <section class="bg-light py-5">
    <div class="container">
      <div class="row my-5 d-flex align-items-center">
        <div class="col-sm-6 text-center">
          <img
            src="{{URL('img/secure.svg')}}"
            style="width: 70%;"
            class="img-fluid"
          />
        </div>
        <div class="col-sm-6 py-4">
          <h3>Security that's strong as oak</h3>
          <h5>
            All your data is protected by bank-level security and 256-bit
            encryption.
          </h5>
          <p class="mt-3">
            Member of the Securities Investor Protection Corporation (SIPC) which
            protects securities customers of its members up to $500,000 (including
            $250,000 for claims for cash). Explanatory brochures are available
            upon request
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Payment Section -->
  <section id="saving" class="payment-section py-5">
    <div class="container text-center my-5">
      <div class="row payment-card d-flex">
        <div class="col-xs-12 col-sm-6 text-center mx-auto">
          <h3>Spend & Save Smarter</h3>
          <p class="my-4">
            Get the only debit card that saves and invests for you when you spend.
            Plus no ATM fees, no overdraft fees and no minimum balance
            requirements.
          </p>
        </div>
      </div>
      <div class="row text-center">
        <div
          class="col-10 border border-success rounded mx-auto text-center py-4"
        >
          <img
            src="{{URL('img/card.png')}}"
            style="width: 70%;"
            class="img-fluid card-img mx-auto"
          />
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section Support -->
  <section class="services bg-light py-5">
    <div class="container">
      <div class="row my-5 d-flex align-items-center">
        <div class="col-sm-6 py-4">
          <h3>
            Simply connect your portfolio with your go to exchanges and wallets
          </h3>
          <p class="mt-5">
            A clear overview of your total portfolio balance, total profit/loss
            since you started investing or since the last 24 hours. See the trend
            of your cryptocurrency investments with your personal portfolio graph.
            In Stocks, Bonds or any fiat or cryptocurrency..
          </p>
        </div>
  
        <div class="col-sm-6">
          <img
            src="{{URL('img/invest.png')}}"
            style="width: 100%;"
            class="img-fluid"
          />
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section Pricing -->
  
  <section id="pricing" class="price-comparison mt-5 py-5">
    <div class="price-column">
      <div class="price-header">
        <div class="price">
          FREE
        </div>
        <div class="plan-name">basic</div>
        <div class="divider"></div>
  
        <div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Stacked Basic
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Web App 
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Subscribers Email
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          10 Asset Access
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Market Updates
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Limited Access
        </div>
        </div>
        <a href="" class="btn btn-success mt-2">
          Create Portfolio</a
        >
      </div>
    </div>
  
    <!-- 2nd Price Card -->
    <div class="price-column popular bg-success">
      <div class="most-popular">Most Popular</div>
      <div class="price-header">
        <div class="price">
          <div class="dollar-sign">$</div>
          5
          <div class="per-month">/mo</div>
        </div>
        <div class="plan-name">Professional</div>
  
        <div class="divider"></div>
        <div>
        <div class="feature">
          &check; Stacked Standard
        </div>
        <div class="feature">
          &check; All Apps
        </div>
        <div class="feature">
          &check; Email and Article
        </div>
        <div class="feature">
          &check; 30 Assets
        </div>
        <div class="feature">
          &check; Live Markets
        </div>
        <div class="feature">
          &check; Standard Access
        </div>
        </div>
        {{-- <a href="{{url_for('add_task')}}" class="btn mt-2 btn-light text-success"> --}}
        <a href="" class="btn mt-2 btn-light text-success">
          Create Portfolio</a
        >
      </div>
    </div>
  
    <!-- Third Price Card -->
    <div class="price-column">
      <div class="price-header">
        <div class="price">
          <div class="dollar-sign">$</div>
          10
          <div class="per-month">/mo</div>
        </div>
        <div class="plan-name">Enterprise</div>
        <div class="divider"></div>
  
        <div class="access">
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Stacked Premium
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          All Apps
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Complete Hub
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Unlimited Assets
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Live Excchanges
        </div>
        <div class="feature">
          <img src="{{URL('img/check.png')}}" />
          Unimited Access
        </div>
        </div>
        <a href="" class="btn mt-2 btn-success">
            {{-- <a href="{{url_for('add_task')}}" class="btn mt-2 btn-success"> --}}
          Create Portfolio</a
        >
      </div>
    </div>
  </section>
  
  <!-- Testimonial Section -->
  <section class="message pt-5">
    <div class="msg-heading">
      <div class="container col-xs-12 col-md-6 text-center">
        <h3 class="my-5">OUR COMMITMENT AND ETHOS</h3>
        <p>
          “Stacked takes a user-first approach and is committed to providing the
          best products to help the advancement of the decentralized movement and
          ecosystem.
        </p>
        <p>
          At Stacked, we believe that market data and information should be freely
          available for the benefit of the ecosystem. We are committed to always
          providing our services 100% free of charge to our end users.”
        </p>
      </div>
      <div class="media pt-5 mt-4">
        <img
          src="{{URL('img/man.jpg')}}"
          alt="John Doe"
          class="mr-5 mt-3 rounded-circle"
          style="width: 100px; height: 100px;"
        />
        <div class="media-body">
          <h4 class="mt-4">John Doe</h4>
          <p>CEO</p>
        </div>
      </div>
  
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,224L60,218.7C120,213,240,203,360,213.3C480,224,600,256,720,266.7C840,277,960,267,1080,234.7C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </div>
  </section>
  
  <!-- Site footer -->
  <footer id="footer" class="site-footer bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6 class="text-secondary">About</h6>
          <p class="text-justify">
            Investments are not FDIC insured and may lose value. Investing
            involves risk including loss of principal. Please consider, among
            other important factors, your investment objectives, risk tolerance
            and Acorns pricing before investing. Past performance does not
            guarantee or indicate future results. Acorns reserves the right to
            restrict or revoke any and all offers at any time. Acorns also offers
            an Acorns Spend deposit account
          </p>
        </div>
  
        <div class="col-xs-6 col-md-3">
          <h6 class="text-secondary">Contact</h6>
          <p>+353-1-1000100</p>
        </div>
  
        <div class="col-xs-6 col-md-3">
          <h6 class="text-secondary">Address</h6>
          <p>1000 Mountjoy Square Dublin</p>
        </div>
      </div>
      <hr />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved</p>
        </div>
  
        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li>
              <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
            </li>
            <li>
              <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

@endsection