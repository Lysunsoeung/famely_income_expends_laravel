@include('frontpages.partials.header-link')



<!-- navigation -->
@include('frontpages.partials.navbar')
<!-- /navigation -->

<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <div class="row">
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_amount" class="form-label">Amount</label>
                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_how_long_for" class="form-label">How long for?</label>
                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
              </div>
            </div>
            <div class="col-lg-12 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_repayment" class="form-label">Repayment</label>
                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control shadow-none" id="loan_full_name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_email_address" class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none" id="loan_email_address">
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<section class="banner bg-tertiary position-relative overflow-hidden">
    <div class="container">
        <div class="row align-items-center justify-content-center">
        <div class="col-lg-12 mb-5 mb-lg-0">
            <div class="block text-center text-lg-start pe-0 pe-xl-5">
            <h1 style="font-weight: 500" class="text-center mb-4"> <span class="text-success">{{trans('test.SW')}}</span><br/> {{trans('test.TM')}} <span class="text-success">{{trans('test.PF')}}</span></h1>
            <div class="text-center">

                    <a href="{{ route('login') }}" class="btn btn-outline-primary">Try on browser</a>

                    <a href="{{ route('register') }}" class="btn btn-primary ms-2 ms-lg-3">Download for free</a>
            </div>
            </div>


        </div>
        </div>

    <br><br><br/>
    <div class="row mt-5 m-5">

        <div class="col-lg-3 col-md-6 service-item">
        <a class="text-black" href="#">
            <div class="block"> <span class="colored-box text-center h3 mb-4">

                <img class="align-center " src="#" />

            </span>
            <h3 class="mb-3 service-title  fw-normal fs-4">100% Secure data</h3>
            </div>
        </a>
        </div>

        <div class="col-lg-3 col-md-6 service-item">
            <a class="text-black" href="#">
            <div class="block"> <span class="colored-box text-center h3 mb-4">

                <img src="#" />

                </span>
                <h3 class="mb-3 service-title  fw-normal fs-4">1 Million+ users</h3>
            </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 service-item">
            <a class="text-black" href="#">
            <div class="block"> <span class="colored-box text-center h3 mb-4">

                <img src="#" />

                </span>
                <h3 class="mb-3 service-title  fw-normal fs-4">100K+ 5-star Reviews</h3>
            </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6 service-item">
            <a class="text-black" href="#">
            <div class="block"> <span class="colored-box text-center h3 mb-4">

                <img src="#" />

                </span>
                <h3 class="mb-3 service-title fw-normal fs-4">App of the day</h3>
            </div>
            </a>
        </div>

    </div>
</section>


<section class="about-section section bg-tertiary position-relative overflow-hidden">

  <div class="container" style="margin-bottom:100px">
    <div class="row align-items-center" style="justify-content: center;">
      <div class="col-lg-5 ">
        <div class="section-title">

            <div class="col-lg-10 col-md-6 pt-1">
                <div class="shadow rounded bg-white p-4 mt-4" style="font-seze:12px">
                  <div class="d-flex justify-content-between">
                    <div class="bg-white">LAST MONTH</div>
                    <div class="bg-white text-dark fw-bold">THIS MONTH</div>
                    <div class="bg-white">FUTURE</div>

                  </div><hr>

                  <div class="d-flex justify-content-between">
                    <div class="bg-white">
                        <img src="#" width="24px" height="24px" />
                        <label for="">Text</label>
                    </div>
                    <div class="bg-white">50,000</div>
                  </div><br>

                  <div class="d-flex justify-content-between">
                    <div class="bg-white">
                        <img src="#" width="24px" height="24px" />
                        <label for="">Text</label>
                    </div>
                    <div class="bg-white">50,000</div>
                  </div><br>

                  <div class="d-flex justify-content-between">
                    <div class="bg-white">
                        <img src="#" width="24px" height="24px" />
                        <label for="">Text</label>
                    </div>
                    <div class="bg-white">50,000</div>
                  </div><br>


                </div>
            </div>

        </div>
      </div>

      <div class="col-lg-5 text-center text-lg-end">
        <div class="section-title">
            <h1 style="text-align:left" class="fw-normal">Simple money tracker</h1>
            <p class="lead mb-0 mt-4">
              <p style="text-align:left">It takes seconds to record daily transactions. Put them into clear and visualized categories such as Expense: Food, Shopping or Income: Salary, Gift.</p>
          </div>
      </div>
    </div>
  </div>


  <div class="container" style="margin-bottom:100px">
    <div class="row align-items-center" style="justify-content: center;">
        <div class="col-lg-5 text-center text-lg-end">
            <div class="section-title">
                <h1 style="text-align:left" class="fw-normal">Painless budgeting</h1>
                <p class="lead mb-0 mt-4">
                  <p style="text-align:left">It takes seconds to record daily transactions. Put them into clear and visualized categories such as Expense: Food, Shopping or Income: Salary, Gift.</p>
              </div>
        </div>

      <div class="col-lg-5 ">
        <div class="section-title">

            <div class="col-lg-10 col-md-6 pt-1">
                <div class="shadow rounded bg-white p-4 mt-4" style="font-seze:12px">

                  <div class="d-flex justify-content-between">
                    <div class="bg-white">
                        <img src="#" width="24px" height="24px" />
                        <label for="">Text</label>
                    </div>
                    <div class="bg-white">50,000</div>
                  </div><br>

                

                </div>
              </div>

        </div>
      </div>

    </div>
  </div>


  <div class="container" style="margin-bottom:100px">
    <div class="row align-items-center" style="justify-content: center;">
      <div class="col-lg-5 ">
        <div class="section-title">

            <div class="col-lg-10 col-md-6 pt-1">
                <div class="shadow rounded bg-white p-4 mt-4" style="font-seze:12px">

                  <table class="table table-borderless text-dark">
                    <thead>
                      <tr class="text-center">
                        <th>Income</th>
                        <th>Expenses</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center" style="font-size: 20px;">
                        <td class="text-primary">$ John</td>
                        <td class="text-danger">$ Doe</td>
                      </tr>

                      <tr class="text-center">
                        <td class="text-primary">
                            <img hight="40px"; width="40px";  src="" alt="income">
                        </td>
                        <td class="text-danger">
                            <img hight="40px"; width="40px";  src="" alt="expense">
                        </td>
                      </tr>

                    </tbody>
                  </table>

                </div>
            </div>



        </div>
      </div>

      <div class="col-lg-5 text-center text-lg-end">
        <div class="section-title">
            <h1 style="text-align:left" class="fw-normal">The whole picture in one place</h1>
            <p class="lead mb-0 mt-4">
              <p style="text-align:left">One report to give a clear view on your spending patterns. Understand where your money comes and goes with easy-to-read graphs.</p>
            </div>
      </div>
    </div>
  </div>

