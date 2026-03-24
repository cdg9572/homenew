<?php

namespace App\Services\Backoffice;

use App\Models\Contact;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class ContactService
{
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        $query = Contact::query()->orderByDesc('created_at');

        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('company', 'like', '%'.$keyword.'%')
                    ->orWhere('contact_person', 'like', '%'.$keyword.'%')
                    ->orWhere('email', 'like', '%'.$keyword.'%')
                    ->orWhere('message', 'like', '%'.$keyword.'%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $perPage = (int) $request->input('per_page', 10);
        $perPage = min(100, max(10, $perPage));

        return $query->paginate($perPage)->withQueryString();
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(Contact $contact, array $data): void
    {
        $contact->update([
            'company' => $data['company'],
            'contact_person' => $data['contact_person'],
            'email' => $data['email'],
            'services' => $data['service'],
            'current_site' => $data['current_site'] ?? null,
            'message' => $data['message'] ?? null,
            'budget' => $data['budget'] ?? null,
            'status' => $data['status'],
            'admin_memo' => $data['admin_memo'] ?? null,
        ]);
    }
}
