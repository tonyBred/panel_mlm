<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $member;
    public function __construct(){
        $this->member = new Member;
    }

    public function index()
    {
        $dataMember = $this->member->getMemberWithLevel();
        return view('panel', compact('dataMember'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Member::create([
            'id_parent' => $request->id_parent,
            'inisial' => $request->inisial,
        ]);

        return redirect('panel');

    }

    public function check(Request $request)
    {
        
        $dataMember = $this->member->getMemberWithLevel();
        
        $child=array();
        foreach ($dataMember as $key) {
            if($key->id_member == $request->id_member){
                $id_parent = $key->id_parent;
                $inisial = $key->inisial;
                $lvl = $key->lvl;
            }
            if($key->id_parent == $request->id_member){
                array_push($child, $key->inisial);
            }
        }

        $data=[
            'id_member' => $request->id_member,
            'id_parent' => $id_parent,
            'inisial' => $inisial,
            'lvl' => $lvl,
            'child' => $child
        ];


        return view('check', compact('data'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
