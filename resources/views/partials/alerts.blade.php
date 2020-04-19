@if(session('success'))
	<div class="alert alert-success" role="alert" style="text-align: center; margin: 0; font-weight: 400;">
	  {{ session('success') }}
	</div>
@endif

@if(session('warning'))
	<div class="alert alert-warning" role="alert">
	  {{ session('warning') }}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger" role="alert">
	  {{ session('error') }}
	</div>
@endif