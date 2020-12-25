@extends('layouts.master')

@section('title','Môi giới nhà đất | Các cá nhân, công ty môi giới nhà đất')

@section('styles')
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011110519.msvbds.FrontEnd.min.css" />
<link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/Broker/broker.min.css" media="all">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />

@section('content')
<div class="zopim" __jx__id="___$_11 ___$_11" data-test-id="ChatWidgetButton" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000002; height: 30px; right: 10px; bottom: 0px;"><iframe frameborder="0" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" src="about:blank" data-test-id="ChatWidgetButton-iframe" title="Zendesk Chat widget button"></iframe></div>
<div class="zopim" __jx__id="___$_4 ___$_4" data-test-id="ChatWidgetWindow" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; padding: 0px; border: 0px; background: transparent; overflow: hidden; position: fixed; z-index: 16000001; right: 10px; bottom: 0px; border-top-left-radius: 5px; border-top-right-radius: 5px; display: none; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 3px 2px;"><iframe frameborder="0" style="background-color: transparent; vertical-align: text-bottom; position: relative; width: 100%; height: 100%; min-width: 100%; min-height: 100%; max-width: 100%; max-height: 100%; margin: 0px; overflow: hidden; display: block;" src="about:blank" data-test-id="ChatWidgetWindow-iframe" title="Zendesk Chat widget window"></iframe></div>
<div class="form-content">
    <div class="adPosition" positioncode="BANNER_POSITION_BACKGROUND"></div>
    <script type="text/javascript">
        var bannerContext = {
            "CateId": null,
            "PageId": 404,
            "CityCode": null,
            "DistrictId": null,
            "CurrentPage": 404
        };
    </script>

    <div id="staticDomain" statsdomain="https://statistic.batdongsan.com.vn" data-fileimg="https://file4.batdongsan.com.vn" data-web="https://batdongsan.com.vn" data-msvrouter="/microservice-architecture-router" data-msvrouter-personal="/microservice-architecture-router-personal" data-cssserver="https://staticfile.batdongsan.com.vn" data-oldsystem="https://batdongsan.com.vn" data-content="https://batdongsan.com.vn" data-domainorigin="batdongsan.com.vn" data-sug-sell="https://suggestion1.batdongsan.com.vn/" data-sug-rent="https://suggestion2.batdongsan.com.vn/" class="hide"></div>
    <div id="addonImage" addon-image="https://staticfile.batdongsan.com.vn/images/no-image.png"></div>
    <div id="SiteLeft" class="banner-left">
        <div class="container-default">
            <div>
                <div id="ban_wide_left" class="ban_wide_scroll" style="display: block; top: 146px; position: absolute; left: 4.5px; bottom: inherit;">
                    <div class="adPosition" positioncode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px">
                        <div class="adshared" rt="">
                            <div class="adshareditem aditem" time="15" style="display: none;" src="https://file4.batdongsan.com.vn/2020/11/02/UVSXfqBy/20201102142443-d843.jpg" altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg" link="http://experttalk.batdongsan.com.vn/khac/adapt-2-change-3-giu-lua-kinh-doanh-vuot-qua-covid-ev134?utm_source=BDS&amp;utm_medium=banner&amp;utm_campaign=A2C%233" bid="11037" tip="" tp="7" w="160" h="600" isbg="false" clr="false" k=""><a href="/microservice-architecture-router/Systems/Banner/Click?bannerid=11037" target="_blank" title="" rel="nofollow"><img src="https://file4.batdongsan.com.vn/2020/11/02/UVSXfqBy/20201102142443-d843.jpg" style="max-width: 100%; height:600px;"></a></div>
                            @foreach($sidebars as $sidebar)
                            <div class="adshareditem aditem" time="15" style="display: block;" src="https://file4.batdongsan.com.vn/2020/11/11/ZBfLmblA/20201111093910-ba2f.jpg" altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg" link="https://avpe.propertyguru.com.my/?lang=vn" bid="11057" tip="" tp="7" w="160" h="600" isbg="false" clr="false" k=""><a href="/microservice-architecture-router/Systems/Banner/Click?bannerid=11057" target="_blank" title="" rel="nofollow"><img src="/storage/img/slides/{!! $sidebar->link!!}" style="max-width: 100%; height:500px;"></a></div>
                            @endforeach
                        </div>
                    </div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 404,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 404
                        };
                    </script>
                </div>

                <div id="ban_left" class="ban_scroll" style="display: block; top: 146px; position: absolute; left: 44.5px; bottom: inherit;">
                    <div class="adPosition" positioncode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 404,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 404
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>


    <div class="popupMarking  save" style="display: none">
        <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_unsave.svg">
        <span> L&#x1B0;u tin th&#xE0;nh c&#xF4;ng</span>
    </div>
    <div class="popupMarking  unsave" style="display: none">
        <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/outlined/ic_save.svg">
        <span> &#x110;&#xE3; b&#x1ECF; l&#x1B0;u tin</span>
    </div>
    <div class="site-center">



        <link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/Broker/broker.min.css" media="all">

        <div id="MiddleSubMenu">



            <div class="broker-top-search">
                <div class="col1">
                    <div class="label_search">Tìm kiếm môi giới</div>
                </div>
                <form role="search" method="get" id="searchform" action="{{route('search')}}">

                    <div class="col2">
                        <div style="position: relative;">
                            <input type="text" id="txtKeyword" name="key" class="suggest" placeholder="Nhập từ khóa tìm kiếm" maxlength="100">
                        </div>

                    </div>
                    <div class="clear"></div>
                    <div id="searchcontrol">
                        <div class="col1">
                            <div id="divBrCategory" class="comboboxs advance-select-box mr10">
                                <span class="select-text hasvalue">
                                    <span class="select-text-content" style="width: 135px;"> Lo&#x1EA1;i giao d&#x1ECB;ch</span>
                                </span>
                                <input type="hidden" name="ddlCategoriess" id="hdBrCategory" runat="server" clientidmode="Static" />
                                <div id="divBrCategoryOptions" class="advance-select-options advance-options">
                                    <ul class="advance-options" style="min-width: 160px;">
                                        <li vl="" class="advance-options current" style="min-width: 128px;">Loại giao dịch</li>
                                        <li vl="38" data-value="nha-dat-ban" class="advance-options " style="min-width: 128px;">Nhà đất bán</li>
                                        <li vl="49" data-value="nha-dat-cho-thue" class="advance-options " style="min-width: 128px;">Nhà đất cho thuê</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col2">
                            <div id="divSubCategory" class="comboboxs advance-select-box mr10">
                                <span class="select-text">
                                    <span class="select-text-content" style="width: 135px;">Loại nhà đất</span>
                                </span>
                                <input type="hidden" id="hdSubCategory" value="0">
                                <div id="divSubCategoryOptions" class="advance-select-options advance-options" style="min-width: 192px;">
                                    <ul class="advance-options" style="min-width: 160px;">
                                        <li vl="" class="advance-options">Loại nhà đất</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="divBrCity" class="comboboxs advance-select-box mr10">
                                <span class="select-text hasvalue">
                                    <span class="select-text-content" style="width: 135px;">Tỉnh/Thành phố</span>
                                </span>
                                <input type="hidden" id="hdBrCity" value="HN">
                                <div id="divBrCityOptions" class="advance-select-options advance-options">
                                    <ul class="advance-options" style="min-width: 160px;">
                                        <li vl="" class="advance-options" style="min-width: 128px;">Tỉnh/Thành phố</li>
                                        <li vl="SG" data-value="tp-hcm" class="advance-options" style="min-width: 128px;">H&#x1ED3; Ch&#xED; Minh</li>
                                        <li vl="HN" data-value="ha-noi" class="advance-options" style="min-width: 128px;">H&#xE0; N&#x1ED9;i</li>
                                        <li vl="DDN" data-value="da-nang" class="advance-options" style="min-width: 128px;">&#x110;&#xE0; N&#x1EB5;ng</li>
                                        <li vl="BD" data-value="binh-duong" class="advance-options" style="min-width: 128px;">B&#xEC;nh D&#x1B0;&#x1A1;ng</li>
                                        <li vl="DNA" data-value="dong-nai" class="advance-options" style="min-width: 128px;">&#x110;&#x1ED3;ng Nai</li>
                                        <li vl="KH" data-value="khanh-hoa" class="advance-options" style="min-width: 128px;">Kh&#xE1;nh H&#xF2;a</li>
                                        <li vl="HP" data-value="hai-phong" class="advance-options" style="min-width: 128px;">H&#x1EA3;i Ph&#xF2;ng</li>
                                        <li vl="LA" data-value="long-an" class="advance-options" style="min-width: 128px;">Long An</li>
                                        <li vl="QNA" data-value="quang-nam" class="advance-options" style="min-width: 128px;">Qu&#x1EA3;ng Nam</li>
                                        <li vl="VT" data-value="ba-ria-vung-tau" class="advance-options" style="min-width: 128px;">B&#xE0; R&#x1ECB;a V&#x169;ng T&#xE0;u</li>
                                        <li vl="DDL" data-value="dak-lak" class="advance-options" style="min-width: 128px;">&#x110;&#x1EAF;k L&#x1EAF;k</li>
                                        <li vl="CT" data-value="can-tho" class="advance-options" style="min-width: 128px;">C&#x1EA7;n Th&#x1A1;</li>
                                        <li vl="BTH" data-value="binh-thuan" class="advance-options" style="min-width: 128px;">B&#xEC;nh Thu&#x1EAD;n </li>
                                        <li vl="LDD" data-value="lam-dong" class="advance-options" style="min-width: 128px;">L&#xE2;m &#x110;&#x1ED3;ng</li>
                                        <li vl="TTH" data-value="thua-thien-hue" class="advance-options" style="min-width: 128px;">Th&#x1EEB;a Thi&#xEA;n Hu&#x1EBF;</li>
                                        <li vl="KG" data-value="kien-giang" class="advance-options" style="min-width: 128px;">Ki&#xEA;n Giang</li>
                                        <li vl="BN" data-value="bac-ninh" class="advance-options" style="min-width: 128px;">B&#x1EAF;c Ninh</li>
                                        <li vl="QNI" data-value="quang-ninh" class="advance-options" style="min-width: 128px;">Qu&#x1EA3;ng Ninh</li>
                                        <li vl="TH" data-value="thanh-hoa" class="advance-options" style="min-width: 128px;">Thanh H&#xF3;a</li>
                                        <li vl="NA" data-value="nghe-an" class="advance-options" style="min-width: 128px;">Ngh&#x1EC7; An</li>
                                        <li vl="HD" data-value="hai-duong" class="advance-options" style="min-width: 128px;">H&#x1EA3;i D&#x1B0;&#x1A1;ng</li>
                                        <li vl="GL" data-value="gia-lai" class="advance-options" style="min-width: 128px;">Gia Lai</li>
                                        <li vl="BP" data-value="binh-phuoc" class="advance-options" style="min-width: 128px;">B&#xEC;nh Ph&#x1B0;&#x1EDB;c</li>
                                        <li vl="HY" data-value="hung-yen" class="advance-options" style="min-width: 128px;">H&#x1B0;ng Y&#xEA;n</li>
                                        <li vl="BDD" data-value="binh-dinh" class="advance-options" style="min-width: 128px;">B&#xEC;nh &#x110;&#x1ECB;nh</li>
                                        <li vl="TG" data-value="tien-giang" class="advance-options" style="min-width: 128px;">Ti&#x1EC1;n Giang</li>
                                        <li vl="TB" data-value="thai-binh" class="advance-options" style="min-width: 128px;">Th&#xE1;i B&#xEC;nh</li>
                                        <li vl="BG" data-value="bac-giang" class="advance-options" style="min-width: 128px;">B&#x1EAF;c Giang</li>
                                        <li vl="HB" data-value="hoa-binh" class="advance-options" style="min-width: 128px;">H&#xF2;a B&#xEC;nh</li>
                                        <li vl="AG" data-value="an-giang" class="advance-options" style="min-width: 128px;">An Giang</li>
                                        <li vl="VP" data-value="vinh-phuc" class="advance-options" style="min-width: 128px;">V&#x129;nh Ph&#xFA;c</li>
                                        <li vl="TNI" data-value="tay-ninh" class="advance-options" style="min-width: 128px;">T&#xE2;y Ninh</li>
                                        <li vl="TN" data-value="thai-nguyen" class="advance-options" style="min-width: 128px;">Th&#xE1;i Nguy&#xEA;n</li>
                                        <li vl="LCA" data-value="lao-cai" class="advance-options" style="min-width: 128px;">L&#xE0;o Cai</li>
                                        <li vl="NDD" data-value="nam-dinh" class="advance-options" style="min-width: 128px;">Nam &#x110;&#x1ECB;nh</li>
                                        <li vl="QNG" data-value="quang-ngai" class="advance-options" style="min-width: 128px;">Qu&#x1EA3;ng Ng&#xE3;i</li>
                                        <li vl="BTR" data-value="ben-tre" class="advance-options" style="min-width: 128px;">B&#x1EBF;n Tre</li>
                                        <li vl="DNO" data-value="dak-nong" class="advance-options" style="min-width: 128px;">&#x110;&#x1EAF;k N&#xF4;ng</li>
                                        <li vl="CM" data-value="ca-mau" class="advance-options" style="min-width: 128px;">C&#xE0; Mau</li>
                                        <li vl="VL" data-value="vinh-long" class="advance-options" style="min-width: 128px;">V&#x129;nh Long</li>
                                        <li vl="NB" data-value="ninh-binh" class="advance-options" style="min-width: 128px;">Ninh B&#xEC;nh</li>
                                        <li vl="PT" data-value="phu-tho" class="advance-options" style="min-width: 128px;">Ph&#xFA; Th&#x1ECD;</li>
                                        <li vl="NT" data-value="ninh-thuan" class="advance-options" style="min-width: 128px;">Ninh Thu&#x1EAD;n</li>
                                        <li vl="PY" data-value="phu-yen" class="advance-options" style="min-width: 128px;">Ph&#xFA; Y&#xEA;n</li>
                                        <li vl="HNA" data-value="ha-nam" class="advance-options" style="min-width: 128px;">H&#xE0; Nam</li>
                                        <li vl="HT" data-value="ha-tinh" class="advance-options" style="min-width: 128px;">H&#xE0; T&#x129;nh</li>
                                        <li vl="DDT" data-value="dong-thap" class="advance-options" style="min-width: 128px;">&#x110;&#x1ED3;ng Th&#xE1;p</li>
                                        <li vl="ST" data-value="soc-trang" class="advance-options" style="min-width: 128px;">S&#xF3;c Tr&#x103;ng</li>
                                        <li vl="KT" data-value="kon-tum" class="advance-options" style="min-width: 128px;">Kon Tum</li>
                                        <li vl="QB" data-value="quang-binh" class="advance-options" style="min-width: 128px;">Qu&#x1EA3;ng B&#xEC;nh</li>
                                        <li vl="QT" data-value="quang-tri" class="advance-options" style="min-width: 128px;">Qu&#x1EA3;ng Tr&#x1ECB;</li>
                                        <li vl="TV" data-value="tra-vinh" class="advance-options" style="min-width: 128px;">Tr&#xE0; Vinh</li>
                                        <li vl="HGI" data-value="hau-giang" class="advance-options" style="min-width: 128px;">H&#x1EAD;u Giang</li>
                                        <li vl="SL" data-value="son-la" class="advance-options" style="min-width: 128px;">S&#x1A1;n La</li>
                                        <li vl="BL" data-value="bac-lieu" class="advance-options" style="min-width: 128px;">B&#x1EA1;c Li&#xEA;u</li>
                                        <li vl="YB" data-value="yen-bai" class="advance-options" style="min-width: 128px;">Y&#xEA;n B&#xE1;i</li>
                                        <li vl="TQ" data-value="tuyen-quang" class="advance-options" style="min-width: 128px;">Tuy&#xEA;n Quang</li>
                                        <li vl="DDB" data-value="dien-bien" class="advance-options" style="min-width: 128px;">&#x110;i&#x1EC7;n Bi&#xEA;n</li>
                                        <li vl="LCH" data-value="lai-chau" class="advance-options" style="min-width: 128px;">Lai Ch&#xE2;u</li>
                                        <li vl="LS" data-value="lang-son" class="advance-options" style="min-width: 128px;">L&#x1EA1;ng S&#x1A1;n</li>
                                        <li vl="HG" data-value="ha-giang" class="advance-options" style="min-width: 128px;">H&#xE0; Giang</li>
                                        <li vl="BK" data-value="bac-kan" class="advance-options" style="min-width: 128px;">B&#x1EAF;c K&#x1EA1;n</li>
                                        <li vl="CB" data-value="cao-bang" class="advance-options" style="min-width: 128px;">Cao B&#x1EB1;ng</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="divBrDistrict" class="comboboxs advance-select-box mr10">
                                <span class="select-text hasvalue">
                                    <span class="select-text-content" style="width: 135px;">Quận/Huyện</span>
                                </span>
                                <input type="hidden" id="hdBrDistrict">
                                <div id="divBrDistrictOptions" class="advance-select-options advance-options">
                                    <ul class="advance-options" style="min-width: 160px;">
                                        <li vl="" class="advance-options" style="min-width: 128px;">Quận/Huyện</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="divBrProject" class="comboboxs advance-select-box mr10">
                                <span class="select-text">
                                    <span class="select-text-content" style="width: 135px;">Dự án</span>
                                </span>
                                <input type="hidden" id="hdBrProject" value="0">
                                <div id="divBrProjectOptions" class="advance-select-options advance-options" style="min-width: 192px;">
                                    <ul class="advance-options" style="min-width: 160px;">
                                        <li vl="" class="advance-options">Dự án</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col3">
                        <input type="submit" value="Tìm kiếm" id="btnSearch" class="search">
                    </div>
                </form>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

        </div>
        <div id="MainContent">
        </div>
        <div class="clear">
        </div>
        <div class="body-left">
            <div id="inforPageBroker" data-keyword="" data-cate="0" data-subcate="0" data-city="" data-district="0" data-project="0"></div>
            <div>
                <div class="SubTopContent">
                </div>
                <div class="SubTopContent">
                </div>
            </div>
            <div style="clear: both;">
            </div>
            <div class="container-default">
                <div>
                    <div id="broker-page">

                        <div class="broker-top-by-cate">
                            <h1><span>Danh b&#x1EA1; nh&#xE0; m&#xF4;i gi&#x1EDB;i</span></h1>
                        </div>

                        <div class="broker-top-select">

                            <a href="javascripts:;" did="1" class="company">Công ty môi giới</a>

                            <a href="javascripts:;" did="2" class="company">Cá nhân môi giới</a>
                        </div>


                        <div id="contentPage">
                        @include('pages.danhba.resuitl')
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="body-right">
            <div>
                <div class="container-common">
                    <div>
                        <div>
                            <div class="newsletter-form-small">
                                <div class="mb5">
                                    <div class="fl">
                                        <img src="https://file4.batdongsan.com.vn/images/icon-newsletter-small.jpg">
                                    </div>
                                    <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="newsletter-content">
                                    <div class="newsletter-bound">
                                        <div class="fl input">
                                            <input type="text" id="email" placeholder="Nhập email của bạn">
                                        </div>
                                        <div class="fl a"><a href="#" class="newsletter-register" id="newsletterRegister">Đăng ký</a></div>
                                        <div class="clear">&nbsp;</div>
                                        <div id="emailValid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="adPosition" positionCode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
            <script type='text/javascript'>
                var bannerContext = {
                    "CateId": null,
                    "PageId": 404,
                    "CityCode": null,
                    "DistrictId": null,
                    "CurrentPage": 404
                };
            </script>
            <div class="clear"></div>
            <div class="container-default">
                <div>

                    <div id='broker-by-category'>
                        <div class='broker-top-by-cate'>
                            <h2><span>Theo loại BDS</span></h2>
                        </div>
                        <ul>
                            <li class='menu-inactive'>
                                <h3><a href='moi-gioi-nha-dat-ban' title='Nhà đất bán'>Nhà đất bán (5662)</a></h3>
                                <ul>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-dat-nen-du-an' title='Bán đất nền dự án'>Bán đất nền dự án (2063)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-nha-rieng' title='Bán nhà riêng'>Bán nhà riêng (1462)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-trang-trai-khu-nghi-duong' title='Bán trang trại, khu nghỉ dưỡng'>Bán trang trại, khu nghỉ dưỡng (67)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-kho-nha-xuong' title='Bán kho, nhà xưởng'>Bán kho, nhà xưởng (70)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-loai-bat-dong-san-khac' title='Bán loại bất động sản khác'>Bán loại bất động sản khác (95)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-nha-mat-pho' title='Bán nhà mặt phố'>Bán nhà mặt phố (1233)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-dat' title='Bán đất'>Bán đất (1736)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-can-ho-chung-cu' title='Bán căn hộ chung cư'>Bán căn hộ chung cư (2840)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-ban-nha-biet-thu-lien-ke' title='Bán nhà biệt thự, liền kề'>Bán nhà biệt thự, liền kề (970)</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class='menu-inactive'>
                                <h3><a href='moi-gioi-nha-dat-cho-thue' title='Nhà đất cho thuê'>Nhà đất cho thuê (961)</a></h3>
                                <ul>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-can-ho-chung-cu' title='Cho thuê căn hộ chung cư'>Cho thuê căn hộ chung cư (496)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-van-phong' title='Cho thuê văn phòng'>Cho thuê văn phòng (185)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-nha-mat-pho' title='Cho thuê nhà mặt phố'>Cho thuê nhà mặt phố (199)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-nha-rieng' title='Cho thuê nhà riêng'>Cho thuê nhà riêng (213)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-kho-nha-xuong-dat' title='Cho thuê kho, nhà xưởng, đất'>Cho thuê kho, nhà xưởng, đất (71)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-cua-hang-ki-ot' title='Cho thuê cửa hàng, ki ốt'>Cho thuê cửa hàng, ki ốt (31)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-loai-bat-dong-san-khac' title='Cho thuê loại bất động sản khác'>Cho thuê loại bất động sản khác (22)</a></div>
                                    </li>
                                    <li>
                                        <div><a style='font-weight: normal;' href='moi-gioi-cho-thue-nha-tro-phong-tro' title='Cho thuê nhà trọ, phòng trọ'>Cho thuê nhà trọ, phòng trọ (43)</a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-default">
                <div>



                    <div id="broker-typical">
                        <div class="broker-top-by-cate">
                            <h2><span>Nhà môi giới tiêu biểu</span></h2>
                        </div>
                        <div id="dntb" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 714px;">
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat/bat-dong-san-duc-phat-eb2729" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/07/18/3ZsSL6gy/20190718101137-51a6.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat/bat-dong-san-duc-phat-eb2729" rel="nofollow">B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N &#x110;&#x1EE8;C PH&#xC1;T</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-dia-oc-bighomes-eb2774" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/images/nophoto/broker-no-photo-500_285.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-dia-oc-bighomes-eb2774" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N &#x110;&#x1EA6;U T&#x1AF; &#x110;&#x1ECA;A &#x1ED0;C BIGHOMES</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-ngoc-mai-land-eb2758" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/11/18/3ZsSL6gy/20191118151335-0aea.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-can-ho-chung-cu/cong-ty-co-phan-dau-tu-ngoc-mai-land-eb2758" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N &#x110;&#x1EA6;U T&#x1AF; NG&#x1ECC;C MAI LAND</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-nha-rieng/nguyen-thi-hong-trang-ib198588" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2017/09/03/20170903075347-85b7.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-nha-rieng/nguyen-thi-hong-trang-ib198588" rel="nofollow">Nguy&#x1EC5;n Th&#x1ECB; H&#x1ED3;ng Trang</a>
                                    <div class="fone">0919910070</div>
                                    <div class="intro">Chuyên môi giới và nhận ký gửi BĐS tại TP.HCM.</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-nha-rieng/chienhien-83-yahoo-com-vn-ib40115" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2016/03/09/eCGLjNi5/20160309162137-a122.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-nha-rieng/chienhien-83-yahoo-com-vn-ib40115" rel="nofollow">chienhien_83@yahoo.com.vn</a>
                                    <div class="fone">0909677159</div>
                                    <div class="intro">Chuyên môi giới và nhận ký gửi Bất Động Sản tại TP.Hồ Chí Minh</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat-nen-du-an/thanh-wado-mr-ib556158" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2017/03/25/eCGLjNi5/20170325092203-ecb0.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat-nen-du-an/thanh-wado-mr-ib556158" rel="nofollow">Thanh Wado (Mr.)</a>
                                    <div class="fone">0909743354</div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-nha-rieng/cong-ty-co-phan-nha-dat-gia-lam-eb2769" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/12/23/PGsxuI1y/20191223163008-e6d6.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-nha-rieng/cong-ty-co-phan-nha-dat-gia-lam-eb2769" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N NH&#xC0; &#x110;&#x1EA4;T GIA L&#xC2;M</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat-nen-du-an/cong-ty-co-phan-phat-trien-dia-oc-lucky-land-eb2754" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/11/07/3ZsSL6gy/20191107141803-7d94.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-co-phan-phat-trien-dia-oc-lucky-land-eb2754" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N PH&#xC1;T TRI&#x1EC2;N &#x110;&#x1ECA;A &#x1ED0;C LUCKY LAND</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-nha-rieng/cong-ty-co-phan-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-center-real-eb2768" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/12/21/PGsxuI1y/20191221135051-67dc.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-nha-rieng/cong-ty-co-phan-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-center-real-eb2768" rel="nofollow">C&#xD4;NG TY C&#x1ED4; PH&#x1EA6;N T&#x1AF; V&#x1EA4;N &#x110;&#x1EA6;U T&#x1AF; V&#xC0; QU&#x1EA2;N L&#xDD; B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N SAIGON CENTER REAL</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-nha-rieng/nguyen-ngoc-ha-ib597" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2020/10/12/20201012103609-8363.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-nha-rieng/nguyen-ngoc-ha-ib597" rel="nofollow">Nguy&#x1EC5;n Ng&#x1ECD;c H&#xE0;</a>
                                    <div class="fone">0903696093</div>
                                    <div class="intro">Chuyên môi giới và nhận ký gửi Bất Động Sản tại Quận Gò Vấp, Tân Bình</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat/cong-ty-tnhh-city-house-viet-nam-eb2771" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2020/01/02/3ZsSL6gy/20200102173302-78fa.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat/cong-ty-tnhh-city-house-viet-nam-eb2771" rel="nofollow">C&#xD4;NG TY TNHH CITY HOUSE VI&#x1EC6;T NAM</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-bat-dong-san-khoang-san-thuan-viet-eb2566" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2018/12/07/3ZsSL6gy/20181207091758-a578.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-bat-dong-san-khoang-san-thuan-viet-eb2566" rel="nofollow">C&#xF4;ng Ty TNHH &#x110;&#x1EA7;u T&#x1B0; B&#x1EA5;t &#x110;&#x1ED9;ng S&#x1EA3;n Kho&#xE1;ng S&#x1EA3;n Thu&#x1EAD;n Vi&#x1EC7;t</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-dia-oc-hung-phat-eb2747" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/10/25/3ZsSL6gy/20191025135455-b657.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-tnhh-dau-tu-dia-oc-hung-phat-eb2747" rel="nofollow">C&#xD4;NG TY TNHH &#x110;&#x1EA6;U T&#x1AF; &#x110;&#x1ECA;A &#x1ED0;C H&#xD9;NG PH&#xC1;T</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-dat-nen-du-an/cong-ty-tnhh-dich-vu-bat-dong-san-tan-phu-eb2724" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/06/25/PGsxuI1y/20190625104356-f3f9.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-dat-nen-du-an/cong-ty-tnhh-dich-vu-bat-dong-san-tan-phu-eb2724" rel="nofollow">C&#xD4;NG TY TNHH D&#x1ECA;CH V&#x1EE4; B&#x1EA4;T &#x110;&#x1ED8;NG S&#x1EA2;N T&#xC2;N PH&#xDA;</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/cho-thue-van-phong/cong-ty-tnhh-kinh-doanh-bds-will-home-eb2559" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2018/07/10/JGcIp0rf/20180710141143-5c21.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/cho-thue-van-phong/cong-ty-tnhh-kinh-doanh-bds-will-home-eb2559" rel="nofollow">C&#xF4;ng ty TNHH Kinh Doanh B&#x110;S Will Home</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="dntb-row">
                                <div class="avatar">
                                    <a href="/ban-nha-rieng/cong-ty-tnhh-thuong-mai-dich-vu-bds-hoi-tu-eb2664" rel="nofollow" class="verticalbox" style="width: 80px; height: 80px;">
                                        <img class="img childbox" src="https://file4.batdongsan.com.vn/resize/200x200/2019/07/12/3ZsSL6gy/20190712150749-ce58.jpg" />
                                    </a>
                                </div>
                                <div class="info-row">
                                    <a class="link colorboldblue" href="/ban-nha-rieng/cong-ty-tnhh-thuong-mai-dich-vu-bds-hoi-tu-eb2664" rel="nofollow">C&#xD4;NG TY TNHH TH&#x1AF;&#x1A0;NG M&#x1EA0;I D&#x1ECA;CH V&#x1EE4; B&#x110;S H&#x1ED8;I T&#x1EE4;</a>
                                    <div class="fone"></div>
                                    <div class="intro"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <div class="viewall">
                            <a href="/nha-moi-gioi" rel="nofollow">Xem tất cả</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-default">
                <div>


                    <div id="broker-by-city">
                        <div class="broker-top-by-cate">
                            <h2>THEO TỈNH / TP</h2>
                            <span></span>
                        </div>
                        <div class="ulbox">
                            <ul>
                                @foreach( $provinces as $province)
                                <li>
                                    <a href="?province={{ $province->code }}" title="{{ $province->name }}">
                                        {{ $province->name }} ({{ $province->count_companies }})
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                            <div class="viewmore-prd">
                                <a href="javascript:void(0)" rel="nofollow" class="vmore">
                                    Xem thêm <img src="https://file4.batdongsan.com.vn/images/Icons/down_arrow.png">
                                </a>
                                <a href="javascript:void(0)" rel="nofollow" class="vless" style="display: none;">
                                    Ẩn <img src="https://file4.batdongsan.com.vn/images/Icons/up_arrow.png">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-default">
                <div>

                </div>
                <div class="fb-fanpage">
                    <div id="fb-root"></div>
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=302507473246792";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <div class="fb-page" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Batdongsandv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Batdongsandv/">Batdongsan.com.vn</a></blockquote>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        <div class="banner-bottom">
            <div style="float: left; width: 560px">
            </div>
            <div style="float: left; width: 430px; margin-left: 5px">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="boxLinkFooter">
            <div id="boxLink" class="footer-link-new">
                <ul>
                    <li><a href="/ban-can-ho-chung-cu-rivera-park-ha-noi">Chung cư Rivera Park Hà Nội</a></li>
                    <li><a href="/ban-can-ho-chung-cu-chung-cu-c1-c2-xuan-dinh">Chung cư C1 C2 Xuân Đỉnh</a></li>
                    <li><a href="/ban-can-ho-chung-cu-anland-nam-cuong">Chung cư Anland Nam Cường</a></li>
                    <li><a href="/ban-can-ho-chung-cu-hanhud-hoang-quoc-viet">Chung cư Hanhud Hoàng Quốc Việt</a></li>
                    <li><a href="/ban-can-ho-chung-cu-sunshine-center">Sunshine Center</a></li>
                    <li><a href="/ban-nha-biet-thu-lien-ke-khu-do-thi-lakeview-city">Bán biệt thự Lakeview City</a></li>
                    <li><a href="/ban-nha-biet-thu-lien-ke-ha-do-756-sai-gon">Bán biệt thự Hà Đô 756 Sài Gòn</a></li>
                    <li><a href="/ban-can-ho-chung-cu-park-12-park-hill-times-city">Bán chung cư Park 12 Park Hill Times City</a></li>
                    <li><a href="/ban-can-ho-chung-cu-vinpearl-condotel-da-nang">Bán căn hộ Vinpearl Condotel Đà Nẵng</a></li>
                    <li><a href="/ban-can-ho-chung-cu-soho-premier">Bán căn hộ Soho Premier</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-xa-tien-xuan">Bán nhà Tiến Xuân</a></li>
                </ul>
                <ul>
                    <li><a href="/ban-can-ho-chung-cu-duc-long-golden-land">Bán căn hộ Đức Long Golden Land</a></li>
                    <li><a href="/ban-can-ho-chung-cu-hung-phat-golden-star">Bán căn hộ Hưng Phát Golden Star</a></li>
                    <li><a href="/ban-can-ho-chung-cu-chung-cu-129d-truong-dinh">Bán chung cư 129D Trương Định</a></li>
                    <li><a href="/ban-can-ho-chung-cu-e4-tower">Bán chung cư E4 Tower</a></li>
                    <li><a href="/ban-nha-rieng-duong-nguyen-trung-truc-66">Bán nhà Nguyễn Trung Trực Bình Thạnh</a></li>
                    <li><a href="/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a></li>
                    <li><a href="/ban-can-ho-chung-cu-n03-t3-t4-ngoai-giao-doan">Bán chung cư N03 T3 T4 Ngoại Giao Đoàn</a></li>
                    <li><a href="/ban-can-ho-chung-cu-valeo-dam-sen">Bán căn hộ Valeo Đầm Sen</a></li>
                    <li><a href="/ban-dat-nen-du-an-khu-do-thi-an-thinh">Bán đất nền Khu đô thị An Thịnh</a></li>
                    <li><a href="/ban-can-ho-chung-cu-golden-land">Chung cư Golden Land</a></li>
                </ul>
                <ul>
                    <li><a href="/ban-can-ho-chung-cu-happy-star-tower">Bán chung cư Happy Star Tower</a></li>
                    <li><a href="/ban-can-ho-chung-cu-sunrise-city">Căn hộ Sunrise City</a></li>
                    <li><a href="/nha-dat-ban-thai-nguyen">Nhà đất Thái Nguyên</a></li>
                    <li><a href="/khu-thuong-mai-dich-vu-long-bien/vincom-center-long-bien-pj994">Vincom Long Bien</a></li>
                    <li><a href="/ban-can-ho-chung-cu-sunview-1-2">Sunview Town</a></li>
                    <li><a href="/ban-can-ho-chung-cu-times-city">Chung cư Times City</a></li>
                    <li><a href="/ban-can-ho-chung-cu-chung-cu-golden-west-le-van-thiem">Chung cư Golden West</a></li>
                    <li><a href="/ban-can-ho-chung-cu-alphanam-luxury-apartment">Bán căn hộ Alphanam Luxury Apartment</a></li>
                    <li><a href="/ban-can-ho-chung-cu-ecolife-tay-ho">Bán chung cư Ecolife Tây Hồ</a></li>
                    <li><a href="/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a></li>
                </ul>
                <ul>
                    <li><a href="/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a></li>
                    <li><a href="/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a></li>
                    <li><a href="/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a></li>
                    <li><a href="/ban-can-ho-chung-cu-centara-thu-thiem">Căn hộ Centara Thủ Thiêm</a></li>
                    <li><a href="/ban-can-ho-chung-cu-athena-complex">Chung cư Athena Complex</a></li>
                    <li><a href="/ban-can-ho-chung-cu-tu-hiep-plaza">Chung cư Tứ Hiệp Plaza</a></li>
                    <li><a href="/tags/cho-thue/Sang-quan-cafe">Sang quán café</a></li>
                    <li><a href="/ban-can-ho-chung-cu-gemek-premium">Chung cư Gemek Premium</a></li>
                    <li><a href="/ban-can-ho-chung-cu-vinpearl-condotel-nha-trang">Căn hộ Vinpearl Condotel Nha Trang</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a></li>
                </ul>
                <ul>
                    <li><a href="https://batdongsan.com.vn/ban-dat-ninh-kieu-ct">Bán đất Ninh Kiều</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-quan-11">Bán nhà Quận 11</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-16-3">Bán nhà Phường 16 Gò Vấp</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-4-15">Bán nhà Phường 4 Quận 8</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-9-6">Bán nhà Phường 9 Quận 5</a></li>
                    <li><a href="https://batdongsan.com.vn/ban-dat-phuong-dong-hoa">Bán đất Đông Hòa</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-phuong-duong-noi">Bán nhà Dương Nội</a></li>
                    <li><a href="https://batdongsan.com.vn/nha-dat-ban-thi-tran-trau-quy">Bán nhà Trâu Quỳ</a></li>

                </ul>
            </div>



        </div>
    </div>

    <div id="SiteRight" class="banner-right clearfix">
        <div class="container-default">
            <div>
                <div id="ban_wide_right" class="ban_wide_scroll">
                    <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
                    <script type='text/javascript'>
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 404,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 404
                        };
                    </script>
                </div>

                <div id="ban_right" class="ban_scroll">
                    <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
                    <script type='text/javascript'>
                        var bannerContext = {
                            "CateId": null,
                            "PageId": 404,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 404
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="dialogPopup" role="dialog">
        <div class="nomodal"></div>
        <div class="modal-dialog">
            <div class="modal-content ">
            </div>
        </div>
    </div>

    <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
    <script type='text/javascript'>
        var bannerContext = {
            "CateId": null,
            "PageId": 404,
            "CityCode": null,
            "DistrictId": null,
            "CurrentPage": 404
        };
    </script>

    <div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
    <div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
    <div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
    <div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
    <div class="popup-content ">
    </div>
    <div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;" onclick="account.CloseAccountPopup()"></div>
    <div id="gototop" title="Go to top"></div>
</div>
<div style="display: none" class="searching-histories-configs" max-searching-histories-length="20" sync-time-searching-histories="5" sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories" remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
</div>


<script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202011110519.msvbds.FrontEnd.Common.min.js"></script>

<!--start BannerContext-->
<script type='text/javascript'>
    var __bannerContext = {
        "PageId": 404,
        "CateId": null,
        "CityCode": null,
        "DistrictId": null,
        "CurrentPage": 1
    };
</script>
<!--end BannerContext-->
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim || (function(d, s) {
        var z = $zopim = function(c) {
                z._.push(c)
            },
            $ = z.s =
            d.createElement(s),
            e = d.getElementsByTagName(s)[0];
        z.set = function(o) {
            z.set.
            _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "https://v2.zopim.com/?6fJlcOXWwJofJZOzmeDIifb7bHGvvSte";
        z.t = +new Date;
        $.
        type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>
<!--End of Zendesk Chat Script-->
<script type="text/javascript">
    var newsLetterRegister = new newsLetterRegister.NewsLetterRegister();
    newsLetterRegister.InitializeLoad();

    var commentUser = new commentUser.CommentUser();
    commentUser.InitializeLoad();

    var paramAccount = {
        urlListLogin: '/Systems/Account/Login',
        urlListRegister: '/Systems/Account/Register',
        urlListForgetPass: '/Systems/Account/ForgetPassword',
        urlListCity: '/Contacts/CommonData/GetCityList',
        urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
        urlListWard: '/Contacts/CommonData/GetWardList',
    };

    var account = new account.Content();
    account.Initialize(paramAccount);

    var footer = new footer.Footer();
    footer.Initialize();

    var menu = new menu.Menu();
    menu.Initialize();
</script>

<div sync-marked-products-url="/Product/MarkedProducts/SyncMarkedProducts" unmarked-product-url="/Product/MarkedProducts/UnmarkProduct" marked-product-ids-sync-time="0.5"></div>



<script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011110519.msvbds.FrontEnd.Broker.Home.min.js"></script>
<script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011110519.msvbds.FrontEnd.Broker.FormSearchBroker.min.js"></script>
<script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011110519.msvbds.FrontEnd.Broker.BrokerCity.min.js"></script>
<script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011110519.msvbds.FrontEnd.Broker.TypicalBroker.min.js"></script>
<script src="https://staticfile.batdongsan.com.vn/js/BDS.Contacts/filestatic.ver202011110519.msvbds.FrontEnd.Broker.SendMail_BINNOVA.min.js"></script>

<script type="text/javascript">
    var params = {
        brokerSelected: ".broker-top-select",
        txtKeyword: '#txtKeyword',
        btnSearch: '#btnSearch',

        urlListSubCate: '/Contacts/CommonData/GetListSubCateByCate',
        urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
        urlListProject: '/Contacts/CommonData/GetListProjectByDistrict',
    };
    var contactFormSearch = new contactsFormSearch.FormSearchBroker();
    contactFormSearch.Initialize(params);
    var contactHome = new contacts.ContactIndex();
    contactHome.Initialize(params);

    var paramsSendMail = {
        lnkSendEmail: '.broker-send-email',
        btnSendMail: '#btnSendMail',
        formSubmitSendMail: '#formSubmitSendMail',

        urlSendMail: '/Contacts/SendMail/Send',
    };
    var contactSendMail = new contactSendMail.ContactSendMail();
    contactSendMail.Initialize(paramsSendMail);

    var brokerCity = new brokerCity.BrokerCity();
    brokerCity.Initialize();

    var typicalBroker = new typicalBroker.TypicalBroker();
    typicalBroker.Initialize();
</script>

<script type="text/javascript">
    try {
        var script_imported = document.createElement('script');
        script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&dv=' + (new Date().toJSON().slice(0, 10));
        if (document.body != null && document.body != undefined) {
            document.body.appendChild(script_imported);
        } else {
            document.head.appendChild(script_imported);
        }
    } catch (e) {}
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
        window.countOfLazyImages = lazyImages.length;
        if ('IntersectionObserver' in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        if (lazyImage.attributes['src-lazy']) {
                            lazyImage.src = lazyImage.attributes['src-lazy'].value;
                            lazyImage.removeAttribute('src-lazy');
                            lazyImageObserver.unobserve(lazyImage);
                        }
                    };
                });
            });
            lazyImages.forEach(function(lazyImage, i) {
                lazyImage.setAttribute('lazy-id', i);
                lazyImageObserver.observe(lazyImage);
            });
            (function checkDuplicate() {
                var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
                if (countOfLazyElements.length > window.countOfLazyImages) {
                    var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                    elements.forEach(element => {
                        var lazyId = element.attributes['lazy-id'].value;
                        var lazyElements = [].slice.call(document.querySelectorAll(`[lazy-id="${lazyId}"]`));
                        if (lazyElements.length > 1) {
                            for (var i = 1; i < lazyElements.length; i++) {
                                var lazyElement = lazyElements[i];
                                lazyImageObserver.observe(lazyElement);
                                lazyElement.setAttribute('lazy-id', window.countOfLazyImages);
                                window.countOfLazyImages++;
                            }
                        }
                    });
                }
                setTimeout(checkDuplicate, 1000)
            })();
        } else {
            $('[src-lazy]').each(function() {
                this.src = this.attributes['src-lazy'].value;
                this.removeAttribute('src-lazy');
            });
        }
    });
</script>



@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.company').click(function() {
            var type = $(this).attr('did');

            $.ajax({
                type: "GET",
                url: "/nha-moi-gioi",
                data: {
                    type: type
                },
                dataType: 'html',
                success: function(data) {}
            }).done(function(data) {
                $('#contentPage').html(data);

            });
        });
    })
</script>
@endsection