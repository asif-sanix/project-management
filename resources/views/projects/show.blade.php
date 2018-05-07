@extends('layouts.app')

@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{$company->name}}</h1>
          <p>{{$company->description}}<p>
          	<!--<a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a>-->
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-8">
          <div class="row">
          <a class="float-right btn btn-primary" href="/projects/create">Add Project</a>
        </div>
        <div class="row">
          
        	@foreach ($company->projects as $project)

            <div class="col-md-6">
            <h2>{{$project->name}}</h2>
            <p>{{$project->description}}</p>
            <p><a class="btn btn-secondary" href="/project/{{$project->id}}" role="button">View Project »</a></p>
           </div>

          @endforeach
        </div>
     </div>
          <aside class="col-md-4 blog-sidebar">
          <!-- <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->

          <div class="">
            <h4 class="">Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
              <li><a href="/projects/create">Add Project</a></li>
              <li><a href="/companies/create">Add Company</a></li>
              <li>
              <a href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>
              <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>
              </li>
            </ol>
          </div>

          <!--<div class="">
            <h4 class="font-italic">Members</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->

          
        </aside>
      </div>
      
      </div> <!-- /container -->
    @endsection