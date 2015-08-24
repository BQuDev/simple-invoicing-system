@extends('layouts.main')


@section('content')



<div class="row">
   <div class="col-sm-12">
        {{ Form::open(array('url' =>URL::to("/").'/debtors',  'class'=>'form-horizontal','method' => 'post','data-validate'=>'parsley','id'=>'debtor_create')) }}

            <section class="panel panel-default">
               <header class="panel-heading font-bold" id="AGENT_INFORMATION">GENERAL INFORMATION</header>
               <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Debtor Information</div>
               <div class="line line-dashed b-b line-lg pull-in"></div>

               <div class="panel-body">

                  <div class="form-group">
                     {{ Form::label('debtor_number', 'Debtor number', array('class' => 'col-sm-3 control-label'));  }}
                     <div class="col-sm-9">
                         {{ Form::text('debtor_number', '',['placeholder'=>'Debtor number','class'=>'form-control','data-required'=>'true','minlength'=>"2"]); }}
                     </div>
                  </div>

                  <div class="form-group">
                        {{ Form::label('company_name', 'Company name', array('class' => 'col-sm-3 control-label'));  }}
                       <div class="col-sm-9">
                            {{ Form::text('company_name', '',['placeholder'=>'Company name','class'=>'form-control','data-required'=>'true']); }}
                       </div>
                   </div>

                  <div class="form-group">
                         {{ Form::label('coc', 'Camber of Commerce number', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::text('coc', '',['placeholder'=>'Camber of Commerce number','class'=>'form-control','data-required'=>'true']); }}
                        </div>
                  </div>

                  <div class="form-group">
                        {{ Form::label('vat', 'VAT number', array('class' => 'col-sm-3 control-label'));  }}
                       <div class="col-sm-9">
                            {{ Form::text('vat', '',['placeholder'=>'VAT number','class'=>'form-control','data-required'=>'true']); }}
                       </div>
                   </div>

                  <div class="form-group">
                        {{ Form::label('legal', 'Legal ', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                             {{ Form::select('legal',  $legals,'',['class'=>'chosen-select col-sm-12']);  }}
                        </div>
                  </div>


                  <div class="form-group">
                         {{ Form::label('contact_person', 'Contact Person', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::text('contact_person', '',['placeholder'=>'Contact Person','class'=>'form-control','data-required'=>'true']); }}
                        </div>
                  </div>

                  <div class="form-group">
                        {{ Form::label('address', 'Address', array('class' => 'col-sm-3 control-label'));  }}
                       <div class="col-sm-9">
                            {{ Form::text('address', '',['placeholder'=>'Address','class'=>'form-control','data-required'=>'true']); }}
                       </div>
                   </div>

                  <div class="form-group">
                        {{ Form::label('postal_code', 'Postal code', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::text('postal_code', '',['placeholder'=>'Postal code','class'=>'form-control','data-required'=>'true']); }}
                        </div>
                  </div>

                  <div class="form-group">
                        {{ Form::label('city', 'City', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::text('city', '',['placeholder'=>'City','class'=>'form-control','data-required'=>'true']); }}
                        </div>
                  </div>

                  <div class="form-group">
                        {{ Form::label('country ', 'Country ', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::select('country',  $countries,'',['class'=>'chosen-select col-sm-12']);  }}
                        </div>
                  </div>



                  <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Billing Information</div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>

                    <div class="form-group">
                       {{ Form::label('billing_company_name', 'Company name', array('class' => 'col-sm-3 control-label'));  }}
                       <div class="col-sm-9">
                           {{ Form::text('billing_company_name', '',['placeholder'=>'Company name','class'=>'form-control','data-required'=>'true','minlength'=>"2"]); }}
                       </div>
                    </div>

                    <div class="form-group">
                           {{ Form::label('billing_contact_person', 'Contact Person', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('billing_contact_person', '',['placeholder'=>'Contact Person','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('billing_address', 'Address', array('class' => 'col-sm-3 control-label'));  }}
                         <div class="col-sm-9">
                              {{ Form::text('billing_address', '',['placeholder'=>'Address','class'=>'form-control','data-required'=>'true']); }}
                         </div>
                     </div>

                    <div class="form-group">
                          {{ Form::label('billing_postal_code', 'Postal code', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('billing_postal_code', '',['placeholder'=>'Postal code','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('billing_city', 'City', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('billing_city', '',['placeholder'=>'City','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('billing_country ', 'Country ', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::select('billing_country',  $countries,'',['class'=>'chosen-select col-sm-12']);  }}
                          </div>
                    </div>


                    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Contact Information</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>

                    <div class="form-group">
                          {{ Form::label('email', 'E-Mail', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('email', '',['placeholder'=>'E-Mail','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('phone', 'Phone Number', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('phone', '',['placeholder'=>'Phone Number','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('mobile', 'Mobile Number', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('mobile', '',['placeholder'=>'Mobile Number','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('web', 'Web Site', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('web', '',['placeholder'=>'Web Site','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('fax', 'Fax', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('fax', '',['placeholder'=>'Fax','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Login Information</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>


                    <div class="form-group">
                          {{ Form::label('username', 'Username', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('username', '',['placeholder'=>'Username','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

                    <div class="form-group">
                          {{ Form::label('password', 'Password', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                              {{ Form::text('password', '',['placeholder'=>'Password','class'=>'form-control','data-required'=>'true']); }}
                          </div>
                    </div>

               </div>
            </section>


            <section class="panel panel-default">
               <header class="panel-heading font-bold" id="AGENT_INFORMATION">PAYMENT INFORMATION</header>
               <div class="panel-body">

                  <div class="form-group">
                         {{ Form::label('iban', 'Account Number (IBAN)', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::text('iban', '',['placeholder'=>'Account Number (IBAN)','class'=>'form-control','data-required'=>'true']); }}
                        </div>
                  </div>

                  <div class="form-group">
                     {{ Form::label('account_name', 'Account Name', array('class' => 'col-sm-3 control-label'));  }}
                     <div class="col-sm-9">
                         {{ Form::text('account_name', '',['placeholder'=>'Account Name','class'=>'form-control','data-required'=>'true','minlength'=>"2"]); }}
                     </div>
                  </div>


                  <div class="form-group">
                        {{ Form::label('bank', 'Bank', array('class' => 'col-sm-3 control-label'));  }}
                       <div class="col-sm-9">
                            {{ Form::text('bank', '',['placeholder'=>'Bank','class'=>'form-control','data-required'=>'true']); }}
                       </div>
                   </div>

                  <div class="form-group">
                        {{ Form::label('bic', 'BIC', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::text('bic', '',['placeholder'=>'BIC','class'=>'form-control','data-required'=>'true']); }}
                        </div>
                  </div>
               </div>
            </section>


            <section class="panel panel-default">
               <header class="panel-heading font-bold" id="AGENT_INFORMATION">DEBTOR GROUPS</header>
               <div class="panel-body">

                  <div class="form-group">
                         {{ Form::label('group', 'Group Name', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                            {{ Form::select('group',  $debtor_group,'',['class'=>'chosen-select col-sm-12']);  }}
                        </div>
                  </div>

               </div>
            </section>


            <section class="panel panel-default">
               <header class="panel-heading font-bold" id="AGENT_INFORMATION">SETTINGS</header>
               <div class="panel-body">



               </div>
            </section>

        <div class="form-group">
          <label class="col-sm-3 control-label"> </label>
          <div class="col-sm-9">
          {{ Form::submit('Save', array('class' => 'btn btn-s-md btn-primary')) }}
          </div>
        </div>



        {{ Form::close() }}

   </div>
</div>




@stop


@section('post_css')
{{ HTML::style('js/chosen/chosen.css'); }}
@stop

@section('post_js')

  <script>


  </script>


   {{ HTML::script('js/chosen/chosen.jquery.min.js'); }}
    <!-- parsley -->
  {{ HTML::script('js/parsley/parsley.min.js'); }}
  {{ HTML::script('js/parsley/parsley.extend.js'); }}



@stop

@section('main_menu')

 @stop

 @section('breadcrumb')
   <li class="active"><a href="{{ URL::to('/debtors') }}">Debtors</a></li>
   <li class="active"><a href="{{ URL::to('/debtors/create') }}">Add New Debtor</a></li>

 @stop