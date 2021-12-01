@extends('layouts.app')
@section('alpha')
<form action="{{route('note.store')}}" method="POST">
  @csrf
<div class="mb-3 Me">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-primary">ADD</button>
</form>

@endsection