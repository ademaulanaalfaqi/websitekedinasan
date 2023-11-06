<?php

namespace App\Http\Controllers\Web;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class PublikasiController extends Controller
{
    function detaildokumen($slug) {
        $client = new Client();

        try {
            // dokumen publik
            $responseDokumenPublik = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/publikasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayDokumenPublik = json_decode($responseDokumenPublik->getBody(), true);
            $dataDokumenPublik = collect($dataArrayDokumenPublik);
            $dataFilterDokumenPublik = $dataDokumenPublik->where('slug', $slug)->first();
            $data['dokumen_publik'] = $dataFilterDokumenPublik;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.detail-dokumen', $data);
    }

    function berita()
    {
        $client = new Client();

        try {
            // for berita
            $responseBerita = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/berita', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayBerita = json_decode($responseBerita->getBody(), true);

            $dataFilterBerita = array_filter($dataArrayBerita, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });


            $data['list_berita'] = array_slice($dataFilterBerita, 0);

            $listBerita = array_slice($dataFilterBerita, 0);
            $data['list_berita'] = $this->paginate($listBerita);
            $data['list_berita']->withPath('berita');

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.berita', $data);
    }

    function paginate($items, $perPage = 6, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    function detailberita($slug)
    {
        $client = new Client();

        try {
            // detail berita
            $responseBerita = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/berita', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayBerita = json_decode($responseBerita->getBody(), true);
            $dataBerita = collect($dataArrayBerita);
            $dataFilterBerita = $dataBerita->where('slug', $slug)->first();
            $data['berita'] = $dataFilterBerita;

            // for berita
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
        return view('web.publikasi.detail-berita', $data);
    }

    function artikel()
    {
        $client = new Client();

        try {
            $responseArtikel = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/artikel', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayArtikel = json_decode($responseArtikel->getBody(), true);

            $dataFilterArtikel = array_filter($dataArrayArtikel, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });

            $data['list_artikel'] = array_slice($dataFilterArtikel, 0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.artikel', $data);
    }

    function detailArtikel($slug)
    {
        $client = new Client();

        try {
            // detail Artikel
            $responseArtikel = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/artikel', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayArtikel = json_decode($responseArtikel->getBody(), true);
            $dataArtikel = collect($dataArrayArtikel);
            $dataFilterArtikel = $dataArtikel->where('slug', $slug)->first();
            $data['artikel'] = $dataFilterArtikel;

            // for Artikel
            $responseArtikel = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/artikel', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayArtikel = json_decode($responseArtikel->getBody(), true);

            $dataFilterArtikel = array_filter($dataArrayArtikel, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });

            $data['list_artikel'] = array_slice($dataFilterArtikel, 0, 3);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.detail-artikel', $data);
    }

    function standarpelayanan()
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
                return isset($item['opd_id']) && $item['opd_id'] == '567' ;
            });
            $data['config'] = array_slice($dataFilterConfig,  0,);

            // dokumen standar pelayanan
            $responseDokumen = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/publikasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayDokumen = json_decode($responseDokumen->getBody(), true);
            $dataFilterDokumen = array_filter($dataArrayDokumen,function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567' && $item['kategori_publikasi'] == 'Standar Pelayanan';
            });
            $data['list_standar_pelayanan'] = array_slice($dataFilterDokumen,  0,);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.standar-pelayanan', $data); 
    }

    function dokumenPublik()
    {
        $client = new Client();
        try {
            $responseDokumen = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/publikasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayDokumen = json_decode($responseDokumen->getBody(), true);
            $dataFilterDokumen = array_filter($dataArrayDokumen,function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567' && $item['kategori_publikasi'] == 'Dokumen Publik';
            });
            $data['list_dokumenPel'] = array_slice($dataFilterDokumen,  0,);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.dokumen-publik', $data);
    }
    function dokumenKinerja()
    {
        $client = new Client();
        try {
            $responseDokumen = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/publikasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $dataArrayDokumen = json_decode($responseDokumen->getBody(), true);
            $dataFilterDokumen = array_filter($dataArrayDokumen,function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567' && $item['kategori_publikasi'] == 'Dokumen Kinerja';
            });
            $data['list_dokumenKin'] = array_slice($dataFilterDokumen,  0,);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.publikasi.dokumen-kinerja', $data);
    }
}
