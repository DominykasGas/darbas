<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class ConferenceController extends Controller
{
    public function index()
    {
        return view('admin.conferences.index', [
            'conferences' => config('sample-data.conferences'),
        ]);
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request): RedirectResponse
    {
        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_created'));
    }

    public function show(int $id)
    {
        return view('admin.conferences.show', [
            'conference' => $this->findConference($id),
        ]);
    }

    public function edit(int $id)
    {
        return view('admin.conferences.edit', [
            'conference' => $this->findConference($id),
        ]);
    }

    public function update(ConferenceRequest $request, int $id): RedirectResponse
    {
        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_updated'));
    }

    public function destroy(int $id): RedirectResponse
    {
        $conference = $this->findConference($id);

        if (Carbon::parse($conference['date'])->isPast()) {
            return redirect()
                ->route('admin.conferences.index')
                ->with('error', __('messages.past_conference_delete_error'));
        }

        return redirect()
            ->route('admin.conferences.index')
            ->with('success', __('messages.conference_deleted'));
    }

    private function findConference(int $id): array
    {
        return collect(config('sample-data.conferences'))->firstWhere('id', $id) ?? abort(404);
    }
}
