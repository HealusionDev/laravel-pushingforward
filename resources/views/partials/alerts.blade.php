@if(session('success'))
<div class="toast alert-success" id="myToast" role="alert" data-delay="5000" data-autohide="true" data-animation="true" style="position: absolute; top: 8vh; right: 3vh; height: 11vh; width: 25vh;">
	<div class="toast-header">
		<strong class="mr-auto">Succès</strong>
		<small>à l'instant</small>
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body text-center">
		{{ session('success') }}
	</div>
</div>

@endif

@if(session('warning'))
	<div class="toast alert-warning" id="myToast" role="alert" data-delay="5000" data-autohide="true" data-animation="true" style="position: absolute; top: 8vh; right: 3vh; height: 10vh; width: 20vh;">
	<div class="toast-header">
		<strong class="mr-auto">Succès</strong>
		<small>à l'instant</small>
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body text-center">
		{{ session('warning') }}
	</div>
</div>
@endif

@if(session('error'))
	<div class="toast alert-error" id="myToast" role="alert" data-delay="5000" data-autohide="true" data-animation="true" style="position: absolute; top: 8vh; right: 3vh; height: 10vh; width: 20vh;">
	<div class="toast-header">
		<strong class="mr-auto">Succès</strong>
		<small>à l'instant</small>
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body text-center">
		{{ session('error') }}
	</div>
</div>
@endif


<script src="{{ mix('js/toast.js') }}"></script>