<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class ContactService
{
    /**
     * @param  array<string, mixed>  $attributes
     * @param  array<int, UploadedFile>|UploadedFile  $files
     */
    public function create(array $attributes, array|UploadedFile $files): Contact
    {
        if ($files instanceof UploadedFile) {
            $files = [$files];
        }

        return DB::transaction(function () use ($attributes, $files) {
            $contact = Contact::create([
                'company' => $attributes['company'],
                'contact_person' => $attributes['contact_person'],
                'email' => $attributes['email'],
                'services' => $attributes['services'],
                'current_site' => $attributes['current_site'] ?? null,
                'message' => $attributes['message'] ?? null,
                'budget' => $attributes['budget'] ?? null,
                'status' => Contact::STATUS_RECEIVED,
            ]);

            $attachments = [];
            foreach ($files as $file) {
                if (! $file instanceof UploadedFile || ! $file->isValid()) {
                    continue;
                }
                $path = $file->store('contacts/attachments/'.$contact->id, 'public');
                $attachments[] = [
                    'path' => $path,
                    'original_name' => $file->getClientOriginalName(),
                ];
            }

            if ($attachments !== []) {
                $contact->update(['attachments' => $attachments]);
            }

            return $contact->fresh();
        });
    }
}
