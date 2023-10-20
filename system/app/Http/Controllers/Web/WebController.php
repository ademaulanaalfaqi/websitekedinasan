<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WebController extends Controller
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
            
            // 
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

            // berita
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.beranda', $data);
    }

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
            
            // 
            $responseSlider = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/slider', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArraySlider = json_decode($responseSlider->getBody(), true);
    
            $dataFilterSlider = array_filter($dataArraySlider, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '593';
            });
    
            $data['list_slider'] = array_slice($dataFilterSlider, 0, 6);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.profil.pegawai-opd', $data);
    }

    function detailberita()
    {
        $client = new Client();

        try {
            // berita
            $responseBerita = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/berita', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayBerita = json_decode($responseBerita->getBody(), true);
            $dataFilterBerita = collect($dataArrayBerita)->first(function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            $data['berita'] = array_slice($dataFilterBerita,  0,);

            // 
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.detail-berita', $data);
    }
}
