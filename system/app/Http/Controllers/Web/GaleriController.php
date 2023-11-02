<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class GaleriController extends Controller
{
    function paginate($items, $perPage = 6, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    function foto() {
        $client = new Client();

        try {
            // for Foto
            $responseFoto = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/galeri-foto', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayFoto = json_decode($responseFoto->getBody(), true);
    
            $dataFilterFoto = array_filter($dataArrayFoto, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
    
            $list_foto = array_slice($dataFilterFoto, 0);
            $data['list_foto'] = $this->paginate($list_foto);
            $data['list_foto']->withPath('foto');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.galeri.foto', $data);
    }
    
    function vidio() {
        $client = new Client();

        try {
            // for Vidio
            $responseVidio = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/galeri-vidio', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayVidio = json_decode($responseVidio->getBody(), true);
    
            $dataFilterVidio = array_filter($dataArrayVidio, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            // dd($dataFilterVidio);
            $list_vidio = array_slice($dataFilterVidio, 0);
            $data['list_vidio'] = $this->paginate($list_vidio);
            $data['list_vidio']->withPath('vidio');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.galeri.vidio', $data);
    } 
}
