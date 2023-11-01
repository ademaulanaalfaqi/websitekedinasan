<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    function tentang()
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return view('web.profil.tentang', $data);
    }

    function visimisi()
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return view('web.profil.visi-misi', $data);
    }

    function maklumat()
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return view('web.profil.maklumat', $data);
    }

    function selayangpandang()
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return view('web.profil.selayang-pandang', $data);
    }

    function strukturorganisasi()
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.profil.struktur-organisasi', $data);
    }

    function pegawaiopd()
    {
        $client = new Client();

        try {            
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
            
            // for pegawai
            $responsePegawai = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/pegawai', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayPegawai = json_decode($responsePegawai->getBody(), true);
    
            $dataFilterPegawai = array_filter($dataArrayPegawai, function ($item) {
                return isset($item['pegawai_opd_gabung']) && $item['pegawai_opd_gabung'] == '567';
            });
    
            $data['list_pegawai'] = array_slice($dataFilterPegawai, 0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.profil.pegawai-opd', $data);
    }
}
