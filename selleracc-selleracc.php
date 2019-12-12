<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
        content="target-densitydpi=device-dpi, width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description"
        content="PChome Online Inc. เป็นกลุ่มบริษัทอีคอมเมิร์ซที่ใหญ่ที่สุดในไต้หวัน ขณะนี้เราได้เปิดให้บริการในประเทศไทยฟรีสำหรับทั้งผู้ขายและผู้ซื้อ คุณอยากจะขายหรืออยากจะซื้อของอะไรก็ได้ทั้งนั้นที่ PChome Thai ไม่ว่าจะเครื่องสำอาง, เสื้อผ้าแฟชั่น, เครื่องใช้ไฟฟ้า, หนังสือ, ของเล่น และอื่นๆ อีกมากมาย">
    <meta property="og:title" content="ออนไลน์ช้อปปิ้ง ที่ทุกสิ่งเป็นเรื่องแสนง่ายและสนุก" />
    <meta property="og:description"
        content="หาได้ทุกอย่างที่ต้องการที่ พีซีโฮมไทย - เครื่องสำอาง,เสื้อผ้าแฟชั่น, อุปกรณ์ไฟฟ้า, หนังสือ, ของเล่น และอื่นอีกมากมาย" />
    <meta property="og:image" content="http://cimg.pchome.co.th/fb/PchomeShop.jpg" />
    <meta property="og:url" content="http://www.pchome.co.th" />
    <meta property="og:site_name" content="PChome SEA" />
    <!-- favicon.ico-->
    <link rel="shortcut icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#00afeb">
    <meta name="msapplication-TileColor" content="#00afeb">
    <meta name="theme-color" content="#00afeb">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- PAGE -->
    <link rel="stylesheet" type="text/css" href="css/selleracc.css">
    <!-- Icon Font -->
    <link rel="stylesheet" type="text/css" href="css/fonts/pct-icon.css">
    <!-- BS grid -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <title>PChome SEA | 款項提領</title>
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
    })(window, document, 'script', 'dataLayer', 'GTM-52F2P7M');
    </script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52F2P7M" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- 說明FOR RD: 填寫資料正確送出 請跑這一個區塊的LOADING-->
    <div class="pct-ui loading-overlay-main" style="display: none;">
        <div class="loading-circle-main">
            <div class="circle-loader">
                <div class="checkmark draw"></div>
            </div>
        </div>
    </div>
    <section id="pct-main">
        <!-- PChome Thai Header -->
        <?php include("assets/header.php"); ?>
        <!-- PChome Thai Header end-->
        <!-- PChome Thai Menu_mobile -->
        <?php include("assets/menu-mobile.php"); ?>
        <!-- PChome Thai Menu_mobile end-->
        <!-- PChome Thai Account Header -->
        <!--說明For RD：手機版不出現-->
        <div class="hidden-sm-down">
            <?php include("assets/account-header.php"); ?>
        </div>
        <!-- PChome Thai Account Header end-->
        <!-- 內容寬度 1200 區塊 -->
        <div class="container pct-gutters container-min-height">
            <div class="section-outer">
                <div class="row">
                    <div class="col-md-3">
                        <!-- PChome Thai Menu_pc -->
                        <?php include("assets/menu-pc.php"); ?>
                        <!-- PChome Thai Menu_pc end-->
                    </div>
                    <div class="col-md-9">
                        <section id="pct-section-content">
                            <!-- 麵包屑 -->
                            <div class="pct-ui breadcrumb-back">
                                <span class="pct-icon icon-payment"></span>
                                <ul>
                                    <li><a href="index.php">首頁</a></li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>PChome 代收款項</li>
                                    <li class="pct-icon icon-angle-right"></li>
                                    <li>款項查詢</li>
                                </ul>
                            </div>

                            <!-- PChome Thai Alert -->
                            <div class="msgbar">
                                <div class="alert">
                                    <span class="pct-icon icon-alert"></span>
                                    <span class="pct-icon icon-delete"
                                        onclick="this.parentElement.style.display='none';"></span>
                                    您尚未提供銀行帳號，請前往設定。
                                </div>
                            </div>
                            <!-- PChome Thai Alert end-->






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
                                                    <div class="subtitle"><span class="subtitle-text">貨款總金額</span><span
                                                            class="currency">TWD</span></div>
                                                    <div class="amount eng-num">179,843.87</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 運算符號 = -->
                                        <div class="items item-operations item-operations-equal">
                                            <i class="pct-icon icon-equal"></i>
                                        </div>
                                        <!-- 細項金額組合－左 -->
                                        <div class="items item-amountBox-left">
                                            <!-- 文字包 -->
                                            <div class="item-amountBox-text">
                                                <div class="subtitle"><span class="subtitle-text">
                                                        <!-- Ready for withdrawal amount -->可用貨款金額
                                                    </span></div>
                                                <div class="amount eng-num">21,897.42</div>
                                            </div>
                                        </div>
                                        <!-- 運算符號 +/- -->
                                        <div class="items item-operations item-operations-plus">
                                            <i class="pct-icon icon-plus"></i>
                                        </div>
                                        <!-- 細項金額組合－右 -->
                                        <div class="items item-amountBox-right">
                                            <!-- 文字包 -->
                                            <div class="item-amountBox-text">
                                                <div class="subtitle"><span class="subtitle-text">
                                                        <!-- In Progress -->待轉可用貨款金額</span></div>
                                                <div class="amount eng-num">157,946.45</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 操作按鈕 -->
                                    <!-- <div class="accountingItem"> -->
                                    <div class="item-btnBox">
                                        <!-- <a href="#" class="pct-ui btn btn-secondary btn-fluid withdrawalBtn">貨款結算 Withdrawal </a>-->
                                        <a href="#" class="pct-ui btn btn-secondary btn-fluid"
                                            onclick="window.location.href='selleracc-withdrawal.php' ">貨款結算</a>



                                        <!--說明For RD: 判斷是設定 "公司發票"" 還是 "個人發票"" -->
                                        <!-- 公司發票 -->
                                        <a class="setCompanyInvoiceBtn pct-ui btn-fluid">
                                            <li class="pct-btn-icon icon-receipt"></li>
                                            <!-- Invoice Settings -->發票設定
                                        </a>
                                        <!-- 個人發票 -->
                                        <a class="setPersonalInvoiceBtn pct-ui btn-fluid" style="display: none;">
                                            <li class="pct-icon icon-receipt"></li>發票設定
                                        </a>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>


                            <!-- 結算狀態說明 -->
                            <a class="pct-ui btn-sm settlementStatusBtn">
                                <span class="pct-btn-icon icon-information"></span>結算狀態說明
                            </a>

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
                                                    <!-- Amount -->金額 THB</th>
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
                                                    <span><i
                                                            class="pct-btn-icon icon-wait icon-back icon-back-orange"></i>買家代理人收到貨款</span>
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
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿45,699</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs accountStepBtn"
                                                        data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 2.轉可用貨款 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-checked icon-back icon-back-blue"></i>轉可用貨款</span>
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
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿45,699</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs accountStepCompleteBtn"
                                                        data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 3.準備結算 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-wait icon-back icon-back-orange"></i>準備結算</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/21</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-pct-panel-trigger"
                                                            data-panel="orderDetails" href="#"
                                                            onmousedown="javascript:getOrderDtl(9051900009430);">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿45,699</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs withdrawalStepBtn"
                                                        data-pttranid="8051900007184">結算明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- ４.繳交成功 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-checked icon-back icon-back-green"></i>繳交成功</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/23</span>
                                                </td>
                                                <td data-title="單據號碼">

                                                    <span class="eng-num"><a href="#"
                                                            class="payFeeBtn">PT2020051000002</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>繳交費用</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num negative">฿1,271.34</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num negative">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a target="_blank" class="pct-ui btn-xs"
                                                        href="downloadPdf/PT2020051000002">發票</a>
                                                    <a target="_blank" class="pct-ui btn-xs"
                                                        href="downloadPdf/PT2020051000002">收據</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 5.匯款處理中 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-wait icon-back icon-back-orange"></i>匯款處理中</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/24</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-pct-panel-trigger"
                                                            data-panel="orderDetails" href="#"
                                                            onmousedown="javascript:getOrderDtl(9051900009430);">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿45,699</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs withdrawalStepBtn"
                                                        data-pttranid="8051900007184">結算明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 6.撥款成功 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-checked icon-back icon-back-green"></i>撥款成功</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/26</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-pct-panel-trigger"
                                                            data-panel="orderDetails" href="#"
                                                            onmousedown="javascript:getOrderDtl(9051900009430);">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿1,271.34</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs withdrawalStepBtn"
                                                        data-pttranid="8051900007184">撥款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- ７.撥款失敗 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-alert-nofill icon-back icon-back-red"></i>撥款失敗</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/26</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num"><a class="js-pct-panel-trigger"
                                                            data-panel="orderDetails" href="#"
                                                            onmousedown="javascript:getOrderDtl(9051900009430);">9051900009430</a></span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>結算</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿1,271.34</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs withdrawalStepBtn"
                                                        data-pttranid="8051900007184">撥款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <!-- 8.已轉可結算 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-checked icon-back icon-back-blue"></i>已轉可結算</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/27</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>訂單</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿1,271.34</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$1,271.34</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">283,568.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs accountStepCompleteBtn"
                                                        data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>


                                        <!--  9.退款中 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-wait icon-back icon-back-orange"></i>退款中</span>
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
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿45,699</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs accountStepCompleteBtn"
                                                        data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>


                                        <!--  10.完成退款 -->
                                        <tbody>
                                            <tr class="normallist-item">
                                                <td data-title="狀態">
                                                    <span><i
                                                            class="pct-btn-icon icon-checked icon-back icon-back-green"></i>完成退款</span>
                                                </td>
                                                <td data-title="日期">
                                                    <span class="eng-num">2020/05/23</span>
                                                </td>
                                                <td data-title="單據號碼">
                                                    <span class="eng-num">70519001863</span>
                                                </td>
                                                <td data-title="交易類別">
                                                    <span>訂單</span>
                                                </td>
                                                <td data-title="金額 THB">
                                                    <span class="eng-num">฿45,699</span>
                                                </td>
                                                <td data-title="金額 TWD">
                                                    <span class="eng-num">$45,699</span>
                                                </td>
                                                <td data-title="結餘 TWD">
                                                    <span class="eng-num">959,153.87</span>
                                                </td>
                                                <td data-title="明細">
                                                    <a class="pct-ui btn-xs accountStepCompleteBtn"
                                                        data-pttranid="8051900007184">貨款明細</a>
                                                </td>
                                            </tr>
                                        </tbody>










                                    </table>
                                </div>
                                <!-- PC 版 列出所有頁碼 -->
                                <div class="pct-ui page-pagination">
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
                                                <span class="pct-icon icon-angle-right"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- 手機版 Load more-->
                                <div class="pct-btn-loadcontent hidden-xs-up">
                                    <a href="#" class="pct-ui btn btn-secondary btn-load">LOAD MORE</a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- 內容寬度 1200 區塊 end-->
        <!-- PChome Thai footer -->
        <?php include("assets/footer.php"); ?>
        <!-- PChome Thai footer end-->
    </section>

    <!-- PChome Thai Panel -->
    <?php include("assets/slide-panel/panel-global.php"); ?>
    <!-- PChome Thai Panel end-->

    <!-- PChome Thai lightBox -->
    <section id="pct-lightbox">
        <div class="pct-lightBox_backGround"></div>
        <div class="pct-lightBox_inner">
            <?php include("assets/lightbox/global.php"); ?>
            <!--頁面會出現的lightbox放這裡-->
            <?php include("assets/lightbox/orderlist/lightbox-orderlist.php"); ?>
            <?php include("assets/lightbox/selleracc/lightbox-selleracc.php"); ?>
        </div>
    </section>
    <!-- PChome Thai lightBox end-->

    <!-- PChome Thai JS -->
    <?php include("assets/js-include.php"); ?>
    <!-- PChome Thai JS end-->

    <!-- 滑動面板 -->
    <script type="text/javascript" src="js/plugin/slide-panel/slide-panel.js"></script>

    <!--代收款項 JS-->
    <script type="text/javascript" src="js/js_selleracc.js"></script>

    <!-- 選單預設開啟 -->
    <script>
    $(document).ready(function() {
        var menuItem = $('.sidebar-panel-wrap > ul > li:nth-child(3)');
        menuItem.find('ul').show();
        menuItem.addClass('active');
    });
    </script>
</body>

</html>