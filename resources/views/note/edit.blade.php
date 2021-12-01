@extends('layouts.app')
@section('alpha')
<form action="{{route('note.update',$note->id)}}" method="POST">
    @method('PUT')
  @csrf
<div class="mb-3 Me">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input value="{{$note->title}}" type="text" class="form-control" name="title" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea value="{{$note->description}}" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-primary">EDIT</button>
</form>

@endsection