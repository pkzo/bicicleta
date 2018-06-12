@if(session()->has('message_success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  {!! session()->get('message_success') !!}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@elseif(session()->has('message_error'))
	<div class="alert alert-danger 	 alert-dismissible fade show" role="alert">
	  {!! session()->get('message_error') !!}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif