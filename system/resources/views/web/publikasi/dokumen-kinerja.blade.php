@extends('components.base.base')
@section('content')
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">
                        <div class="sec-title-one">
                            <h2 style="font-size: 26px">Dokumen Kinerja {{ $config['singkatan_website'] }}</h2> <br>
                        </div>
                        <div class="news-style-two">
                            <div class="inner-box">
                                <!--lower-content-->
                                <div class="lower-content">
                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" height="10px">No</th>
                                                <th scope="col">Nama Dokumen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_dokumenKin as $item)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td><a href="{{url('dokumen-kinerja/detail-dokumen', $item['slug'])}}">{{$item['judul_publikasi']}}</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
