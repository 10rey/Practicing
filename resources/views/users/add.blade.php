@extends('users.layouts.app')

@section('body')
	
	<a href="/income" class="btn btn-info">Back</a>

	<div class="col-lg-4">

		<h1>{{substr(Route::currentRoutename(),7)}} incoming payments</h1>

			<form class="form-horizontal" action="/income/@yield('editId')" method="post">

				{{csrf_field()}}

				@section('editMethod')

					@show

			    <div class="form-group">
			      <label>Date</label>
			      <input type="text" value="@yield('editDate')" class="form-control" name="date">
			    </div>
			    <div class="form-group">
			      <label>Amount</label>
			      <input type="text" value="@yield('editAmount')" class="form-control" name="amount" placeholder="Amount">
			    </div>

			    <div class="form-group">
			      <label">Description</label>
			      <textarea class="form-control" value="@yield('editDescription')" name="description" placeholder="Description"rows="5">@yield('editDescription')</textarea>
			    </div>

			    <div class="form-group">
			      <label>Category</label>
			      <input type="text" value="@yield('editCategory')" class="form-control" name="category" placeholder="Category">
			    </div>
			    
			    <button type="submit" class="btn btn-primary">Submit</button>
			  
			</form>

			@include('users.partials.errors')

	</div>

@endsection