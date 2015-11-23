@extends('layouts.main')


@section('content')
<section class="panel panel-default">
                    <header class="panel-heading bg-light">
                      <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#debtor_information">Debtor Information</a></li>
                        <li class=""><a data-toggle="tab" href="#billing_information">Billing Information</a></li>
                        <li class=""><a data-toggle="tab" href="#contact_information">Contact Information</a></li>
                        <li class=""><a data-toggle="tab" href="#login_information">Login Information</a></li>
                        <li class=""><a data-toggle="tab" href="#payment_information">Payment Information</a></li>
                        <li class=""><a data-toggle="tab" href="#additional_infornation">Additional Infornation</a></li>
                      </ul>
                    </header>
                    <div class="panel-body">
                      <div class="tab-content">
                        <div id="debtor_information" class="tab-pane active">


                                                <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('debtor_number', 'Debtor number', array('class' => 'col-sm-2 control-label'));  }}
                                                     <div class="col-sm-10">
                                                         {{ Request::segment(2) }}
                                                     </div>
                                                     </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('company_name', 'Company name', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $company->name }}
                                                   </div>
                                                   </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('coc', 'Camber of Commerce number', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $company->coc }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('vat', 'VAT number', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                           {{ $company->vat }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('vat', 'Legal', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                           {{ $legal }}
                                                   </div>
                                               </div>
                                               </div>


                                              <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('contact_person', 'Contact Person', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                        {{ $contact->name }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('address', 'Address', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $company->address }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('postal_code', 'Postal code', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $company->postal_code }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('city', 'City', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $company->city }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('city', 'Country', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $country }}
                                                    </div>
                                              </div>
                                              </div>



                        </div>
                        <div id="billing_information" class="tab-pane">
  <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('contact_Person', 'Contact Person', array('class' => 'col-sm-2 control-label'));  }}
                                                     <div class="col-sm-10">
                                                         {{ $billing_contact->name }}
                                                     </div>
                                                     </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('email', 'E-mail', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $billing_contact->email }}
                                                   </div>
                                                   </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('phone', 'Phone', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $billing_contact->phone }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('mobile', 'Mobile', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                           {{ $billing_contact->mobile }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('web', 'Web', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                            {{ $billing_contact->web }}
                                                   </div>
                                               </div>
                                               </div>


                                              <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('fax', 'Fax', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                        {{ $billing_contact->fax }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('address', 'Company Name', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $billing_company->name }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('address', 'Address', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $billing_company->address }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('postal_code', 'Postal code', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $billing_company->postal_code }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('city', 'City', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $billing_company->city }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('city', 'Country', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $billing_country }}
                                                    </div>
                                              </div>
                                              </div>



                        </div>
                        <div id="contact_information" class="tab-pane">
                        <div class="form-group">
                                            <div class="row">
                                                     {{ Form::label('contact_Person', 'Contact Person', array('class' => 'col-sm-2 control-label'));  }}
                                                     <div class="col-sm-10">
                                                         {{ $contact->name }}
                                                     </div>
                                                     </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('email', 'E-mail', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $contact->email }}
                                                   </div>
                                                   </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('phone', 'Phone', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $contact->phone }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('mobile', 'Mobile', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                           {{ $contact->mobile }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('web', 'Web', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                            {{ $contact->web }}
                                                   </div>
                                               </div>
                                               </div>


                                              <div class="form-group">
                                                    <div class="row">
                                                     {{ Form::label('fax', 'Fax', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                        {{ $contact->fax }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('address', 'Company Name', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $billing_company->name }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('address', 'Address', array('class' => 'col-sm-2 control-label'));  }}
                                                   <div class="col-sm-10">
                                                        {{ $company->address }}
                                                   </div>
                                               </div>
                                               </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('postal_code', 'Postal code', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $company->postal_code }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('city', 'City', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $company->city }}
                                                    </div>
                                              </div>
                                              </div>

                                              <div class="form-group">
                                                    <div class="row">
                                                    {{ Form::label('city', 'Country', array('class' => 'col-sm-2 control-label'));  }}
                                                    <div class="col-sm-10">
                                                         {{ $country }}
                                                    </div>
                                              </div>
                                              </div>



                        </div>
                        <div id="login_information" class="tab-pane">
                          <div class="form-group">
                                                                            <div class="row">
                                                                             {{ Form::label('username', 'Username', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ Sentry::getUser()->email }}
                                                                             </div>
                                                                             </div>                                                                            <div class="row">
                                                                             {{ Form::label('first_name', 'First Name', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ Sentry::getUser()->first_name }}
                                                                             </div>
                                                                             </div>                                                                            <div class="row">
                                                                             {{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ Sentry::getUser()->last_name }}
                                                                             </div>
                                                                             </div>
                                                                             </div>

                        </div>
                        <div id="payment_information" class="tab-pane">
                          <div class="form-group">
                                                                            <div class="row">
                                                                             {{ Form::label('iban', 'Account number (IBAN)', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ $account->iban }}
                                                                             </div>
                                                                             </div>                                                                            <div class="row">
                                                                             {{ Form::label('account_name', 'Account name', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ $account->name }}
                                                                             </div>
                                                                             </div>
                                                                             <div class="row">
                                                                             {{ Form::label('bank', 'Bank', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ $bank->name }}
                                                                             </div>
                                                                             </div>
                                                                             <div class="row">
                                                                             {{ Form::label('bank_location', 'Bank location', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ $bank->location }}
                                                                             </div>
                                                                             </div>
                                                                             <div class="row">
                                                                             {{ Form::label('bic', 'BIC', array('class' => 'col-sm-2 control-label'));  }}
                                                                             <div class="col-sm-10">
                                                                                 {{ $bank->bic }}
                                                                             </div>
                                                                             </div>
                                                                             </div>

                        </div>
                        <div id="additional_infornation" class="tab-pane">Additional Infornation</div>
                      </div>
                    </div>
                  </section>

@stop


@section('post_css')

@stop

@section('post_js')


@stop

@section('main_menu')

 @stop

 @section('breadcrumb')
   <li class="active"><a href="{{ URL::to('/debtors') }}">Debtors</a></li>
   <li class="active"><a href="{{ URL::to('/debtors') }}/{{ Request::segment(2) }}">{{ Request::segment(2) }}</a></li>

 @stop