<?php



class CreditorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /creditors
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return View::make('creditors.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /creditors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /creditors
	 *
	 * @return Response
	 */
	public function store()
	{
		//

        if (Input::hasFile('camt')) {
            //
            //$file = Input::file('camt');

            //$xml = simplexml_load_string(Input::file('camt')->getRealPath());
            //dd($xml);


            $app = new Illuminate\Container\Container;
            $document = new Orchestra\Parser\Xml\Document($app);
            $reader = new Orchestra\Parser\Xml\Reader($document);

            $xml = $reader->load(Input::file('camt')->getRealPath());
            $user = $xml->parse([
                'id' => ['uses' => 'BkToCstmrStmt.Stmt.Bal.Tp.CdOrPrtry.Cd']
            ]);
            print_r($user);

            //dd($user);

        }

	}

	/**
	 * Display the specified resource.
	 * GET /creditors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /creditors/{id}/edit
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
	 * PUT /creditors/{id}
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
	 * DELETE /creditors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}