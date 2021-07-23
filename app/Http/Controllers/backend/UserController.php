<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('orders')->get()->groupBy('role');
        return view('backend.accounts')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.add-account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role'      => 'required|integer',
            'name'      => 'required|string',
            'phone'     => ['required', 'regex:/^[+](998)(90|91|93|94|97|98|99|33)([0-9]{7})$|^(998)(90|91|93|94|97|98|99|33)([0-9]{7})$|^(90|91|93|94|97|98|99|33)([0-9]{7})$/'],
            'info'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required',
        ])->validate();

        $user = new User();
        $user->role = (integer)$request->role;
        $user->name = $request->name;
        $user->phone = (integer)$request->phone;
        $user->info = $request->info;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->to(url("/backend/user/$user->id/edit"));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with('skills')->with('services')->findOrFail($id);
        return view('backend.edit-account')->with('user', $user);
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
            'role'      => 'required|integer',
            'name'      => 'required|string',
            'phone'     => ['required', 'regex:/^[+](998)(90|91|93|94|97|98|99|33)([0-9]{7})$|^(998)(90|91|93|94|97|98|99|33)([0-9]{7})$|^(90|91|93|94|97|98|99|33)([0-9]{7})$/'],
            'info'      => 'required|string',
            'email'     => 'required|email',
        ])->validate();

        $user = User::findOrFail($id);
        $user->role = (integer)$request->role;
        $user->name = $request->name;
        $user->phone = (integer)$request->phone;
        $user->info = $request->info;
        $user->email = $request->email;
        $user->update();

        return redirect()->to(url("/backend/user/$user->id/edit"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
