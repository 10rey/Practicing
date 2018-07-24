@extends('users.layouts.app')

@section('body')
	
	<br>

	@include('users.partials.message')

	<div class="col-lg-10 offset-lg-1">

		<center><h1>Income</h1></center>

		<a href="income/create" class="btn btn-info">Add New</a>

		<div class="pt-3">

			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Date</th>
						<th>Amount</th>
						<th>Description</th>
						<th>Category</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($income as $incomes)
						<tr>
							
								<td>{{$incomes->date}}</td>
								<td>{{$incomes->amount}}</td>
								<td>{{$incomes->description}}</td>
								<td>{{$incomes->category}}</td>

								<td>
								<center>	
									<a href="{{'/income/'.$incomes->income_id.'/edit/'}}" class="btn btn-info">Edit</a>

									<form class="form-group pull-right" action="{{'/income/'.$incomes->income_id}}" method="post" accept-charset="utf-8">

										{{csrf_field()}}
										{{ method_field('DELETE') }}

										{{-- <a href="" class="btn btn-danger">Delete</a> --}}
										<button type="submit" class="btn btn-danger pull-right">Delete</button>
										
									</form>
										
								</center>
								</td>
							
							
						</tr>
					@endforeach
				</tbody>
			</table>

		</div>
		
	</div>



@endsection