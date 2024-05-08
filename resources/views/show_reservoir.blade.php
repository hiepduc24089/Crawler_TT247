<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title>Mực nước các hồ thủy điện vừa cập nhật mới nhất - codienroi.com </title>
    <meta charset="UTF-8">
    <meta name="description" content="Thông tin mực nước các hồ thủy điện, lịch xả nước các hồ thủy điện trên toàn quốc">
    <meta name="keywords" content="lich cup dien, mực nước các hồ thủy điện, mực nước xả các hồ thủy điện, mực nước các hồ thủy điện evn">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/codienroi-favicon.png">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('w3-style.css') }}">
    <link rel="canonical" href="https://codienroi.com/muc-nuoc-cac-ho-thuy-dien" />
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
    <style>
        table td, table th {
            padding: 0.75rem;
            line-height: 1.5;
            vertical-align: top;
            border-top: 1px solid #eceeef;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            border: 0;
            width: 100%;
        }
        td, th {
            border: 0;
            text-align: left;
            padding: 8px;
        }
        tr {
            background: transparent;
        }
        /*tr:nth-child(even) {
          background-color: #dddddd;
        }*/
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5978326973232704"
            crossorigin="anonymous"></script>
</head>
<body class="w3-light-grey">
<div class="lcd-navbar">
    <div class="lcd-navbar-container">
        <a class="logo" href="/" title="codienroi.com - Cập nhật lịch cúp điện toàn quốc nhanh nhất">
            <img src="/img/logo-codienroi-header.png">
        </a>
    </div>
