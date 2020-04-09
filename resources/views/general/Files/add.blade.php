@extends('layouts.base')

@section('content')
  

<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Group Insert Form</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form action="/multifiles" method="post" enctype="multipart/form-data" >
          @csrf
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title " required> 
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Projet</label>
                        <input type="text" name="projet" class="form-control" placeholder="Projet ">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description </label>
                        <textarea class="form-control" name="description" rows="4" placeholder="Description ..." required ></textarea>
                      </div>
                    </div>
                   

                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Files </label>
                        <input type="File" name="file[]" class="form-control" placeholder="Enter ..." multiple required >
                      </div>

                     
                    </div>


                  </div>

                  <div class="card-footer">
                  <button type="submit" class="btn btn-default ">Cancel</button>
                  <button type="submit" class="btn btn-primary float-right">Valid</button>

                </div>


                </form>

          </div>
          <!-- /.card-body -->

          
         
        </div>
        <!-- /.card -->

    


      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

       
@endsection
