@extends ('users.add')

@section('editId',$item->income_id)

@section('editDate', $item->date)

@section('editAmount', $item->amount)

@section('editDescription', $item->description)

@section('editCategory', $item->category)

@section('editMethod')
	{{method_field('PUT')}}
@endsection

