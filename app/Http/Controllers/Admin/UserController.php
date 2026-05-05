<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => config('sample-data.users'),
        ]);
    }

    public function edit(int $id)
    {
        return view('admin.users.edit', [
            'user' => $this->findUser($id),
        ]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', __('messages.user_updated'));
    }

    private function findUser(int $id): array
    {
        return collect(config('sample-data.users'))->firstWhere('id', $id) ?? abort(404);
    }
}
