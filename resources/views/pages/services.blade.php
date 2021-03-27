@extends('main')

@section('content')
  	<section class="my-5">
  		<div class="mx-5">  				
  			<h3 class="float-start">LOGISTIC SERVICES</h3>
     		<a href="{{ url('contact') }}" class="btn btn-sm btn-secondary float-end">Find Us >></a>
  		</div>

  		<div class="text-center">
			<img src="{{ asset('images/storage-top.png') }}" width="50%">
  		</div>
  		<hr>
  		<div class="row justify-content-center">
  			<div class="col-5 pt-3">
				<img src="{{ asset('images/logistics-chart.png') }}" class="float-right" width="">
  			</div>
  			<div class="col-5">
  				<b><h3>Overview of our services:</h3></b>
  				<br>
  				<ul>
  					<li>Airfreight & Sea freight (Break-bulk/FCL/LCL)</li>
					<li>Project Shipment</li>
					<li>Chartering (Ship/LCT/Barge/Air Plane)</li>
					<li>Door to door services</li>
					<li>Professional Urgent Cargo Handling</li>
					<li>Transshipment</li>
					<li>Warehousing & Distribution</li>
					<li>Land Transportation</li>
					<li>Marine Cargo Insurance and Surveyors Service</li>
					<li>Pipe Yard Management</li>
					<li>Cargo Ship Agency Management</li>
  				</ul>
  			</div>
  		</div>
  		<hr>

  		<p class="text-center">MSN Shipping always put its customer’s interest first by providing high quality service and care of each customer’s needs. <br>

		To materialise the above policy, we created an effective transport-logistics system on every stage. <br>

		We do our best to ensure every shipment has adequate attention to details such as goods tally, survey, inspection and/or photographs taken. <br>
		</p>

		<div class="text-center mt-5">
			<img src="{{ asset('images/logistics-steps.png') }}" width="60%">
  		</div>
  		<hr>

  		<div class="row justify-content-center mx-4">
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (1).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (2).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (3).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (4).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (5).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (6).jpeg') }}"  width="100%" height="100%">
			</div>

			<div class="col-2 my-2">
				<img src="{{ asset('images/un (7).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (8).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (1).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (2).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (3).jpeg') }}"  width="100%" height="100%">
			</div>
			<div class="col-2 my-2">
				<img src="{{ asset('images/un (4).jpeg') }}"  width="100%" height="100%">
			</div>
		</div>

		<hr>
		<p class="text-center">If you would like to know more about this service please contact us (+65 6221 1993) and we will respond to you as quickly as possible
</p>

  	</section>
@endsection
