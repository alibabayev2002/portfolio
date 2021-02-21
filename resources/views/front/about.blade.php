@extends('base')
@section('content')

<div class="about section row mx-0">
    <div class="about-content section-content py-3">
        <h1 class="title">Haqqımda</h1>
        <h3 class="text-danger"><b><i class="fas fa-long-arrow-alt-right"></i> Mən <i
                    class="fas fa-long-arrow-alt-left"></i></b></h3>
        <div class="content row mx-0 w-100 aling-items-center mb-4">
            <div class="col-12 col-lg-4 row mx-0 align-items-center">
                <img src="{{asset('img/profile.jpg')}}" class="w-100" alt="">
            </div>
            <div class="col-12 col-lg-8">
                <span class="font-3 mr-2"><b>Babayev Əli </b></span>
                <span class="typing-2 font-3"></span>
                <br>
                <span class="font-2">
                    Salam , mənim adım Babayev Əlidir.18 yaşındayam.Azərbaycan Dövlət Neft və Sənaye Üniversitetinin İTİF fakültəsinin Kompüter mühəndisliyi(əyani) ixtisasını oxuyuram.Məktəb illərindən İT sahəsinə maraqlarım olub.2016 -ci ildən İnternet üzərindən Web developer sahəsi üzrə özümü inkişaf etdirməyə çalışmışam.Bəzi layihələrdə şəxsən iştirak etmişəm.Daim yeniliklərə açığam və özümü inkişaf etdirməyə çalışıram.Bu saytı İT biliklərimi bir növ subut etmək üçün hazırlamışam. <a href="{{route('skills')}}">Bacarıqlarım</a> ' a tıklayaraq hansı texnologiyalar üzərində çalışdığım hakkında məlumat öyrənə bilərsiniz.
                </span> <br>
                <div class="col-12 row mx-0 justify-content-center justify-content-lg-start">
                <button class="btn btn-success mt-4 px-3">CV YÜKLƏ!</button>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')
<script>

</script>
@endsection