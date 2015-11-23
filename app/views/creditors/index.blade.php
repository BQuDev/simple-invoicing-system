@extends('layouts.main')


@section('content')


 {{ Form::open(array('url' =>URL::to("/").'/creditors', 'files'=>true,  'class'=>'form-horizontal','method' => 'post','data-validate'=>'parsley','id'=>'debtor_create')) }}

     <div class="form-group">

                         <div class="col-sm-9">
                             {{ Form::file('camt'); }}
                         </div>
                   </div>
       <div class="form-group">
          <label class="col-sm-3 control-label"> </label>
          <div class="col-sm-9">
          {{ Form::submit('Save', array('class' => 'btn btn-s-md btn-primary')) }}
          </div>
        </div>



        {{ Form::close() }}

@stop


@section('post_css')

@stop

@section('post_js')


@stop

@section('main_menu')

 @stop

 @section('breadcrumb')

 @stop