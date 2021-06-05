@extends('layouts.backend')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Questions List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Questions List</li>
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
                    <h3 class="card-title">Questions List</h3>
                    <span style="float:right"> <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">+ Add</button> </span>
                </div>

                
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Survey</th>
                        <th>Questions</th>
                        <th>Category</th>
                        <th>Is Image</th>
                        <th>Description</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($questions))
                    @foreach($questions as $q_list)
                    <tr>
                        <td>{{$q_list->getSurvey['title']}}</td>
                        <td>{{$q_list->question}}</td>
                        <td>{{$q_list->getCategory['name']}}</td>
                        <td>@if($q_list->is_image==1) Yes @else No @endif</td>
                        <td>{{$q_list->description}}</td>
                        <td>{{$q_list->position}}</td>
                        <td>@if($q_list->status==1) Active @else In-Active @endif</td>
                        <td> @if($q_list->q_type==1) Single Selection @else Multiple Selection @endif</td>
                        <td>
                            <a href="{{url('/options/'.$q_list->id)}}" ><button class="btn btn-success mb-1" title="Add Options"><i class="fas fa-plus"></i></button></a>
                            <a href="{{url('/question/delete/'.$q_list->id)}}" onclick="return confirm('Are you sure? to delete this questions')" ><button class="btn btn-danger mb-1" title="Delete"><i class="fas fa-trash"></i></button></a>
                            <a href="{{url('/question/status/'.$q_list->id.'/'.$q_list->status)}}" onclick="return confirm('Are you sure? to update status')" ><button class="btn btn-@if($q_list->status==1)info @else warning @endif mb-1" title="@if($q_list->status==1)De-activate @else Activate @endif"><i class="fas fa-check"></i></button></a>
                            <button class="btn btn-success" title="Edit" data-toggle="modal" data-target="#modal-lg_{{$q_list->id}}"><i class="fas fa-edit"></i></button>
                        </td>

                    </tr>
                     

                    <!-- /.Edit modal-content -->
                    <div class="modal fade" id="modal-lg_{{$q_list->id}}">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Edit Question</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" enctype="multipart/form-data" action="{{ url('edit-question')}}" id="edit-survey-{{$q_list->id}}">
                                 @csrf
                                 
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" value="{{$q_list->id}}">
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title"></h3>
                                            </div>
                                            <div class="row">
                            
                                                <div class="w-100">
                                                    <label>Category:</label>
                                                    <select name="category_id" class="form-control" required>
                                                    <option value="0">Select Any Category</option>
                                                    @if(!empty($categories))
                                                        @foreach($categories as $cat)
                                                        <option value="{{$cat->id}}" @if($q_list->category_id==$cat->id) selected @endif>{{$cat->name}}</option>
                                                        @endforeach

                                                    @endif
                                                    </select>
                                                
                                                    
                                                </div>
                                                            
                                            </div>               
                                            <div class="row">
                                            
                                                <div class="w-100">
                                                    <label>Question:</label>
                                                    <input type="text" name="question" value="{{$q_list->question}}" class="form-control" placeholder="Title" autocomplete="off" required >
                                                </div>
                                                            
                                            </div>
                                            <div class="row">
                                            
                                                <div class="w-100">
                                                    <label>Description:</label>
                                                    <textarea name="description" class="form-control">{{$q_list->description}}</textarea>
                                                    
                                                </div>
                                                            
                                            </div>
                                            <div class="row">
                                            
                                                <div class="w-100">
                                                    <label>Position</label>
                                                    <input type="text" name="position" value="{{$q_list->position}}" class="form-control">
                                                    
                                                </div>
                                                        

                                            </div>
                                            <div class="row">
                            
                                                <div class="w-100">
                                                    <label>Question Type:</label>
                                                    <select name="q_type" class="form-control" required>
                                                        
                                                        <option value="1" @if($q_list->q_type==1) selected @endif>Single Selection</option>
                                                        <option value="2" @if($q_list->q_type==2) selected @endif>Multiple Selection</option>
                                                    
                                                    </select>
                                                                                            
                                                </div>
                                            
                                            </div>

                                            <div class="row">
                            
                                                <div class="w-100">
                                                    <label>Is File Choosen:</label>
                                                    <label class="radio-inline">
                                                    <input type="radio" name="is_image" value="1" @if($q_list->is_image==1) checked @endif>Yes
                                                    </label>
                                                    <label class="radio-inline">
                                                    <input type="radio" name="is_image" value="0" @if($q_list->is_image==0) checked @endif>No
                                                    </label>
                                                                        
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



                    @endforeach
                    @endif
                                       
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Survey</th>
                        <th>Questions</th>
                        <th>Category</th>
                        <th>Is Image</th>
                        <th>Description</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Type</th>
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
            <h4 class="modal-title">Add Questions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
            </div>
            
                <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="{{ url('add-questions')}}" id="add-questions">
                @csrf
                    <div class="col-md-12">
                    
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title"></h3>
                            </div>
                                             
                            <div class="row">
                                <input type="hidden" name="survey_id" value="{{$survey_list->id}}">
                                                                           
                            </div>
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Category:</label>
                                    <select name="category_id" class="form-control" required>
                                    <option value="0">Select Any Category</option>
                                    @if(!empty($categories))
                                        @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach

                                    @endif
                                    </select>
                                   
                                    
                                </div>
                                            
                            </div>
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Question:</label>
                                    <textarea name="question" class="form-control" required></textarea>
                                    
                                </div>
                                            
                            </div>
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Description:</label>
                                    <textarea name="description" class="form-control"></textarea>
                                
                                </div>
                                        
                            </div>

                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Position:</label>
                                    <input type="text" name="position" class="form-control" placeholder="Position" autocomplete="off" required >
                                        
                                </div>
                                </div>
                                            
                            </div>
                            <div class="row">
                            
                                <div class="w-100">
                                    <label>Question Type:</label>
                                    <select name="q_type" class="form-control" required>
                                        
                                        <option value="1" selected>Single Selection</option>
                                        <option value="2">Multiple Selection</option>
                                    
                                    </select>
                                                                            
                                </div>
                                            
                            </div>
                            <div class="row">
                            
                            <div class="w-100">
                                    <label>Is File Choosen:</label>
                                    <label class="radio-inline">
                                    <input type="radio" name="is_image" value="1" checked>Yes
                                    </label>
                                    <label class="radio-inline">
                                    <input type="radio" name="is_image" value="0">No
                                    </label>
                                                                      
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