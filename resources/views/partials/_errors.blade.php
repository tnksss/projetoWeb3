@foreach(['success', 'info', 'warning', 'danger'] as $notice)
    @if (session($notice))
	    <div class="alert alert-{{ $notice }} alert-dismissible">
	        {{ session($notice) }}
	    </div>
    @endif
@endforeach