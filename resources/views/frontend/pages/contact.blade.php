@extends('frontend.layouts.default')
@section('title','Sand blasting machine | Shot blasting machine | Grit blasting machine manufacturer')
@section('keywords','sand blasting machine, shot blasting machine, grit blasting machine, sand blasting machine manufacturer')
@section('description','We are manufacturer of different types of sand blasting machine, shot blasting machines. Our company manufacturing of two types of blasting related machine one is "airblast" and second is "wheelblast" machine. Blast Rooms are offering a wide collection of Airless Shot Blasting Machines, Sandblasting machine, Thermal Spray Guns, Coating Wires, and Abrasive Blasting material to the clients in best quality.')

@section('canonical',URL::current())
@section('contant')
<div class="page-top-info row">
<div class="container">
<h4>Contact</h4>
<div class="site-pagination">
<a href="#">Home</a> / Contact
</div>
</div>
</div>


<section class="contact-section">
<div class="container">
<div class="row">
<div class="col-lg-6 col-12 contact-info">

{{ Form::open(['id'=>'contact_form', 'data-url'=>route('contact-route') ,'class'=>'contact-form mb-5']) }}
<div class="row">
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<input type="text" name="contact_name" id="contact_name" class="form-control" required data-error="Please enter your name" placeholder="Name">
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<input type="email" name="contact_email" id="contact_email" class="form-control" required data-error="Please enter your email" placeholder="Email">
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<input type="text" name="contact_mobile" id="contact_mobile" required data-error="Please enter your number" class="form-control" placeholder="Phone">
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<input type="text" name="contact_country" id="contact_country" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="col-md-12 col-lg-12">
			<div class="form-group">
				<textarea name="contact_message" class="form-control" id="contact_message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<p  id="res_message" class="text-success"></p>
		<div class="col-md-12 col-lg-12">
			<button type="submit" class="btn" style="background:#50adb1;color:#fff;">
				Send Message
			</button>
			<div class="clearfix"></div>
		</div>
	</div>
{{ Form::close() }}


</div>

<div class="col-lg-6 col-12">
<h3 class="">Get in touch</h3>
<p><span><i class="icon-location"></i></span>&nbsp;{{ $setting->address }}</p></p>
<p><span><i class="icon-whatsapp"></i></span>&nbsp;{{ $setting->mobile_no }}</p>
<p><span><i class="icon-envelop"></i></span>&nbsp;<a href="" class="__cf_email__" data-cfemail="422a2d31362b2c2502212d2c362321366c212d2f">{{ $setting->email }}</a></p>
<div class="contact-social">
<a href="#"><i class="icon-pinterest"></i></a>
<a href="#"><i class="icon-facebook"></i></a>
<a href="#"><i class="icon-twitter"></i></a>
<a href="#"><i class="icon-dribbble"></i></a>
<a href="#"><i class="icon-behance"></i></a>
</div>
</div>
</div>
<div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=boranada,%20jodhpur,%20india+(blastrooms)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>

</div>
</section>
@stop