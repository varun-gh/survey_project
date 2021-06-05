@extends('layouts.backend')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Options List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Options List</li>
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
                    <h3 class="card-title">Options List</h3>
                    <span style="float:right"> <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">+ Add</button> </span>
                </div>

                
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Survey</th>
                        <th>Question</th>
                        <th>Option</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                        Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td> 4</td>
                       

                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet
                        Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                        <td> 4</td>
                       
                    </tr>
                    
                    </tbody>
                    <tfoot>
                    <tr>
                    <tr>
                        <th>Survey</th>
                        <th>Question</th>
                        <th>Option</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
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
            <h4 class="modal-title">Add Options</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
            </div>
              <!-- form start -->
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif    
            <div class="alert" id="school_error" style="display: none"></div>
            
                <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ url('add-options')}}" id="add-options">
                @csrf
                    <div class="col-md-12">
                    
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                                             
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Survey:</label>
                                    <select name="survey_id" class="form-control" required>
                                        <option value="">Please Select</option>
                                        @if(!empty($survey_list))  
                                            @foreach($survey_list as $s_list)
                                            <option value="{{$s_list->id}}">{{$s_list->title}}</option>

                                            @endforeach

                                        @endif                                  
                                    </select>
                                   
                                </div>
                                            
                            </div>
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Questions:</label>
                                    <select name="quest_id" class="form-control" required>
                                        <option value="">Please Select</option>
                                                                            
                                    </select>
                                
                                </div>
                                        
                            </div>
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Option:</label>
                                    <textarea name="option" class="form-control" required></textarea>
                                    
                                </div>
                                            
                            </div>
                            

                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Position:</label>
                                    <input type="text" name="position" class="form-control" placeholder="Title" autocomplete="off" required >
                                        
                                </div>
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