<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SheetConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sheet_configurations')->insert([
            'spreadsheet_google_id' => '1UTJjbMyPiVCFWVkdDhZiue-NkHHpvLkded5JffCnhFQ',
            'sheet' => 'Sheet1',
            'table' => 'sales',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_configurations')->insert([
            'spreadsheet_google_id' => '1UTJjbMyPiVCFWVkdDhZiue-NkHHpvLkded5JffCnhFQ',
            'sheet' => 'Sheet2',
            'table' => 'sales',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_configurations')->insert([
            'spreadsheet_google_id' => '1AVjqNfM4acpqbA6OCPBvH9FwU_lq5QR4GbBEkUQ-hrU',
            'sheet' => 'Sheet1',
            'table' => 'sales',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