</section><br><br>

<section class="homepage_tab position-relative">
  <div class="section container">
    <div class="row justify-content-center">
      <div class="col-lg-8 mb-4">
        <div class="section-title text-center">
          <p class="text-primary text-uppercase fw-bold mb-3">Painless budgeting</p>
          <h1>Get Know The Basics Simple Pricing And Payments</h1>
        </div>
      </div>
      <div class="col-lg-10">
        <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-dark active" id="pills-how-much-can-i-recive-tab"
              data-bs-toggle="pill" href="#pills-how-much-can-i-recive" role="tab"
              aria-controls="pills-how-much-can-i-recive" aria-selected="true">How Much Can I Recive?</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-much-does-it-costs-tab"
              data-bs-toggle="pill" href="#pills-how-much-does-it-costs" role="tab"
              aria-controls="pills-how-much-does-it-costs" aria-selected="true">How Much Does It Costs?</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
              data-bs-toggle="pill" href="#pills-how-do-i-repay" role="tab" aria-controls="pills-how-do-i-repay"
              aria-selected="true">How Do I Repay?</a>
          </li>
        </ul>
        <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-how-much-can-i-recive" role="tabpanel"
            aria-labelledby="pills-how-much-can-i-recive-tab">
            <div class="row align-items-center">
              <div class="col-md-6 order-1 order-md-0">
                <div class="content-block">
                  <h3 class="mb-4">How Much Can I Recive?</h3>
                  <div class="content">
                    <p>Text Description</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                <div class="image-block text-center">
                  <img loading="lazy" decoding="async"
                    src="{{ asset("images/frontend") }}/payment-info.png" alt="How Much Can I Recive?" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="pills-how-much-does-it-costs" role="tabpanel"
            aria-labelledby="pills-how-much-does-it-costs-tab">
            <div class="row align-items-center">
              <div class="col-md-6 order-1 order-md-0">
                <div class="content-block">
                  <h3 class="mb-4">How Much Does It Costs?</h3>
                  <div class="content">
                    <p>Text Description</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                <div class="image-block text-center">
                  <img loading="lazy" decoding="async" src="{{ asset("images/frontend") }}/illustration-2.png" alt="How Much Does It Costs?" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="pills-how-do-i-repay" role="tabpanel"
            aria-labelledby="pills-how-do-i-repay-tab">
            <div class="row align-items-center">
              <div class="col-md-6 order-1 order-md-0">
                <div class="content-block">
                  <h3 class="mb-4">How Do I Repay?</h3>
                  <div class="content">
                    <p>Text Description</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                <div class="image-block text-center">
                  <img loading="lazy" decoding="async" src="{{ asset("images/frontend") }}/illustration-1.png" alt="How Do I Repay?" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<footer class="section-sm bg-tertiary">
	<div class="container">
<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Personal loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Home Equity Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Student Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Mortgage Loans</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Payday Loans</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">About</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">Benefits</a>
						</li>
						<li class="mb-2"><a href="#!">Careers</a>
						</li>
						<li class="mb-2"><a href="#!">Our Story</a>
						</li>
						<li class="mb-2"><a href="#!">Team</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Help</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="contact.html">Contact Us</a>
						</li>
						<li class="mb-2"><a href="faq.html">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 newsletter-form">
				<div style="background-color: #F4F4F4; padding: 35px;">
					<h5 class="mb-4 text-primary font-secondary">Subscribe</h5>
					<div class="pe-0 pe-xl-5">
						<form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank">
							<div class="input-group mb-3">
								<input type="text" class="form-control shadow-none bg-white border-end-0" placeholder="Email address"> <span class="input-group-text border-0 p-0">
                                <button class="input-group-text border-0 bg-primary" type="submit" name="subscribe"
                                aria-label="Subscribe for Newsletter"><i class="fas fa-arrow-right"></i></button>
                            </span>
							</div>
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
							</div>
						</form>
					</div>
					<p class="mb-0">Lorem ipsum dolor sit amet, rdghds consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center mt-5 text-center text-md-start">
			<div class="col-lg-4">
        <a href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{asset('frontend')}}/images/logo." alt="logo">
        </a>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
				<ul class="list-unstyled list-inline mb-0 text-lg-center">
					<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
					</li>
					<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
					</li>
				</ul>
			</div>
<div class="col-lg-4 col-md-6 text-md-end mt-4 mt-md-0">
				<ul class="list-unstyled list-inline mb-0 social-icons">
					<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- # JS Plugins -->
@include("frontpages.partials.footer-link")
