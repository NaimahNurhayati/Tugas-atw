@foreach(['success', 'warning', 'danger'] as $status)
@if (session($status))
<div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box" style="width: 90%;">
	<a href="#" class="close" data-dismis="alert" aria-label="close">&times;</a>
	<strong> {{ session($status) }}</strong>
</div>
@endif
@endforeach