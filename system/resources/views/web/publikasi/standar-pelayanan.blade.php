@extends('components.base.base')
@section('content')
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                <section class="news-outer">
                    <div class="sec-title-one">
                        <h2 style="font-size: 26px">Sandar Pelayanan {{$config['singkatan_website']}}</h2> <br>
                    </div>
                    <div class="news-style-two">
                        <div class="inner-box">
                    
                            <!--lower-content-->
                            <div class="lower-content">
                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col" height="10px">No</th>
                                        <th scope="col">First</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                
                            </div>
                    
                        </div>
                    </div>
                        
                
                </section>
            
            </div>
            <!--Content Side-->


        </div>
    </div>
</div>
@endsection