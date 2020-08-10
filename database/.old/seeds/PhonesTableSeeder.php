<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            [
                'name' => '17a Ciretran',
                'number' => '(17) 3234 3366',
            ],
            [
                'name' => 'Aeroporto',
                'number' => '(17) 3233 1919',
            ],
            [
                'name' => 'Bombeiros',
                'number' => '193',
            ],
            [
                'name' => 'Câmara Municipal',
                'number' => '(17) 3214 7777',
            ],
            [
                'name' => 'Cemitério Ressureição',
                'number' => '(17) 3231 6368',
            ],
            [
                'name' => 'Cemitério São João Batista',
                'number' => '(17) 3231 6223',
            ],
            [
                'name' => 'Cemitério Jardim da Paz',
                'number' => '(17) 3227 6660',
            ],
            [
                'name' => 'Cetesb',
                'number' => '(17) 3218 4300',
            ],
            [
                'name' => 'Coleta de lixo',
                'number' => '0800 771 0155',
            ],
            [
                'name' => 'Conselho Tutelar Norte',
                'number' => '(17) 3232 2818 / Plantão (17) 99608 0514',
            ],
            [
                'name' => 'Conselho Tutelar Sul',
                'number' => '(17) 3236 2862 / Plantão (17) 99608 0407',
            ],
            [
                'name' => 'Correios',
                'number' => '(17) 3203 1001',
            ],
            [
                'name' => 'CPFL',
                'number' => '0800 101010',
            ],
            [
                'name' => 'CVV',
                'number' => '(17) 3233 4111',
            ],
            [
                'name' => 'Defesa Civil',
                'number' => '(17) 3211 1730',
            ],
            [
                'name' => 'Delegacia da Mulher',
                'number' => '(17) 3233 2910',
            ],
            [
                'name' => 'Delegacia Regional Tributária',
                'number' => '(17) 3227 4000',
            ],
            [
                'name' => 'Delegacia Seccional',
                'number' => '(17) 3234 3186',
            ],
            [
                'name' => 'DER',
                'number' => '(17) 3238 5006',
            ],
            [
                'name' => 'DIG de Rio Preto',
                'number' => '(17) 3236 8844',
            ],
            [
                'name' => 'Dise de Rio Preto',
                'number' => '(17) 3234 3760',
            ],
            [
                'name' => 'Emergência Ambiental',
                'number' => '0800 11 3560',
            ],
            [
                'name' => 'Estação Rodoviária',
                'number' => '(17) 3233 8683',
            ],[
                'name' => 'Fórum',
                'number' => '(17) 3233 6700',
            ],
            [
                'name' => 'Guarda Municipal',
                'number' => '153',
            ],
            [
                'name' => 'Guarda Municipal - Ouvidoria',
                'number' => '0800 7782345',
            ],
            [
                'name' => 'Guarda Municipal -Corregedoria',
                'number' => '3211 4354',
            ],
            [
                'name' => 'Hora certa',
                'number' => '130',
            ],
            [
                'name' => 'IPA',
                'number' => '(17) 3232 1933',
            ],
            [
                'name' => 'Pane em semáforo',
                'number' => '(17) 3213 9660',
            ],
            [
                'name' => 'Polícia Federal',
                'number' => '(17) 3224 4500',
            ],
            [
                'name' => 'Polícia Militar',
                'number' => '190',
            ],
            [
                'name' => 'Polícia Militar Ambiental',
                'number' => '(17) 3201-3600',
            ],
            [
                'name' => 'Polícia Rodoviária Estadual',
                'number' => '(17) 3222 2300',
            ],
            [
                'name' => 'Polícia Rodoviária Federal',
                'number' => '(17) 3224 7964',
            ],
            [
                'name' => 'Polícia Civil',
                'number' => '197',
            ],
            [
                'name' => 'Prefeitura',
                'number' => '(17) 3203 1100',
            ],
            [
                'name' => 'Procon',
                'number' => '(17) 3235 6880',
            ],
            [
                'name' => 'Receita Federal',
                'number' => '(17) 4009 7300',
            ],
            [
                'name' => 'SAMU',
                'number' => '192',
            ],
            [
                'name' => 'SeMAe',
                'number' => '0800 770 6666',
            ],
            [
                'name' => 'SUCEN',
                'number' => '3224 5522 / 3212 9436',
            ],
            [
                'name' => 'Recolhimento de animais mortos',
                'number' => '0800 771 0155',
            ],
            [
                'name' => 'UPA Jaguaré',
                'number' => '3215 1192 / 3215 6835',
            ],
            [
                'name' => 'UPA Região Norte',
                'number' => '3237 5315 / 3237 5321',
            ],
            [
                'name' => 'UPA Santo Antônio',
                'number' => '3206 2080',
            ],
            [
                'name' => 'UPA Tangará/Estoril',
                'number' => '3222 4184',
            ],
            [
                'name' => 'UPA Vila Toninho',
                'number' => '3238 2022',
            ],
            [
                'name' => 'Tiro de Guerra',
                'number' => '3224 6499',
            ],
        ]);
    }
}
