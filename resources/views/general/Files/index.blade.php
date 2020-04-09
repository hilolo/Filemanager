@extends('layouts.base')

@section('content')
<div class="w-25 m-4 nav nav-pills ml-auto p-2">
<button type="button" onclick="location.href='/AddFiles'"  class="btn btn-block btn-outline-primary btn-m">Add New</button>
</div>


@foreach ($Grp as $q)
<div class="card card-sucress cardutline direct-chat direct-chat-success collapsed-card">
  
              <div class="card-header">
                <h3 class="card-title">{{$q->title}} |  {{$q->projet}}</h3>
                
                <div class="card-tools">
                <h3 class="card-title mr-3">{{$q->user->name}} </h3> 
                  <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">{{$q->files->count() }}</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
                  <a href="/Addfiles/{{$q->id}}"   class="btn btn-info btn-sm" >
                   Add more </a>
                  <a href="/deletegroup/{{$q->id}}" onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-sm" >
                    <i class="fas fa-trash"></i></a>
                
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: none;">
              <p class="m-2">{{$q->description}}</p>
                <div class="table-responsive">
                  <table class="table m-0">
                  
                    <tbody>

                    @foreach ($q->files as $f)
                    <tr>
                      <td><a href="{{ Storage::url($f->path)}}" download>{{$f->name}}</a></td>
                    
                      <td><span class="badge badge-success">{{$f->size / 1000000}} MB </span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                        <div class="card-tools">
                
                  <a href="{{ Storage::url($f->path)}}"  class="btn btn-primary btn-sm" download>
                    <i class="fas fa-upload"></i></a>

                    <a href="/deletefile/{{$f->id}}" onclick="return confirm('Are you sure?')"  class="btn btn-danger btn-sm" >
                    <i class="fas fa-trash"></i></a>
                  </button>
                </div>

                        </div>
                      </td>
                    </tr>
                    @endforeach
                
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              
              </div>
           

</div>

@endforeach






       
@endsection
