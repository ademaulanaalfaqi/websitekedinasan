<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class RuangPublikController extends Controller
{
    function laporanskm() {
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

            // publikasi/laporan skm
            $responseLaporanSKM = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/publikasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayLaporanSKM = json_decode($responseLaporanSKM->getBody(), true);    
            $dataFilterLaporanSKM = array_filter($dataArrayLaporanSKM, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            $dataLaporanSKM = collect($dataFilterLaporanSKM)->where('kategori_publikasi', 'Laporan SKM')->all();
            // dd($dataLaporanSKM);
            $data['list_laporanskm'] = array_slice($dataLaporanSKM, 0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.ruang-publik.laporan-skm', $data);
    }

    function dokumenpublik($slug) {
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
        return view('web.ruang-publik.dokumen-publik', $data);
    }

    function laporantindaklanjut() {
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

            // publikasi/laporan skm
            $responseLaporanTindakLanjutSKM = $client->request('GET', 'http://kantorkite.ketapangkab.go.id/api/publikasi', [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);
    
            $dataArrayLaporanTindakLanjutSKM = json_decode($responseLaporanTindakLanjutSKM->getBody(), true);    
            $dataFilterLaporanTindakLanjutSKM = array_filter($dataArrayLaporanTindakLanjutSKM, function ($item) {
                return isset($item['opd_id']) && $item['opd_id'] == '567';
            });
            $dataLaporanTindakLanjutSKM = collect($dataFilterLaporanTindakLanjutSKM)->where('kategori_publikasi', 'Laporan Tindak Lanjut SKM')->all();
            // dd($dataLaporanTindakLanjutSKM);
            $data['list_laporan_tindak_lanjut_skm'] = array_slice($dataLaporanTindakLanjutSKM, 0);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return view('web.ruang-publik.laporan-tindak-lanjut-skm', $data);
    }
}
