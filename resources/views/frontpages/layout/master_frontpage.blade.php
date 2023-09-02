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
          <h1 style="font-weight: 500" class="text-center mb-4"> <span class="text-success">Simple way </span><br/> to manage <span class="text-success">personal finances</span></h1>
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
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div><div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div>

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
                <h1 style="text-align:left" class="fw-normal">Simple money tracker</h1>
                <p class="lead mb-0 mt-4">
                  <p style="text-align:left">It takes seconds to record daily transactions. Put them into clear and visualized categories such as Expense: Food, Shopping or Income: Salary, Gift.</p>
              </div>
        </div>

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
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div><div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div>

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
                  <div class="d-flex justify-content-between">
                    <div class="bg-white">LAST MONTH</div>
                    <div class="bg-white text-dark fw-bold">THIS MONTH</div>
                    <div class="bg-white">FUTURE</div>

                  </div><hr>

                  <div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div><div class="d-flex justify-content-between">
                    <div class="bg-white">Food</div>
                    <div class="bg-white">50,000</div>
                  </div>

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

</section>

<section class="section testimonials overflow-hidden bg-tertiary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <h1 class="mb-4 text-primary">Features our users love
          </h1>
        </div>
      </div>
    </div>

    <div class="row mt-5 m-5 justify-content-center">

          <div class="col-lg-3 col-md-6 service-item">
            <a class="text-black" href="#">
              <div class="block"> <span class="colored-box text-center h3 mb-4 ">

                  <img class="align-center " src="#" />

                </span>
                <h3 class="mb-3 service-title  fw-normal fs-4">100% Secure data</h3>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 service-item">
            <a class="text-black" href="#">
              <div class="block"> <span class="colored-box text-center h3 mb-4 ">

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

    </div>

    <div class="row mt-5 m-5 justify-content-center">

        <div class="col-lg-3 col-md-6 service-item">
          <a class="text-black" href="#">
            <div class="block"> <span class="colored-box text-center h3 mb-4 ">

                <img class="align-center " src="#" />

              </span>
              <h3 class="mb-3 service-title  fw-normal fs-4">100% Secure data</h3>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 service-item">
          <a class="text-black" href="#">
            <div class="block"> <span class="colored-box text-center h3 mb-4 ">

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

  </div>

</section>


<footer class="section-sm bg-tertiary">
	<div class="container">
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

		</div>
	</div>
</footer>


<!-- # JS Plugins -->
@include("frontpages.partials.footer-link")
