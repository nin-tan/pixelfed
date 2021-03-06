@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-primary text-white mb-0 py-4">
  <div class="container">
    <p class="h1 font-weight-light">About</p>
	<p class="h3 font-weight-light py-4">Pixelfed is an image sharing platform, an ethical alternative to centralized platforms.</p>
  </div>
</div>
<div class="bg-white">
	<div class="container d-flex justify-content-center">
	  <div class="card" style="width:500px;margin-top:-30px;">
	    <div class="card-header d-inline-flex align-items-center bg-white">
	        <img src="/storage/avatars/default.png" width="32px" height="32px" style="border-radius: 32px; border: 1px solid #ccc">
	        <span class="username font-weight-bold pl-2 text-dark">
	          username
	        </span>
	    </div>
	    <div class="card-body p-0">
	      <img class="img-fluid" src="/img/sample-post.jpeg">
	    </div>
	    <div class="card-footer bg-white">
	      <div class="likes font-weight-bold mb-2">
	        <span class="like-count">124k</span> likes
	      </div>
	      <div class="caption">
	        <p class="mb-1">
	          <span class="username font-weight-bold">
	            <bdi>username</bdi>
	          </span>
	          <span class="caption-body" data-processed="false">Hello world! <a href="#">#introduction</a></span>
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="container py-5">
	</div>

</div>
<div class="bg-primary pt-5 pb-4">
	<div class="container">
	  <div class="row">
	    <div class="col-12 col-md-4 mb-4">
	      <div class="card bg-transparent" style="box-shadow: none;border:1px solid #fff">
	        <div class="card-body text-white text-center">
	          <p class="font-weight-bold lead mb-0">
	            Ad Free
	          </p>
	          <p class="font-weight-light mb-0">No Ads or Trackers</p>
	        </div>
	      </div>
	    </div>
	    <div class="col-12 col-md-4 mb-4">
	      <div class="card bg-transparent" style="box-shadow: none;border:1px solid #fff">
	        <div class="card-body text-white text-center">
	          <p class="font-weight-bold lead mb-0">
	            Chronological
	          </p>
	          <p class="font-weight-light mb-0">Timelines in order</p>
	        </div>
	      </div>
	    </div>
	    <div class="col-12 col-md-4 mb-4">
	      <div class="card bg-transparent" style="box-shadow: none;border:1px solid #fff">
	        <div class="card-body text-white text-center">
	          <p class="font-weight-bold lead mb-0">
	            Federated
	          </p>
	          <p class="font-weight-light mb-0">A network of millions</p>
	        </div>
	      </div>
	    </div>
	    <div class="col-12 col-md-4 mb-4">
	      <div class="card bg-transparent" style="box-shadow: none;border:1px solid #fff">
	        <div class="card-body text-white text-center">
	          <p class="font-weight-bold lead mb-0">
	            Discover
	          </p>
	          <p class="font-weight-light mb-0">Discover popular posts</p>
	        </div>
	      </div>
	    </div>
	    <div class="col-12 col-md-4 mb-4">
	      <div class="card bg-transparent" style="box-shadow: none;border:1px solid #fff">
	        <div class="card-body text-white text-center">
	          <p class="font-weight-bold lead mb-0">
	            Photo Filters
	          </p>
	          <p class="font-weight-light mb-0">Add an optional filter</p>
	        </div>
	      </div>
	    </div>
	    <div class="col-12 col-md-4 mb-4">
	      <div class="card bg-transparent" style="box-shadow: none;border:1px solid #fff">
	        <div class="card-body text-white text-center">
	          <p class="font-weight-bold lead mb-0">
	            Stories
	          </p>
	          <p class="font-weight-light mb-0">Coming Soon!</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endsection

@push('meta')
<meta property="og:description" content="Pixelfed is an image sharing platform, an ethical alternative to centralized platforms.">
@endpush