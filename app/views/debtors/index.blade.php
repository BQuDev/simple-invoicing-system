@extends('layouts.main')


@section('content')

<div class="m-b-md">
	<form class="navbar-form navbar-left " role="search">
        <div class="form-group">
             <div class="input-group" style="min-width:1080px;">
                     <span class="input-group-btn">
                       <span class="btn btn-sm bg-white b-white btn-icon" style="min-height:50px;font-size:24px;"><i class="fa fa-search"></i></span>
                     </span>
                     <input type="text" style="min-height:50px;font-size:24px;" id="search_text" class="form-control input-sm no-border" placeholder="Search NAME , E-MAIL , Debtor Group ...">
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
                        <th width="20%">Name</th>
                        <th width="20%">Email address</th>
                        <th width="35%">Debtor group</th>
                        <th width="15%">Outstanding amount</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($debtors as $debtor)
                    <?php
                    $company = DB::table('companies')->where('companies.id','=',$debtor->company_id)->first();
                    ?>
                      <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ DB::table('contacts')->where('contacts.id','=',$company->contact_id)->first()->email }}</td>
                        <td>{{ DB::table('debtors_groups')->where('debtors_groups.id','=',$debtor->group_id)->first()->name }}</td>
                        <td>Outstanding amount</td>
                        <td><a href="{{ URL::to('/debtors/'.$debtor->no) }}" class="btn btn-s-md btn-primary">More</a></td>
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
   <li class="active"><a href="{{ URL::to('/debtors') }}">Debtors</a></li>

 @stop