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
    <link rel="stylesheet" type="text/css" href="css/selleracc.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/sea-seller-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/plugin/bootstrap-grid.css">
    <title>PChomeSEA | 款項提領</title>
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


                            <!-- 麵包屑 -->
                            <div class="sea-ui breadcrumb-back">
                                <span class="sea-seller-icon icon-payment"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>交易貨款</li>
                                    <li class="sea-seller-icon icon-angle-right"></li>
                                    <li>款項查詢</li>
                                </ul>
                            </div>

                            <!-- PChomeSEA Alert -->
                            <div class="msgbar">
                                <div class="alert">
                                    <span class="sea-seller-icon icon-alert"></span>
                                    <span class="sea-seller-icon icon-delete" onclick="this.parentElement.style.display='none';"></span>
                                    您尚未提供銀行帳號，請前往設定。
                                </div>
                            </div>
                            <!-- PChomeSEA Alert end-->


                            <!-- 區塊－金額統計 -->
                            <div class="section-outer section-accounting">
                                <!-- 提領帳戶 -->
                                <div class="accountingBox">
                                    <!-- 總金額 -->
                                    <div class="accountingItem">
                                        <!-- 總金額組合 -->
                                        <div class="items item-amountTotalBox">
                                            <div class="item-totalBox">
                                                <!-- 圖片包 -->
                                                <div class="item-amountBox-pic">
                                                    <img src="img/icon-selleracc-moneybox.svg">
                                                </div>
                                                <!-- 文字包 -->
                                                <div class="item-amountBox-text">
                                                    <div class="subtitle"><span class="subtitle-text">貨款總金額</span><span class="currency">NT$</span></div>
                                                    <div class="amount eng-num">179,843</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 運算符號 = -->
                                        <div class="items item-operations item-operations-equal">
                                            <i class="sea-seller-icon icon-equal"></i>
                                        </div>
                                        <!-- 細項金額組合－左 -->
                                        <div class="items item-amountBox-left">
                                            <!-- 文字包 -->
                                            <div class="item-amountBox-text">
                                                <div class="subtitle"><span class="subtitle-text">
                                                        <!-- Ready for withdrawal amount -->可用貨款金額
                                                    </span></div>
                                                <div class="amount eng-num">21,897</div>
                                            </div>
                                        </div>
                                        <!-- 運算符號 +/- -->
                                        <div class="items item-operations item-operations-plus">
                                            <i class="sea-seller-icon icon-plus"></i>
                                        </div>
                                        <!-- 細項金額組合－右 -->
                                        <div class="items item-amountBox-right">
                                            <!-- 文字包 -->
                                            <div class="item-amountBox-text">
                                                <div class="subtitle"><span class="subtitle-text">
                                                        <!-- In Progress -->待轉可用貨款金額</span></div>
                                                <div class="amount eng-num">157,946</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 操作按鈕 -->
                                    <!-- <div class="accountingItem"> -->
                                    <div class="item-btnBox">
                                        <!-- <a href="#" class="sea-ui btn btn-primary btn-fluid withdrawalBtn">貨款結算 Withdrawal </a>-->
                                        <a href="#" class="sea-ui btn btn-primary btn-fluid" onclick="window.location.href='selleracc-withdrawal.php' ">貨款結算</a>

                                        <!--說明For RD: 判斷是設定 "公司發票"" 還是 "個人發票"" -->
                                        <!-- 公司發票 -->
                                        <a class="setCompanyInvoiceBtn sea-ui btn-fluid"><span class="sea-btn-icon icon-receipt"></span><!-- Invoice Settings -->發票設定</a>
                                        <!-- 個人發票 -->
                                        <a class="setPersonalInvoiceBtn sea-ui btn-fluid" style="display: none;"><span class="sea-seller-icon icon-receipt"></span>發票設定</a>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>

                            <!-- 結算狀態說明 -->
                            <a class="sea-ui btn-sm settlementStatusBtn"><span class="sea-btn-icon icon-information"></span>結算狀態說明</a>

                            <!-- 表格－交易款項清單 -->
                            <div class="tableBox tableBox-selleracc-withdrawal">
                                <!-- 表格（分類標題）-->
                                <div class="table__thead hidden-lg-down">
                                    <table>
                                        <colgroup>
                                            <col class="table--w20">
                                            <col class="table--w10">
                                            <col class="table--w18">
                                            <col class="table--w10">
                                            <col class="table--w10">
                                            <col class="table--w10">
                                            <col class="table--w10">
                                            <col class="table--w12">
                                        </colgroup>
                                        <thead class="normallist-head">
                                            <tr>
                                                <th>
                                                    <!-- Status -->結算狀態</th>
                                                <th>
                                                    <!-- Date -->日期</th>
                                                <th>
                                                    <!-- Statement Numbe -->單據號碼</th>
                                                <th>
                                                    <!-- Transaction Type -->交易類別</th>
                                                <th>
                                                    <!-- Country -->訂單來源</th>
                                                <th>
                                                    <!-- Amount -->金額 TWD</th>
                                                <th>
                                                    <!-- Account Balance -->結餘 TWD</th>
                                                <th>
                                                    <!-- Details -->明細</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- 表格（單一筆交易費用） -->
                                <div class="table__tbody lg-break-table">

                                    <!--說明FOR RD: 沒有任何交易紀錄 -->
                                    <div class="table_default_empaty" style="display: none;">
                                        <div class="message-text">沒有交易紀錄</div>
                                    </div>

                                    <table class="normal-table">
                                        <colgroup>
                                            <col class="table--w20">
                                            <col class="table--w10">
                                            <col class="table--w18">
                                            <col class="table--w10">
                                            <col class="table--w10">
                                            <col class="table--w10">
                                            <col class="table--w10">
                                            <col class="table--w12">
                                        </colgroup>


                                        <!-- 1.買家代理人收到貨款 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-wait icon-back icon-back-orange"></i>買家代理人收到貨款</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/10</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>訂單</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs accountStepBtn" data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 2.轉可用貨款 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>轉可用貨款</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/20</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>訂單</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs accountStepCompleteBtn" data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 3.準備結算 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-wait icon-back icon-back-orange"></i>準備結算</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/21</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-sea-panel-trigger" data-panel="orderDetails" href="#">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs withdrawalStepBtn" data-pttranid="8051900007184">結算明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- ４.繳交成功 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-checked icon-back icon-back-green"></i>繳交成功</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/23</span>
                                                </td>
                                                <td data-title="單據號碼">

                                                    <span class="eng-num"><a href="#" class="payFeeBtn">PT2020051000002</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>繳交費用</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num negative">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a target="_blank" class="sea-ui btn-xs" href="downloadPdf/PT2020051000002">發票明細</a>
                                                    <a target="_blank" class="sea-ui btn-xs" href="downloadPdf/PT2020051000002">收據明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 5.匯款處理中 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-wait icon-back icon-back-orange"></i>匯款處理中</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/24</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-sea-panel-trigger" data-panel="orderDetails" href="#">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs withdrawalStepBtn" data-pttranid="8051900007184">結算明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 6.撥款成功 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-checked icon-back icon-back-green"></i>撥款成功</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/26</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-sea-panel-trigger" data-panel="orderDetails" href="#">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs withdrawalStepBtn" data-pttranid="8051900007184">撥款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- ７.撥款失敗 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-alert-nofill icon-back icon-back-red"></i>撥款失敗</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/26</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-sea-panel-trigger" data-panel="orderDetails" href="#">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs withdrawalStepBtn" data-pttranid="8051900007184">撥款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 8.已轉可結算 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-checked icon-back icon-back-blue"></i>已轉可結算</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/27</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算回沖</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">

                                                </td>
                                            </tr>
                                        </tbody>


                                        <!--  9.退款中 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-wait icon-back icon-back-orange"></i>退款中</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/20</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>退款</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs accountStepCompleteBtn" data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>


                                        <!--  10.完成退款 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i class="sea-btn-icon icon-checked icon-back icon-back-green"></i>完成退款</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/23</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>退款</span>
                                                </td>
                                                <td data-title="訂單來源">
                                                    <span class="eng-num">SG</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="sea-ui btn-xs accountStepCompleteBtn" data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
                                <div class="sea-btn-loadcontent hidden-xs-up">
                                    <a href="#" class="sea-ui btn btn-primary btn-load">LOAD MORE</a>
                                </div>
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
            <?php include("assets/lightbox/selleracc/lightbox-selleracc.php"); ?>
        </div>
    </section>
    <!-- PChomeSEA lightBox end-->

    <!-- PChomeSEA JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChomeSEA JS end-->

    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>

    <!--交易貨款 JS-->
    <script type="text/javascript" src="js/js_selleracc.js"></script>

    <!-- 選單預設開啟 -->
    <script>
        $(document).ready(function() {
            var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(4)');
            menuItem.find('ul').show();
            menuItem.addClass('active');
        });
    </script>
</body>

</html>