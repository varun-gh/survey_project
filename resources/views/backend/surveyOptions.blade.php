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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <p>{{$questions->question}}</p>
                        </div>

                    
                        <!-- /.card-header -->
                        <div class="card-body">
                         
                                           <input type="hidden" name="survey_id" id="survey_id" value="{{$questions->survey_id}}">
                                           <input type="hidden" name="question_id" id="question_id"  value="{{$questions->id}}">
                                           
                            <div class="table-responsive css-serial-counter">

                                <table class="table table-bordered" id="dynamic_field">  
                                <tr><th style="text-align:center;">Option</th><th style="text-align:center;">Status</th><th style="text-align:center;">Position</th><th><button type="button" name="add_options" id="add_options" class="btn btn-success">Add</button></th></tr>
                                                                      
                                        @if(!empty($questions->getOptions))
                                            @foreach($questions->getOptions as $options)
                                            <tr  class="dynamic-added">
                                                <form action="{{url('edit-Options')}}" method="post">
                                                @csrf
                                                <td><input type="text" name="option" value="{{$options->option}}" class="form-control"></td>
                                                <td><select name="status" class="form-control"><option value="1" @if($options->status==1)selected @endif> Active</option><option value="0" @if($options->status==0)selected @endif>In Active</option></select></td>
                                                <td><input type="text" name="position" value="{{$options->position}}" class="form-control"></td>
                                                <td>
                                                <input type="hidden" name="id" value="{{$options->id}}">
                                                <button type="submit" class="btn btn-success">Update</button>
                                                </form>
                                                <a href="{{url('/options/delete/'.$options->id)}}"><button type="button" name="remove_options" id="{{$options->id}}" class="btn btn-danger" title="delete"><i class="fa fa-trash"></i></button></a></td>
                                            </tr>
                                           
                                            @endforeach
                                        @endif
                                       
                                            
                                </table> 
                                 <div><button type="submit" class="btn btn-success" id="submit_options">Submit</button></div> 
                                    
                            </div>
                            
                        </div>
        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection