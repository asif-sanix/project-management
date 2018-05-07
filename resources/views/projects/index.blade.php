@extends('layouts.app')

@section('content')
<div class="container">
<div class="card   ">
  <div class="card-header bg-primary text-white">Companies <a class="float-right btn btn-primary" href="/companies/create">Add Company</a></div>
  <div class="card-body">
    <ul class="list-group">
       @foreach ($companies as $company)
         <li class="list-group-item"><a href="/companies/{{$company->id}}"> {{ $company->name }}</a> </li>
       @endforeach
   </ul>


  </div>
</div>
</div>
@endsection