@extends('layouts.main')


@section('content')

<div class="m-b-md">
	<form class="navbar-form navbar-left " role="search">
        <div class="form-group">
             <div class="input-group" style="min-width:1080px;">
                     <span class="input-group-btn">
                       <span class="btn btn-sm bg-white b-white btn-icon" style="min-height:50px;font-size:24px;"><i class="fa fa-search"></i></span>
                     </span>
                     <input type="text" style="min-height:50px;font-size:24px;" id="search_text" class="form-control input-sm no-border" placeholder="Search NAME , E-MAIL , Product Group ...">
                   </div>

        </div>
      </form>
      </div>

              <br>
              <br>


 <section class="panel panel-default">

                <div class="table-responsive">
                  <table class="table table-striped m-b-none" data-ride="datatables" id="debtor_datatable">
                    <thead>
                      <tr>

                        <th width="30%">Name</th>
                        <th width="25%">Product Type</th>
                        <th width="15%">Price excl. Tax</th>
                        <th width="10%">Times Sold</th>
                        <th width="10%">Product Group</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <?php
                    $group_name = DB::table('products_groups')->where('products_groups.id','=',$product->group_id)->first()->name;
                    ?>
                      <tr>

                        <td>{{ $product->name }}</td>
                        <td>{{$product->type }}</td>
                        <td>{{ $product->tax }}</td>
                        <td>{{ $product->times_sold }}</td>
                        <td>{{ $group_name }}</td>
                        <td><a href="{{ URL::to('/debtors/'.$product->id) }}" class="btn btn-s-md btn-primary">More</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </section>
@stop


@section('post_css')
{{ HTML::style('js/datatables/datatables.css'); }}
@stop

@section('post_js')
  {{ HTML::script('js/datatables/jquery.dataTables.min.js'); }}
  <script>

    $('#debtor_datatable').dataTable({
"sPaginationType": "full_numbers"
    });


    oTable = $('#debtor_datatable').dataTable();
  $('#search_text').keyup(function(){
         oTable.fnFilter($(this).val());
  })

  $('#debtor_datatable_filter').hide();
  </script>

@stop

@section('main_menu')

 @stop

 @section('breadcrumb')
   <li class="active"><a href="{{ URL::to('/products') }}">Products</a></li>

 @stop