</div>
<div class="w3-content" style="max-width:1140px">
    <div class="lcd-breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs_item">
                <a href="/" class="breadcrumbs_link">Home</a>
            </li>
            <li class="breadcrumbs_item">
                <span class="breadcrumbs_link breadcrumbs_link_active">Mực nước các hồ thủy điện</span>
            </li>
        </ul>
    </div>
    <div class="w3-row">
        <!-- Blog entries -->
        <div class="w3-col l8 s12">
            <!-- Blog entry -->
            <div class="lcd-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h1 style="font-weight:bold;">Mực nước các hồ thủy điện và lịch xả nước trên toàn quốc vừa cập nhật</h1>
                    <p>Nhằm đảm bảo đủ nước và đảm bảo điện phục vụ bơm nước gieo cấy, trồng trọt, chúng tôi đã liên tục cập nhật mực nước các hồ thủy điện trên cả nước. Trang cũng cập nhật lịch điều tiết nước các hồ thủy điện và vận hành hệ thống hợp lý để đáp ứng nhu cầu nước và đảm bảo kế hoạch cung cấp điện. Thông tin điều tiết các hồ chứa duy trì mực nước ở mức hợp lý để tiết kiệm nguồn nước đảm bảo hiệu quả cao nhất cho sản xuất và đảm bảo cung cấp điện mùa khô cho hệ thống điện Quốc gia</p>
                </div>
                <div class="w3-container">
                    <img src="/lib/img/muc-nuoc-cac-ho-thuy-dien.jpg" alt="Lịch cúp điện mới nhất hôm nay" style="width:100%">
                    <div>
                        <div>
                            <p style="font-weight:500">Các hồ đang xả sâu:</p>
                            <table>
                                @foreach($reservoirs as $reservoir)
                                    @if($reservoir->xa_sau > 0)
                                        <tr>
                                            <td>{{$reservoir->name}}</td>
                                            <td style=" text-align: right;">Xả {{$reservoir->xa_sau}} cửa</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                        <div>
                            <p style="font-weight:500">Các hồ đang xả mặt:</p>
                            <table>
                                @foreach($reservoirs as $reservoir)
                                    @if($reservoir->xa_mat > 0)
                                        <tr>
                                            <td>{{$reservoir->name}}</td>
                                            <td style=" text-align: right;">Xả {{$reservoir->xa_mat}} cửa</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                    @foreach($reservoirRegions as $reservoirRegion)
                        <div class="khu_vuc_ho">
                            <h2 class="khu_vuc_ho_title">Mực nước các hồ khu vực {{$reservoirRegion->name}}</h2>
                        </div>
                        <div>
                            @foreach($reservoirs->where('region_id', $reservoirRegion->id) as $reservoir)
                                @include('details_reservoir', ['reservoir' => $reservoir])
                            @endforeach
                        </div>
                    @endforeach

                    <p style="color: red"><i>Thông tin đang cập nhật</i></p>
                    <h2 style="font-weight:bold">Những các tra cứu lịch cúp điện  mới nhất</h2>
                    <h3>1. Tra cứu lịch cắt điện tại website của Tập đoàn Điện lực Việt Nam</h3>
                    <p>Với cách tra cứu này, việc thực hiện rất dễ dàng. Để tìm kiếm lịch cúp điện , mọi người chỉ cần truy cập trang web https://www.cskh.evnspc.vn/ đối với khu vực miền nam, khu vực miền trung là https://cskh.cpc.vn/, và khu vực miền bắc là truy cập trang web https://cskh.npc.com.vn/. Sau đó chọn lệnh "LỊCH NGỪNG GIẢM CUNG CẤP ĐIỆN", cuối cùng là chọn khu vực muốn xem.</p>
                    <h3>2. Tra cứu lịch cúp điện trên ứng dụng CSKH EVN</h3>
                    <p>Cách tra cứu lịch cúp điện  bằng ứng dụng cũng vô cùng đơn giản.</p>
                    <p>Mọi người chỉ cần tải ứng dụng về máy điện thoại, đăng ký tài khoản, sau đó chọn mục "Lịch ngừng giảm cung cấp điện" là có thể xem được lịch mất điện </p>
                    <h3>3. Tra cứu lịch mất điện trên ứng dụng Zalo</h3>
                    <p>Để tìm lịch ngừng giảm cung cấp điện  trên Zalo. Bạn cần đăng nhập tài khoản Zalo. Nhấn tìm Điện lực miền Nam, hoặc Điện lực miền Trung, hoặc Điện lực miền Bắc, nhấn Quan tâm.</p>
                    <p>Ở khung chat, các bạn nhấn chữ tra cứu, sau đó chọn Lịch cúp điện là có thể xem lịch cắt điện tại khu vực mình đang ở.</p>
                    <h3>4. Thông báo lịch cúp điện  trên website codienroi.com</h3>
                    <p>Với cách này, các thao tác thực hiện là đơn giản nhất.</p>
                    <p>Mọi người chỉ cần truy cập trang web codienroi.com rồi chọn khu vực bạn sinh sống. Sau đó là bạn có thể xem ngay lịch cúp điện  một cách vô cùng đơn giản.</p>
                    <p>Với những thông tin trên đây, mong quý khán giả đã có thể tìm được cách đơn giản và nhanh chóng để tra cứu lịch cúp điện hôm nay.</p>
                    <p>Mọi ý kiến đóng góp, xin vui lòng liên hệ với chúng tôi để được giải đạp nhanh nhất. Xin chân thành cảm ơn.</p>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>
        <!-- Introduction menu -->
        <div class="w3-col l4">
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
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> {{ $provinceNorth->name }} </span>
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
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> {{ $provinceCentral->name }} </span>
                            </a>
                        @endforeach
                    </p>
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
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> {{ $provinceSouth->name }} </span>
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
        <!-- END GRID -->
    </div>
    <br>
    <!-- END w3-content -->
</div>
<!-- Footer -->
<footer class="w3-dark-grey w3-margin-top">
    <div class="container_footer">
        <p>© 2024 <a class="textnonedecor" href="/">Lịch cúp điện</a></p>
        <p><a class="textnonedecor" href="/gioi-thieu">Giới thiệu</a></p>
        <p><a class="textnonedecor" href="/dieu-khoan-dich-vu">Điều khoản dịch vụ</a></p>
        <p>Cập nhật lịch cúp điện nhanh chóng và chính xác mỗi ngày.</p>
        <p>info@codienroi.com</p>
    </div>
</footer>
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

