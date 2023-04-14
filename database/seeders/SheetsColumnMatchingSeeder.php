<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SheetsColumnMatchingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sheet1 = DB::table('sheet_configurations')
                    ->where(['spreadsheet_google_id' => '1UTJjbMyPiVCFWVkdDhZiue-NkHHpvLkded5JffCnhFQ',
                            'sheet' => 'Sheet1'])
                    ->first();

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet1->id,
            'sheet_column' => 'Product Name',
            'table_column' => 'product_name',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet1->id,
            'sheet_column' => 'Price',
            'table_column' => 'price',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet1->id,
            'sheet_column' => 'Amount',
            'table_column' => 'amount',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet1->id,
            'sheet_column' => 'Date',
            'table_column' => 'date',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        $sheet2 = DB::table('sheet_configurations')
                    ->where(['spreadsheet_google_id' => '1UTJjbMyPiVCFWVkdDhZiue-NkHHpvLkded5JffCnhFQ',
                            'sheet' => 'Sheet2'])
                    ->first();

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet2->id,
            'sheet_column' => 'Product',
            'table_column' => 'product_name',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet2->id,
            'sheet_column' => 'Price',
            'table_column' => 'price',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet2->id,
            'sheet_column' => 'Amount',
            'table_column' => 'amount',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet2->id,
            'sheet_column' => 'Sold on',
            'table_column' => 'date',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        $sheet3 = DB::table('sheet_configurations')
                    ->where(['spreadsheet_google_id' => '1AVjqNfM4acpqbA6OCPBvH9FwU_lq5QR4GbBEkUQ-hrU',
                            'sheet' => 'Sheet1'])
                    ->first();

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet3->id,
            'sheet_column' => 'Product',
            'table_column' => 'product_name',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet3->id,
            'sheet_column' => 'Price',
            'table_column' => 'price',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet3->id,
            'sheet_column' => 'Quantity',
            'table_column' => 'amount',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

        DB::table('sheet_column_matchings')->insert([
            'sheet_configuration_id' => $sheet3->id,
            'sheet_column' => 'Date',
            'table_column' => 'date',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);

    }
}
