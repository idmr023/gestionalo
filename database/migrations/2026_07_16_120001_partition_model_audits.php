<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (DB::getDriverName() !== 'pgsql') {
            return;
        }

        $oldTable = 'model_audits_old_'.date('YmdHis');

        DB::unprepared("ALTER TABLE model_audits RENAME TO {$oldTable};");

        DB::unprepared('
            CREATE TABLE model_audits (
                id BIGSERIAL,
                user_id BIGINT,
                auditable_type VARCHAR(255) NOT NULL,
                auditable_id BIGINT NOT NULL,
                action VARCHAR(20) NOT NULL,
                old_data JSONB,
                new_data JSONB,
                created_at TIMESTAMP(0) WITHOUT TIME ZONE,
                updated_at TIMESTAMP(0) WITHOUT TIME ZONE,
                PRIMARY KEY (id, created_at)
            ) PARTITION BY RANGE (created_at);
        ');

        DB::unprepared("
            CREATE TABLE model_audits_2026_07 PARTITION OF model_audits
            FOR VALUES FROM ('2026-07-01') TO ('2026-08-01');
        ");

        DB::unprepared("
            CREATE TABLE model_audits_2026_08 PARTITION OF model_audits
            FOR VALUES FROM ('2026-08-01') TO ('2026-09-01');
        ");

        DB::unprepared('
            CREATE TABLE model_audits_default PARTITION OF model_audits DEFAULT;
        ');

        DB::unprepared("
            INSERT INTO model_audits (id, user_id, auditable_type, auditable_id, action, old_data, new_data, created_at, updated_at)
            SELECT id, user_id, auditable_type, auditable_id, action, old_data::jsonb, new_data::jsonb, created_at, updated_at
            FROM {$oldTable};
        ");

        DB::unprepared('
            CREATE INDEX idx_model_audits_auditable ON model_audits (auditable_type, auditable_id);
        ');

        DB::unprepared("DROP TABLE {$oldTable};");
    }

    public function down(): void
    {
        if (DB::getDriverName() !== 'pgsql') {
            return;
        }

        DB::unprepared('DROP TABLE IF EXISTS model_audits CASCADE;');
    }
};
