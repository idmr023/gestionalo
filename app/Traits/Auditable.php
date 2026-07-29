<?php

namespace App\Traits;

use App\Models\ModelAudit;
use Illuminate\Support\Facades\Auth;

trait Auditable
{
    protected static function bootAuditable(): void
    {
        static::created(function ($model) {
            static::recordAudit($model, 'created', null, $model->toArray());
        });

        static::updated(function ($model) {
            $old = $model->getOriginal();
            $new = $model->getAttributes();

            $changes = [];
            foreach ($new as $key => $value) {
                if (array_key_exists($key, $old) && $old[$key] !== $value) {
                    $changes[$key] = ['old' => $old[$key], 'new' => $value];
                }
            }

            if (! empty($changes)) {
                static::recordAudit($model, 'updated', $old, $new);
            }
        });

        static::deleted(function ($model) {
            if ($model->isForceDeleting()) {
                return;
            }
            static::recordAudit($model, 'deleted', $model->getOriginal(), null);
        });

        static::restored(function ($model) {
            static::recordAudit($model, 'restored', null, $model->toArray());
        });
    }

    protected static function recordAudit($model, string $action, ?array $oldData, ?array $newData): void
    {
        ModelAudit::create([
            'user_id' => Auth::id(),
            'auditable_type' => get_class($model),
            'auditable_id' => $model->getKey(),
            'action' => $action,
            'old_data' => $oldData,
            'new_data' => $newData,
        ]);
    }
}
