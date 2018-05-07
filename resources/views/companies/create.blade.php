@extends('layouts.app')

@section('content')

  

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
        <div class="col-md-8">
        <div class="row">

        

            <div class="col-md-12">




            	<form method="POST" action="{{ route('companies.store') }}">
                      {{ csrf_field() }}


                        <div class="form-group row">
                            <label for="company-name" class="col-md-12 col-form-label text-md-left">Name</label>

                            <div class="col-md-12">
                                <input id="company-name" class="form-control"
                                spellcheck="false" 
                                type="text" name="name"  required autofocus/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label text-md-left">Description</label>

                            <div class="col-md-12">
                               <textarea id="company-content" name="description" spellcheck="false" class="form-control" rows="5">
                               
                               </textarea>

                            </div>
                        </div>

                        

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit" name="">
                        </div>
                    </form>


            
           </div>

        
        </div>
     </div>

          <aside class="col-md-4 blog-sidebar">
          <div class="">
            <h4 class="">Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies">View Companies</a></li>
            </ol>
          </div>
        </aside>
      </div>
      
      </div> <!-- /container -->
    @endsection