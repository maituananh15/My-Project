<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class UserController extends Controller
{
    public function index(): Factory|View|Application|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::all();
        return view('admin.user.index', ['user' => $user]);
    }

    public function create(): Factory|View|Application|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect()->route('admin.user.index')->with('success', 'Thêm mới người dùng thành công');
    }

    public function show($id): Factory|View|Application|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::where('id', $id)->first();
        return view('admin.user.detail', ['user' => $user]);
    }

    public function edit(User $user): Factory|View|Application|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user->update($input);
        return redirect()->route('admin.user.index');
    }
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
