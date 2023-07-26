<?php

namespace Pterodactyl\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property string $token
 * @property \Carbon\CarbonImmutable $created_at
 * @property \Pterodactyl\Models\User $user
 */
class RecoveryToken extends Model
{
    /**
     * There are no updates to this model, only inserts and deletes.
     */
    public const UPDATED_AT = null;

    public $timestamps = true;

    protected bool $immutableDates = true;

    public static array $validationRules = [
        'token' => 'required|string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
