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
        $contact_billing->billing    = 'true';
        $contact_billing->save();
        $contact_billing_id       =  $contact_billing->id;

        $company_billing          = new Company();
        $company_billing->name = Input::get('billing_company_name');
        $company_billing->contact_id = $contact_billing_id;
        $company_billing->address = Input::get('billing_address');
        $company_billing->postal_code = Input::get('billing_postal_code');
        $company_billing->city = Input::get('billing_city');
        $company_billing->country = Input::get('billing_country');
        $contact_billing->billing    = 'true';
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
        $debtor->company_id = $company_id;
        $debtor->billing_company_id = $company_billing_id;
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
	public function groups()
    {

        return View::make('debtors.index_group')
            ->with('debtors_groups',DB::table('debtors_groups')->get());
    }


	public function groupsStore()
    {
        $debtpr_group = new DebtorsGroup();
        $debtpr_group->name = Input::get('name');
        $debtpr_group->save();

        return $this->groups();
    }

	public function groupCreate()
    {
        return View::make('debtors.create_group');
    }



    public function show($debtor_no)
	{
        //return $debtor_no;
        $debtor           = DB::table('debtors')->where('no','=',$debtor_no)->first();
        $company          = Company::find($debtor->company_id);
        $contact          = Contact::find($company->contact_id);
        $billing_company  = Company::find($debtor->billing_company_id);
        $billing_contact  = Contact::find($billing_company->contact_id);
        $account          = Account::find($debtor->account_id);
        $bank             = Bank::find($account->bank_id);
        $group            = DebtorsGroup::find($debtor->account_id);


		return View::make('debtors.show')
            ->with('company',$company)
            ->with('contact',$contact)
            ->with('billing_company',$billing_company)
            ->with('billing_contact',$billing_contact)
            ->with('account',$account)
            ->with('bank',$bank)
            ->with('legal',$debtor->legal)
            ->with('country',$company->country)
            ->with('billing_country',$billing_company->country)
            ->with('group',$group);
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

    public function groupDelete($id)
	{
		//

        $deleted_id= DB::table('debtors_groups')->where('id','=',$id)->delete();
        return View::make('debtors.index_group')
            ->with('debtors_groups',DB::table('debtors_groups')->get());


        return $id;
	}

}