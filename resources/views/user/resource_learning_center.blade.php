@extends("user.layouts.app")

@section("content")

<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">Resource Learning Center</h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="{{ route('user.dashboard') }}">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="{{ route('user.rlc') }}">Resource Learning Center</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="#"></a>
			</li>
		</ul>
    </div>
    </div>
                        

                        
@endsection

@push("js")
<script>
</script>

@endpush