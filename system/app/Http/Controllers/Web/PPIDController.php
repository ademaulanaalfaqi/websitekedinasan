<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PPIDController extends Controller
{
    function ppid() {
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
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.ppid.ppid', $data);
    }
}
