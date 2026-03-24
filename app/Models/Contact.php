<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public const STATUS_RECEIVED = '접수';

    public const STATUS_IN_PROGRESS = '처리중';

    public const STATUS_DONE = '완료';

    public const STATUSES = [
        self::STATUS_RECEIVED,
        self::STATUS_IN_PROGRESS,
        self::STATUS_DONE,
    ];

    public const SERVICE_OPTIONS = [
        '홈페이지 제작',
        '홈페이지 유지보수',
        '온라인 쇼핑몰 제작',
        '시스템 개발',
        '앱 개발',
        '맞춤형 AI 솔루션',
    ];

    protected $fillable = [
        'company',
        'contact_person',
        'email',
        'services',
        'current_site',
        'message',
        'budget',
        'attachments',
        'status',
        'admin_memo',
    ];

    protected function casts(): array
    {
        return [
            'services' => 'array',
            'attachments' => 'array',
        ];
    }
}
