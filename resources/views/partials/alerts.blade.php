<div class="container">
	@if (session('success'))
		<div class="alert alert-primary" role="alert">
	    	I {{session('success')}}
		</div>
	@endif	


	@if (session('success'))
		<div class="alert alert-danger" role="alert">
	    	I {{session('error')}}
		</div>
	@endif	
</div>  