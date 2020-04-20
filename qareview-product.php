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
    <link rel="stylesheet" type="text/css" href="css/qareview.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">
    <title>PChomeSEA | 商品留言</title>
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
                                <span class="sea-seller-icon icon-callcenter"></span>
                                <ul>
                                    <li>
                                        <a href="index.php">首頁</a>
                                    </li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>客服管理</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>商品留言版</li>
                                </ul>
                            </div>
                            <!-- 頁面標題與麵包屑結束 -->

                            <!-- 搜尋群組-->
                            <div class="searchBarGroup">

                                <div class="sea-ui form inputGroup">
                                    <div class="inputGroup-inputBox">
                                        <div class="sea-ui form">
                                            <input type="text" placeholder="請輸入商品編號">
                                        </div>
                                    </div>
                                    <a href="demo-qareview-product-clearsearch.php" class="sea-ui btn-sm btn-primary inputGroup-btn">搜尋</a>
                                    <a href="qareview-product.php" class="sea-ui btn-sm inputGroup-btn" style="display: none"><span class="sea-btn-icon icon-delete"></span>清空</a>
                                </div>

                                <div class="hidden-sm-down">
                                    <div class="sea-ui form select ">
                                        <select>
                                            <option value="20">顯示20筆</option>
                                            <option value="10">顯示10筆</option>
                                            <option value="30">顯示30筆</option>
                                            <option value="50">顯示50筆</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- 搜尋結束-->

                            <!-- 標籤導航 -->
                            <div class="sea-ui tab-nav-bar tab-nav tab-nav-fluid">
                                <div class="sea-ui tab-pointing">
                                    <ul class="tab-items no-margin">
                                        <li><a href="#tab1" class="active">所有商品留言<span>(86)</span></a></li>
                                        <li><a href="#tab2">未讀取<span>(70)</span></a></li>
                                        <li><a href="#tab3">待回覆<span>(10)</span></a></li>
                                        <li><a href="#tab4"><span>已回覆(6)</span></a></li>
                                    </ul>
                                </div>
                            </div>



                            <!-- 所有清單容器 -->
                            <div class="listBox">
                                <!--說明FOR RD: 沒有任何留言時 -->
                                <div class="table_default_empaty" style="display: none;">
                                    <div class="message-text">沒有留言紀錄</div>
                                </div>

                                <!-- 單筆商品留言 -->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-alert-nofill icon-back icon-back-red"></i>未讀取</span>
                                        <div>
                                            <span class="eng-num date-time">2020/05/28<time>01:28</time></span>
                                        </div>
                                    </div>

                                    <!-- 商品留言內容群組 -->
                                    <div class="flexTable qareview-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>
                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品編號 -->
                                                    <div class="productInfo-info-orderNum">
                                                        <span class="productInfo-info-orderNum-title">商品編號</span>
                                                        <span class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                    </div>
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 買家資訊內容群組 -->
                                        <div class="flexTable productBar-buyerInfoBox">
                                            <div class="flexTable buyerInfoBox-buyerInfo">
                                                <img class="buyInfo-avatar" src="img/brand/brand_01.jpg" alt="buyer" style="background-image: url('img/buyer_avator_default.svg');">
                                                <span class="buyInfo-name">so*****************om</span>
                                            </div>
                                            <span class="buyerInfoBox-message">買二個可以算便宜一點嗎？</span>
                                        </div>
                                    </div>
                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar-flex-end">
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary" href="qareview-product-reply.php">回覆留言</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆商品留言 結束 -->


                                <!-- 單筆商品留言 -->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-alert-nofill icon-back icon-back-red"></i>待回覆</span>
                                        <div>
                                            <span class="eng-num date-time">2020/05/28<time>01:28</time></span>
                                        </div>
                                    </div>

                                    <!-- 商品留言內容群組 -->
                                    <div class="flexTable qareview-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>
                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">

                                                    <!-- 商品編號 -->
                                                    <div class="productInfo-info-orderNum">
                                                        <span class="productInfo-info-orderNum-title">商品編號</span>
                                                        <span class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                    </div>
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 買家資訊內容群組 -->
                                        <div class="flexTable productBar-buyerInfoBox">
                                            <div class="flexTable buyerInfoBox-buyerInfo">
                                                <img class="buyInfo-avatar" src="img/brand/brand_01.jpg" alt="buyer" style="background-image: url('img/buyer_avator_default.svg');">
                                                <span class="buyInfo-name">so*****************om</span>
                                            </div>
                                            <span class="buyerInfoBox-message">請問這個包有多大呢？</span>
                                        </div>
                                    </div>
                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar-flex-end">
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary" href="qareview-product-reply.php">回覆留言</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆商品留言 結束 -->



                                <!-- 單筆商品留言 -->
                                <div class="listBox-singlelist">
                                    <!-- 訂單狀態群組 -->
                                    <div class="flexTable singlelist-statusBar">
                                        <span class="statusBar-status"><i class="sea-btn-icon icon-checked icon-back icon-back-green"></i>已回覆</span>
                                        <div>
                                            <span class="eng-num date-time">2020/05/28<time>01:28</time></span>
                                        </div>
                                    </div>

                                    <!-- 商品留言內容群組 -->
                                    <div class="flexTable qareview-productBar">
                                        <!-- 商品圖文 -->
                                        <div class="flexTable productBar-product">
                                            <!-- 商品資訊群組（圖＋文） -->
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <a href="#"><img class="img-fluid" src=" img/pro/pro_06.jpg" alt="Product-Picture"></a>
                                                </div>
                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">

                                                    <!-- 商品編號 -->
                                                    <div class="productInfo-info-orderNum">
                                                        <span class="productInfo-info-orderNum-title">商品編號</span>
                                                        <span class="productInfo-info-orderNum-text eng-num">9041800006091</span>
                                                    </div>
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">
                                                            <a href="#">Winter short tube Chelsea boots Martin work boots</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 買家資訊內容群組 -->
                                        <div class="flexTable productBar-buyerInfoBox">
                                            <div class="flexTable buyerInfoBox-buyerInfo">
                                                <img class="buyInfo-avatar" src="img/brand/brand_01.jpg" alt="buyer" style="background-image: url('img/buyer_avator_default.svg');">
                                                <span class="buyInfo-name">so*****************om</span>
                                            </div>
                                            <span class="buyerInfoBox-message">請問有其他顏色可以選擇嗎？ 還有其他角度的照片嗎？ 想知道內裡有幾個夾層，謝謝！</span>
                                        </div>
                                    </div>
                                    <!-- 訂單操作按鈕群組 -->
                                    <div class="flexTable orderlist-actionBar-flex-end">
                                        <!-- 操作按鈕欄 -->
                                        <div class="actionBar">
                                            <a class="sea-ui btn-xs btn-primary" href="qareview-product-reply.php">留言</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 單筆商品留言 結束 -->
                            </div>
                            <!-- 所有訂單容器 結束 -->


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

    <!-- PChomeSEA lightBox -->
    <section id="sea-lightbox">
        <div class="sea-lightBox_backGround"></div>
        <div class="sea-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->
    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->
    <!-- 主選單預設開啟（編號） -->
    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(7)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>
    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>
</body>

</html>