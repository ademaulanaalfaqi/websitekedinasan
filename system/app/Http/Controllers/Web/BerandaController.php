<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function beranda()
    {
        $client = new Client();

        try {
            // profil
            $responseProfil = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/profil', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayProfil = json_decode($responseProfil->getBody(), true);
            $dataFilterProfil = collect($dataArrayProfil)->first(function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            $data['profil'] = array_slice($dataFilterProfil,  0,);

            // config
            $responseConfig = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/config', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayConfig = json_decode($responseConfig->getBody(), true);
            $dataFilterConfig = collect($dataArrayConfig)->first(function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            $data['config'] = array_slice($dataFilterConfig,  0,);
            
            // loop slider
            $responseSlider = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/slider', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArraySlider = json_decode($responseSlider->getBody(), true);
    
            $dataFilterSlider = array_filter($dataArraySlider, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
    
            $data['list_slider'] = array_slice($dataFilterSlider, 0);

            // loop berita
            $responseBerita = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/berita', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayBerita = json_decode($responseBerita->getBody(), true);
    
            $dataFilterBerita = array_filter($dataArrayBerita, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
    
            $data['list_berita'] = array_slice($dataFilterBerita, 0, 3);

            // loop pegawai
            $responsePegawai = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/pegawai', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayPegawai = json_decode($responsePegawai->getBody(), true);
    
            $dataFilterPegawai = array_filter($dataArrayPegawai, function ($item) {
                return isset($item['pegawai_opd_gabung']) && $item['pegawai_opd_gabung'] == '567';
            });
    
            $data['list_pegawai'] = array_slice($dataFilterPegawai, 0, 4);
            // dd($data['list_pegawai']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.beranda', $data);
    }
}
