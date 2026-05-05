<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.conferences.index', [
            'conferences' => $this->getConferences(),
        ]);
    }

    public function show(int $id)
    {
        return view('employee.conferences.show', [
            'conference' => $this->findConference($id),
            'registrations' => config('sample-data.registrations'),
        ]);
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
