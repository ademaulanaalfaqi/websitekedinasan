<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    function informasi() {
        $client = new Client();

        try {
            // informasi
            $responseInformasi = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/informasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayInformasi = json_decode($responseInformasi->getBody(), true);
            $dataFilterInformasi = array_filter($dataArrayInformasi, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            $data['list_informasi'] = array_slice($dataFilterInformasi,  0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.informasi.informasi', $data);
    }
}
