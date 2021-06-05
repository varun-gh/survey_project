@extends('layouts.backend')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Category List</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category List</h3>
                    <span style="float:right"> <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">+ Add</button> </span>
                </div>
                   <!-- form start -->
                  
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        <?php echo  $msg=session('success');    ?>
             
                    </div>
                @endif

                @if (session('failure'))
                    <div class="alert alert-danger">
                        <?php  echo  $msg=session('failure');   ?>
               
                    </div>
                @endif

                  
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($categories))
                    @php $i=1; @endphp
                    @foreach($categories as $list)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$list->name}}</td>
                        <td>
                        <a href="{{url('/category/delete/'.$list->id)}}" onclick="return confirm('Are you sure? to delete this survey')" ><button class="btn btn-danger mb-1" title="Delete"><i class="fas fa-trash"></i></button></a>
                       
                        <button class="btn btn-success" title="Edit" data-toggle="modal" data-target="#modal-lg_{{$list->id}}"><i class="fas fa-edit"></i></button>
                        </td>

                    </tr>
                    <!-- /.Edit modal-content -->
                    <div class="modal fade" id="modal-lg_{{$list->id}}">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Edit Category</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data" action="{{ url('category/edit')}}" id="edit-survey-{{$list->id}}">
                                 @csrf
                                 <input type="hidden" name="id" value="{{$list->id}}">
                                    <div class="col-md-12">
                                    
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"></h3>
                                            </div>
                                                            
                                            <div class="row">
                                            
                                                <div class="w-100">
                                                    <label>Title:</label>
                                                    <input type="text" name="name" value="{{$list->name}}" class="form-control" placeholder="name" autocomplete="off" required >
                                                </div>
                                                            
                                            </div>
                                         


                                                                    
                                        </div>

                                    </div>
                        
                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                                    </div>
                            </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    @php  $i=$i+1; @endphp
                    @endforeach
                    @endif
                    
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
            </div>
                     
                <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ url('add-category')}}" id="add-survey">
                @csrf
                    <div class="col-md-12">
                    
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                                             
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Title:</label>
                                    <input type="text" name="name" class="form-control" placeholder="name" autocomplete="off" required >
                                </div>
                                            
                            </div>
                            

                                                    
                        </div>

                    </div>
                    
                 
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                
                </div>
                </div>
               
           
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



@endsection