<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User as UserModel;

class User extends BaseController
{
    /**
     * Show all users
     *
     * @return \App\Models\User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return view('users.index')
            ->with('users', UserModel::all());
    }

    /**
     * Show the new user form
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create() {
        return view('users.create');
    }

    /**
     * Create a new user in the database
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function store(Request $request) {
        UserModel::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'priority'      => $request->priority,
        ]);

        //could create a new user and then do $user->fill($request->input())-save() but I like being explicit.

        return redirect()->route('users.index');
    }

    /**
     * Show the user
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(UserModel $user) {
       return view('users.show')
            ->with('user', $user);
    }

    /**
     * Update the user
     *
     * @param \App\Models\User         $user
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserModel $user, Request $request) {
        $user->update($request->input());
        return redirect()->route('users.index');
    }

    /**
     * Delete the user
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(UserModel $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
}
