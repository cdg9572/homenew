<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Services\ContactService;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function __construct(private ContactService $contactService) {}

    public function store(StoreContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $this->contactService->create(
            [
                'company' => $validated['company'],
                'contact_person' => $validated['contact_person'],
                'email' => $validated['email'],
                'services' => $validated['service'],
                'current_site' => $validated['current_site'] ?? null,
                'message' => $validated['message'] ?? null,
                'budget' => $validated['budget'] ?? null,
            ],
            $request->file('attachments', [])
        );

        return redirect()
            ->route('contact.contact')
            ->with('contact_submitted', true);
    }
}
