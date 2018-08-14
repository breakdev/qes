<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");

function admin_menu()
{
	return '
	<li>
	<a href="'.site_url('admin').'" class="waves-effect"><i class="fa fa-home m-r-10" aria-hidden="true"></i>Dashboard</a>
	</li>
	<li>
	<a href="'.site_url('staff').'" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Staff</a>
	</li>
	<li>
	<a href="'.site_url('company').'" class="waves-effect"><i class="fa fa-building-o m-r-10" aria-hidden="true"></i>Company</a>
	</li>
	<li>
	<a href="'.site_url('job').'" class="waves-effect"><i class="fa fa-briefcase m-r-10" aria-hidden="true"></i>Job</a>
	</li>
	<li>
	<a href="'.site_url('clienta').'" class="waves-effect"><i class="fa fa-laptop m-r-10" aria-hidden="true"></i>Client</a>
	</li>
	<li>
	<a href="'.site_url('contact').'" class="waves-effect"><i class="fa fa-envelope m-r-10" aria-hidden="true"></i>Contact</a>
	</li>
	<li>
	<a href="#" class="waves-effect"><i class="fa fa-briefcase m-r-10" aria-hidden="true"></i>Career</a>
	<ul>
	<li>
	<a href="'.site_url('career').'" class="waves-effect"><i class="fa fa-briefcase m-r-10" aria-hidden="true"></i>Job Position</a>
	</li>
	<li>
	<a href="'.site_url('applicant').'" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Applicant</a>
	</li>
	</ul>
	</li>
	';
}

function member_menu()
{
return '
	<li>
	<a href="'.site_url('member').'" class="waves-effect"><i class="fa fa-home m-r-10" aria-hidden="true"></i>Dashboard</a>
	</li>
	<li>
	<a href="'.site_url('companym').'" class="waves-effect"><i class="fa fa-building-o m-r-10" aria-hidden="true"></i>Company</a>
	</li>
	<li>
	<a href="'.site_url('clientm').'" class="waves-effect"><i class="fa fa-laptop m-r-10" aria-hidden="true"></i>Client</a>
	</li>
	';}

function menu()
{
	return '
	<li class="home-icon">
	<a href="'.site_url('home').'">
	<span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	<li><a href="'.site_url('companyprofile').'">Company Profile</a></li>
	<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="'.site_url('services').'">Our Services</a></li>
									<li><a class="hvr-bounce-to-bottom" href="'.site_url('product').'">Product</a></li>        
								</ul>
							</li>	
	<li><a href="'.site_url('gallery').'">Gallery</a></li>
	<li><a href="'.site_url('client').'">List Of SC</a></li> 
	<li><a href="'.site_url('kontak').'">Contact</a></li>
	';
}
