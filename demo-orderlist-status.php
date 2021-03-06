<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="PChomeSEA 包辦所有跨境大小事，一站式電子商務解決方案，讓你在東南亞銷售像在台灣一樣容易">
    <meta property="og:title" content="跟著PChomeSEA賣向東南亞" />
    <meta property="og:description" content="PChomeSEA 包辦所有跨境大小事，一站式電子商務解決方案，讓你在東南亞銷售像在台灣一樣容易" />
    <meta property="og:image" content="https://www.pchomesea.com/img/PChomeSEA_FB.jpg" />
    <meta property="og:url" content="https://www.pchomesea.com" />
    <meta property="og:site_name" content="PChomeSEA" />
    <!-- favicon.ico-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#00AFEB">
    <meta name="msapplication-TileColor" content="#00AFEB">
    <meta name="theme-color" content="#00AFEB">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/plugin/normalize.css">
    <!-- PAGE -->
    <link rel="stylesheet" type="text/css" href="css/orderlist.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">

    <title>PChomeSEA | 所有訂單</title>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WDQH45W');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDQH45W" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- 說明FOR RD: 填寫資料正確送出 請跑這一個區塊的LOADING-->
    <div class="sea-ui loading-overlay-main" style="display: none;">
        <div class="loading-circle-main">
            <div class="circle-loader">
                <div class="checkmark draw"></div>
            </div>
        </div>
    </div>
    <section id="sea-main">
        <!-- PChomeSEA Header -->
        <?php include("assets/header.php"); ?>
        <!-- PChomeSEA Header end-->
        <!-- PChomeSEA Menu_mobile -->
        <?php include("assets/menu-mobile.php"); ?>
        <!-- PChomeSEA Menu_mobile end-->
        <!-- 內容寬度 1200 區塊 -->
        <div class="container sea-gutters container-min-height">
            <div class="section-outer">
                <div class="row">
                    <div class="col-md-3">
                        <!-- PChomeSEA Menu_pc -->
                        <?php include("assets/menu-pc.php"); ?>
                        <!-- PChomeSEA Menu_pc end-->
                    </div>
                    <div class="col-md-9">
                        <section id="sea-section-content">



                            <!-- 頁面標題與麵包屑 -->
                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-orderlist"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>訂單管理</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>所有訂單</li>
                                </ul>
                            </div>
                            <!-- 頁面標題與麵包屑結束 -->

                            <!-- 標籤導航 -->
                            <div class="sea-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="sea-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">所有訂單 (15)</a></li>
                                        <li><a href="#tab2">待付款 (5)</a></li>
                                        <li><a href="#tab3">待出貨 (4)</a></li>
                                        <li><a href="#tab4">運送中 (3)</a></li>
                                        <li><a href="#tab5">訂單取消申請 (2)</a></li>
                                        <li><a href="#tab6">退款申請 (1)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- 標籤導航 結束 -->

                            <!-- 所有訂單容器 -->
                            <div class="listBox">

                                <h3>一般流程</h3>

                                <!-- 單筆訂單-改版 待付款 未出貨-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-red"></i>待付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- 單筆訂單 結束 -->


                                <!-- 單筆訂單 已付款 通知已出貨-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>已付款</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->


                                <!-- 單筆訂單 已付款 已出貨-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-green"></i>已完成</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->



                                <!-- 單筆訂單 失效訂單-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-delete icon-back icon-back-gray"></i>付款失敗</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->


                                <h3>取消訂單</h3>

                                <!-- 單筆訂單（買家）取消訂單申請中-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-red"></i>取消訂單申請中</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->

                                <!-- 單筆訂單 失效訂單-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-delete icon-back icon-back-gray"></i>取消交易</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->


                                <h3>訂單退款</h3>


                                <!-- 單筆訂單（買家）取消訂單申請中-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-red"></i>退款申請中</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->


                                <!-- 單筆訂單（買家）取消訂單申請中-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-wait icon-back icon-back-orange"></i>退款中</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->




                                <!-- 單筆訂單 失效訂單-->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-delete icon-back icon-back-gray"></i>退款成功</span>
                                        <div class="statusBar-contanctSeller">
                                            <a class="sea-ui btn-xs btn btn_contanctSeller contactbuyerBtn"><i class="sea-btn-icon icon-comment"></i>聯絡買家</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆訂單 結束 -->






                            </div> <!-- 所有訂單容器 結束 -->

                            <!-- PC 版 列出所有頁碼 -->
                            <div class="sea-ui page-pagination hidden-sm-down">
                                <ul class="eng-num">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">8</a></li>
                                    <li class="pagination-jump-next"></li>
                                    <li>
                                        <a class="pagination-next" href="#">
                                            <span class="sea-seller-icon icon-angle-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- 手機版 Load more-->
                            <div class="sea-btn-loadcontent hidden-sm-up">
                                <a href="#" class="sea-ui btn btn-primary btn-load">LOAD MORE</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- 內容寬度 1200 區塊 end-->
        <!-- PChomeSEA footer -->
        <?php include("assets/footer.php"); ?>
        <!-- PChomeSEA footer end-->
    </section>
    <!-- PChomeSEA Panel -->
    <?php include("assets/slide-panel/panel-orderdetail.php"); ?>
    <!-- PChomeSEA Panel end-->
    <!-- PChomeSEA lightBox -->
    <section id="sea-lightbox">
        <div class="sea-lightBox_backGround"></div>
        <div class="sea-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <!--頁面會出現的lightbox放這裡-->
            <?php include("assets/lightbox/orderlist/lightbox-orderlist.php"); ?>
            <!--頁面與面板都會出現的lightbox放這裡-->
            <?php include("assets/lightbox/slide-panel/lightbox-orderdetail.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->

    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->

    <!--訂單管理 JS-->
    <script type="text/javascript" src="js/js_orderlist.js"></script>

    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(3)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>



    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>
    <!-- 月曆用JS/CSS-->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-datepicker.standalone.min.css">
    <script type="text/javascript" src="js/plugin/bootstrap/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugin/bootstrap/locales/bootstrap-datepicker.zh-TW.js"></script>
    <script>
        //說明FOR RD: 多國語系月曆判斷在此 
        //- bootstrap4 月曆
        $('.datepicker').datepicker({
            orientation: 'bottom',
            autoclose: true,
            language: 'zh-TW'
            // language: 'uk' 英文語系
            //language: 'th' 泰文語系
        });
    </script>


</body>

</html>