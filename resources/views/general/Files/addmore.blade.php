@extends('layouts.base')

@section('content')
  

<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add More Files </h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <form action="/Addfilegroup/{{$id}}" method="post" enctype="multipart/form-data" >
          @csrf

                  <div class="row">
                   

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
