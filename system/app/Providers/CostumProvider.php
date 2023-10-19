<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use GuzzleHttp\Client;

class CostumProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    public function boot(): void
    {

        View::composer('*', function ($view) {
            // Config
            $client = new Client();
            $responseConfig = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/config', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $dataArrayConfig = json_decode($responseConfig->getBody(), true);

            $dataFilterConfig = collect($dataArrayConfig)->first(function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '593';
            });
            $config = array_slice($dataFilterConfig, 0);


             // Profil
            $responseProfil = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/profil', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
            $dataArrayProfil = json_decode($responseProfil->getBody(), true);
            $dataFilterProfil = collect($dataArrayProfil)->first(function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '593';
            });
            $profil = array_slice($dataFilterProfil, 0);

            $view->with('config', $config);
            $view->with('profil', $profil);


        });
    }
}
