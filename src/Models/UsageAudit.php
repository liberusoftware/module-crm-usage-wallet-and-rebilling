<?php

declare(strict_types=1);

namespace Liberu\CRM\UsageWalletAndRebilling\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

final class UsageAudit extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_usage_audits';

    protected $fillable = ['team_id', 'actor_id', 'event', 'details', 'request_id'];

    protected function casts(): array
    {
        return ['details' => 'array'];
    }
}
