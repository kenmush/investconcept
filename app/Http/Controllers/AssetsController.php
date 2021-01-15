<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $assets = (new Investor())->getAssetCategories();

        return view('myassets', [
                'assets' => collect($assets)->toArray()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $asset = (new Investor())->createAsset([
                    "categoryName"      => $request->categoryName,
                    "use_case"          => $request->use_case,
                    "duration"          => $request->duration,
                    "ticket"            => $request->ticket,
                    "return_percentage" => $request->return_percentage,
                    "impact"            => $request->impact,
            ]);
            return redirect()->route('myassets.index');
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            $errors = collect(json_decode($responseBodyAsString));
            $validator = \Validator::make($request->all(), [
            ]);
            foreach ($errors as $key => $error) {
                $validator->errors()->add($key, $error[0] ?? '');
            }
            return back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     */
    public function edit($id)
    {
        return view('management.assets.edit', [
                'asset' => (new Investor())->getAssetbyId($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $updated=  (new Investor())->updateAsset($id, [
                "categoryName"      => $request->categoryName,
                "use_case"          => $request->use_case,
                "duration"          => $request->duration,
                "ticket"            => $request->ticket,
                "return_percentage" => $request->return_percentage,
                "impact"            => $request->impact,
        ]);

        return redirect()->route('myassets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
