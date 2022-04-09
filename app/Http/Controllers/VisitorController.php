<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Database\QueryException;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->param['pageTitle'] = 'List Visitor';
        $this->param['btnText'] = 'Tambah';
        $this->param['btnLink'] = route('visitor.create');

        try {
            $keyword = $request->get('keyword');
            $getData = Visitor::orderBy('id');

            if ($keyword) {
                $getData->where('name', 'LIKE', "%{$keyword}%");
            }

            $this->param['data'] = $getData->paginate(10);
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->withError('Terjadi Kesalahan : ' . $e->getMessage());
        } catch (Exception $e) {
            return back()->withError('Terjadi Kesalahan pada database: ' . $e->getMessage());
        }

        return \view('visitor.index', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // ddd($request->all());
            $visitor = new Visitor;
            $visitor->name = $request->input('name');
            $visitor->email = $request->input('email');
            $visitor->phone = $request->input('phone');
            $visitor->addres = $request->input('addres');
            $visitor->saying = $request->input('saying');
            $visitor->present = $request->input('present');
            $visitor->save();
        } catch (Exception $e) {
            return back()->withError('Terjadi kesalahan.');
        } catch (QueryException $e) {
            return back()->withError('Terjadi kesalahan pada database.');
        }

        return redirect()->route('landing-page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
