@if(session('success'))
	<div class="alert alert-success" role="alert" style="text-align: center; margin: 0; font-weight: 600;">
	  {{ session('success') }}
	</div>
@endif

@if(session('warning'))
	<div class="alert alert-warning" role="alert" style="text-align: center; margin: 0; font-weight: 600;">
	  {{ session('warning') }}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger" role="alert" style="text-align: center; margin: 0; font-weight: 600;">
	  {{ session('error') }}
	</div>
@endif