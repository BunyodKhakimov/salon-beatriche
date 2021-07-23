<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, int $user_id)
    {
        $validator = Validator::make($request->all(), [
            'title'      => 'required|string',
            'value'      => 'required|integer|min:0|max:100',
        ])->validate();

        $user = User::findOrFail($user_id);
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->value = (integer)$request->value;

        $user->skills()->save($skill);
        return redirect()->to(url("/user/$user->id/edit"));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'      => 'required|string',
            'value'      => 'required|integer|min:0|max:100',
        ])->validate();

        $skill = Skill::findOrFail($id);
        $skill = new Skill();
        $skill->title = $request->title;
        $skill->value = (integer)$request->value;
        $skill->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect()->back();
    }
}
