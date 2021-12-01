@extends('layouts.app')
@section('alpha')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($notes as $note)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$note->title}}</td>
      <td>
          <a href="{{route('note.show',$note->id)}}" class="btn btn-primary">Show</a>
          <a href="{{route('note.edit',$note->id)}}" class="btn btn-warning">Update</a>
          <form action="{{route('note.destroy',$note->id)}}" method="POST" style="display: inline-block">
           @csrf
           @method('DELETE')
           <button class="btn btn-danger">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection