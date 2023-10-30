<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    function kontak() {
        $client = new Client();

        try {
            // for Kontak
            $responseKontak = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/config', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayKontak = json_decode($responseKontak->getBody(), true);
    
            $dataFilterKontak = array_filter($dataArrayKontak, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
    
            $data['list_kontak'] = array_slice($dataFilterKontak, 0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.kontak.kontak', $data);
    }
}
