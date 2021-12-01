@extends('layouts.app')
@section('alpha')
<div class="mb-3 Me">
  <label for="exampleFormControlInput1" class="form-label">Title</label>
  <input disabled value="{{$note->title}}" type="text" class="form-control" name="title" id="exampleFormControlInput1">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea disabled class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$note->description}}</textarea>
</div>
<a class="btn btn-primary" href="{{route('home')}}">Close</a>
@endsection