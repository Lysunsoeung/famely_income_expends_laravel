
@include('frontpages.partials.header-link')


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

<section class="page-header bg-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize text-primary">About Us</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a href="index.html">Home</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="about.html">About</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

</section>

<section class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-7">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3">About Wallet</p>
					<h2 class="h1 mb-4">Business Loans <br> For Daily Expenses</h2>
					<div class="content pe-0 pe-lg-5">
                        <p>Text here</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 mt-lg-0">
				<img loading="lazy" decoding="async" src="{{asset("images/frontend")}}/about/about-11.jpg" alt="Business Loans &lt;br&gt; For Daily Expenses" class="rounded w-100">
			</div>
		</div>
	</div>
</section>

<section class="about-section section bg-tertiary position-relative overflow-hidden">
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-lg-5">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3"></p>
					<h2>Who We Are?</h2>
				</div>
				<p class="lead">Important Text.</p>
				<div class="content">Text Content</div>
			</div>
			<div class="col-lg-5">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3"></p>
					<h2>What We Offer?</h2>
				</div>
				<p class="lead">Text Important</p>
				<div class="content">
					<ul>
						<li>Once</li>
						<li>Two</li>
						<li>Three</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="section-sm bg-primary-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center icon-box-item">
				<div class="icon icon-lg bg-transparent mb-4"><i class="fas fa-mouse-pointer text-primary"></i>
				</div>
				<h3>Quick Decision</h3>
				<p class="px-lg-5">Begin the process when it is convenient for you</p>
			</div>
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center icon-box-item">
				<div class="icon icon-lg bg-transparent mb-4"><i class="fas fa-file-alt text-primary"></i>
				</div>
				<h3>Submit Your Info</h3>
				<p class="px-lg-5">Begin the process when it is convenient for you</p>
			</div>
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center icon-box-item">
				<div class="icon icon-lg bg-transparent mb-4"><i class="fas fa-briefcase text-primary"></i>
				</div>
				<h3>Funds To You</h3>
				<p class="px-lg-5">Begin the process when it is convenient for you</p>
			</div>
		</div>
	</div>
</section>

{{-- <section class="section core-value bg-tertiary">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="row position-relative gy-4">
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<div class="icon rounded-number">01</div>
							<h3 class="mb-3">Authentic</h3>
							<p class="mb-0">Description ...</p>
						</div>
					</div>
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<div class="icon rounded-number">02</div>
							<h3 class="mb-3">Empathetic</h3>
							<p class="mb-0">Description ...</p>
						</div>
					</div>
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<div class="icon rounded-number">03</div>
							<h3 class="mb-3">All Improving</h3>
							<p class="mb-0">Description ...</p>
						</div>
					</div>
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<div class="icon rounded-number">04</div>
							<h3 class="mb-3">User-Focused</h3>
							<p class="mb-0">Description ...</p>
						</div>
					</div>
					<div class="has-shapes">
						<svg class="shape shape-1 text-primary" width="71" height="71" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z" fill="currentColor" />
							<path d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z" fill="currentColor" />
							<path d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z" fill="currentColor" />
							<path d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z" fill="currentColor" />
							<path d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z" fill="currentColor" />
							<path d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z" fill="currentColor" />
							<path d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z" fill="currentColor" />
							<path d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z" fill="currentColor" />
							<path d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z" fill="currentColor" />
							<path d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z" fill="currentColor" />
							<path d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z" fill="currentColor" />
							<path d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z" fill="currentColor" />
							<path d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z" fill="currentColor" />
							<path d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z" fill="currentColor" />
							<path d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z" fill="currentColor" />
							<path d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z" fill="currentColor" />
							<path d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z" fill="currentColor" />
							<path d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z" fill="currentColor" />
							<path d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z" fill="currentColor" />
						</svg>
						<svg class="shape shape-2 text-primary" width="100" height="100" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z" fill="currentColor" />
							<path d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z" fill="currentColor" />
							<path d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z" fill="currentColor" />
							<path d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z" fill="currentColor" />
							<path d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z" fill="currentColor" />
							<path d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z" fill="currentColor" />
							<path d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z" fill="currentColor" />
							<path d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z" fill="currentColor" />
							<path d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z" fill="currentColor" />
							<path d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z" fill="currentColor" />
							<path d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z" fill="currentColor" />
							<path d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z" fill="currentColor" />
							<path d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z" fill="currentColor" />
							<path d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z" fill="currentColor" />
							<path d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z" fill="currentColor" />
							<path d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z" fill="currentColor" />
							<path d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z" fill="currentColor" />
							<path d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z" fill="currentColor" />
							<path d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z" fill="currentColor" />
						</svg>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="section-title ps-0 ps-lg-5">
					<p class="text-primary text-uppercase fw-bold mb-3">Values Wr   </p>
					<h2 class="h1">Our Core Values</h2>
					<div class="content">
						<p>Some text.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<section class="section teams">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="section-title text-center">
					<p class="text-primary text-uppercase fw-bold mb-3">Our Members</p>
					<h1>Member of Team</h1>
					<p class="mb-0">We are members of group one
				</div>
			</div>
		</div>
		<div class="row position-relative justify-content-center">
			<div class="col-xl-4 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset("images/frontend")}}/about/team-1.jpg" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Tha Sokcheat</h3>
						<p>Year 3 of University</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset("images/frontend")}}/about/team-2.jpg" alt="Claire Simmmons" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Soeung Lysun</h3>
						<p>Year 3 of University</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset("images/frontend")}}/about/team-3.jpg" alt="Leslie Pena" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="https://www.facebook.com/po.rosel"target="_blank"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Po Rozel</h3>
						<p>Year 3 University</p>
					</div>
				</div>
			</div>
            <div class="col-xl-4 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset("images/frontend")}}/about/team-2.jpg" alt="Claire Simmmons" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Han Vakhim</h3>
						<p>Year 3 of University</p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset("images/frontend")}}/about/team-2.jpg" alt="Claire Simmmons" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Rom Heng</h3>
						<p>Year 3 of University</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<footer class="section-sm bg-tertiary" style="height:100px">
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
