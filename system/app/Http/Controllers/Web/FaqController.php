<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    function faq() {
        $client = new Client();

        try {
            // for Faq
            $responseFaq = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/faq', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayFaq = json_decode($responseFaq->getBody(), true);
    
            $dataFilterFaq = array_filter($dataArrayFaq, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
    
            $data['faq'] = array_slice($dataFilterFaq, 0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.faq.faq', $data);
    }
}
