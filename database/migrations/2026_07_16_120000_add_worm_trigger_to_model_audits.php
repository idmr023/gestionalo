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

        DB::unprepared('
            CREATE OR REPLACE FUNCTION prevent_model_audits_write()
            RETURNS TRIGGER AS $$
            BEGIN
                RAISE EXCEPTION \'model_audits is a WORM table: writes are immutable after creation.\';
            END;
            $$ LANGUAGE plpgsql;

            DROP TRIGGER IF EXISTS trg_prevent_update ON model_audits;
            CREATE TRIGGER trg_prevent_update
                BEFORE UPDATE ON model_audits
                FOR EACH ROW EXECUTE FUNCTION prevent_model_audits_write();

            DROP TRIGGER IF EXISTS trg_prevent_delete ON model_audits;
            CREATE TRIGGER trg_prevent_delete
                BEFORE DELETE ON model_audits
                FOR EACH ROW EXECUTE FUNCTION prevent_model_audits_write();

            REVOKE UPDATE, DELETE ON model_audits FROM public;
        ');
    }

    public function down(): void
    {
        if (DB::getDriverName() !== 'pgsql') {
            return;
        }

        DB::unprepared('
            DROP TRIGGER IF EXISTS trg_prevent_update ON model_audits;
            DROP TRIGGER IF EXISTS trg_prevent_delete ON model_audits;
            DROP FUNCTION IF EXISTS prevent_model_audits_write();
        ');
    }
};
