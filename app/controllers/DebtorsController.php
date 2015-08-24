<?php

class DebtorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /debtors
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return View::make('debtors.index')
            ->with('debtors',DB::table('debtors')->get());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /debtors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('debtors.create')
            ->with('countries',Country::lists('name','id'))
            ->with('legals',Legal::lists('name','id'))
            ->with('debtor_group',DebtorsGroup::lists('name','id'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /debtors
	 *
	 * @return Response
	 */
	public function store()
	{
        $contact          = new Contact();
        $contact->name    = Input::get('contact_person');
        $contact->email   = Input::get('email');
        $contact->phone   = Input::get('phone');
        $contact->mobile  = Input::get('mobile');
        $contact->web     = Input::get('web');
        $contact->fax     = Input::get('fax');
        $contact->save();
        $contact_id       =  $contact->id;

        $company          = new Company();
        $company->name = Input::get('company_name');
        $company->contact_id = $contact_id;
        $company->address = Input::get('address');
        $company->postal_code = Input::get('postal_code');
        $company->city = Input::get('city');
        $company->country = Input::get('country');
        $company->vat = Input::get('vat');
        $company->coc = Input::get('coc');
        $company->save();
        $company_id =  $company->id;

        //Billing
        $contact_billing          = new Contact();
        $contact_billing->name    = Input::get('billing_contact_person');
        $contact_billing->save();
        $contact_billing_id       =  $contact_billing->id;

        $company_billing          = new Company();
        $company_billing->name = Input::get('billing_company_name');
        $company_billing->contact_id = $contact_billing_id;
        $company_billing->address = Input::get('billing_address');
        $company_billing->postal_code = Input::get('billing_postal_code');
        $company_billing->city = Input::get('billing_city');
        $company_billing->country = Input::get('billing_country');
        $company_billing->save();
        $company_billing_id = $contact_billing->id;

        $bank = new Bank();
        $bank->name = Input::get('bank');
        $bank->bic = Input::get('bic');
        $bank->save();
        $bank_id = $bank->id;

        $account = new Account();
        $account->iban = Input::get('iban');
        $account->name = Input::get('account_name');
        $account->bank_id = $bank_id;
        $account->save();
        $account_id = $account->id;

        //Debtor Save
        $debtor = new Debtor();
        $debtor->no = Input::get('debtor_number');
        $debtor->legal = Input::get('legal');
        $debtor->address_id = $company_id;
        $debtor->billing_address_id = $company_billing_id;
        $debtor->account_id = $account_id;
        $debtor->group_id = Input::get('group');
        $debtor->save();


        return $this->index();


	}

	/**
	 * Display the specified resource.
	 * GET /debtors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($company_name)
	{
        $company = DB::table('companies')->where('companies.name','=',$company_name)->first();


		return View::make('debtors.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /debtors/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /debtors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /debtors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}