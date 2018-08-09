<?php $this->load->view('templates/header');?>


<!-- banner -->
<div class="banner">
	<!-- container -->
	<div class="container">
		<div class="banner-agileinfo">
			<script src="<?php echo base_url('assets1/js/responsiveslides.min.js')?>"></script>
			<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
					$("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});				
				});
			</script>
			<div  id="top" class="callbacks_container-wrap">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-w3text">
							<h3>Company Profile</h3>
							<h5>QES in Brief</h5>
							<p>QES is an Indonesian Based Company established in 2010 To Provide Third Party Inspection services then extended to other Oil and Gas Engineering services.</p>
							<p>Through our commitment, PT. Quality Engineering Services Giving priority to customer satisfaction and building on our Quality expertise currently enlarging its scope of services of Quality assurance and Quality Control consultancy services. </p>
							<div class="banner-buttons"> 
								<div class="banner-button">
									<a href="companyprofile">More</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-w3text">
							<h3>Services</h3>
							<h5>INSPECTION SERVICES</h5>
							<p>QES offers the services listed below, coupled with the value-added service of secured online scheduling and reporting. Providing inspection, testing, certification & verification services to ensure that products, services & systems meet quality, safety & performance requirements.</p>
							<div class="banner-buttons"> 
								<div class="banner-button">
									<a href="services">More</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>	
		</div>
	</div>
	<!-- //container -->
</div>
<!-- //banner -->
<div class="about">
	<div class="aboutw3-agileinfo">
		<!-- container -->
		<div class="container"><center>
			<h1>OIL AND GAS SERVICES<br>
			(INSPECTION & TESTING SERVICES)</h1>
			</center>
		</div>
		<!-- //container -->
	</div>
	<!-- about-bottom -->
	<div class="about-bottom">
		<!-- container -->
		<div class="container">
			<div class="about-agileinfo">
				<div class="col-md-6 about-w3grid">
					<h2>
						<ul>
							<br>
							<li>
								Quality Control-Word Wide Third Inspection Services: OCTG, Wellhead, Valve, X’Mas Tree, Down Hole, Refinery and petrochemical Services
							</li>
							<br>
							<li>
								Non-Destructive Testing & Inspection Services
							</li>
							<br>
							<li>
								Coating Painting and Blasting
							</li>
						</ul>
					</h2>
					
				</div>
				<div class="col-md-6 about-w3grid"> 
					<img src="<?php echo base_url('assets1/images/g1.jpg')?>" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- container -->
</div>
<!-- news-bottom -->
<div class="news-bottom">
	<!-- container -->
	<div class="container">
		<div class="news-w3agileitsinfo">
			<h3>KEY PERSON ENGINEER’S QUALIFICATIONS & CERTIFICATIONS</h3>
			<p style="color: black;">PT Quality Engineering Services supported by professional and experienced workers have a certificate in each expert :</p>
			<p style="color: black;">
				<ul>
					<li>
						Coating and Painting process  and Inspection SSPC, NACE Std
					</li>
					<li>
						Well versed on multiple Specifications of OCTG inspection such as: API Spec 5 CT, 5B, 5l, 6A, Spec 7, Vallourec & Mannesmann Spec TSLI, Grant Pideco on Atlas Bradford Spec, NSPJ, HYDRIL, JFE, etc.
					</li>
					<li>
						Well head and Down hole
					</li>
					<li>
						Inspection Non-Destructive testing: MPI, DPI, WI, UT and RI
					</li>
					<li>
						Quality System ISO
					</li>
				</ul>
			</p>
			<p style="color: black;">
				Note: Qualification of Inspector / Engineer will be submit on confirmation on the type of work order refer to Matrix inspectors
			</p>
		</div>
	</div>
	<!-- //container -->
</div>
<!-- //news-bottom -->
<?php $this->load->view('templates/footer');?>
