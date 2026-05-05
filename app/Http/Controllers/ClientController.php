<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.conferences.index', [
            'conferences' => $this->getConferences(),
        ]);
    }

    public function show(int $id)
    {
        return view('client.conferences.show', [
            'conference' => $this->findConference($id),
        ]);
    }

    public function register(int $id): RedirectResponse
    {
        return redirect()
            ->route('client.conferences.show', $id)
            ->with('success', __('messages.registration_success'));
    }

    private function getConferences(): array
    {
        return config('sample-data.conferences');
    }

    private function findConference(int $id): array
    {
        return collect($this->getConferences())->firstWhere('id', $id) ?? abort(404);
    }
}
