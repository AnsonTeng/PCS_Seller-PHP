<!-- 全站共用 -->
<script type="text/javascript" src="js/public.js"></script>

<!--jQuery-->
<script type="text/javascript" src="js/plugin/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="js/plugin/jquery/jquery.easing.1.3.js"></script>

<!--選單 Mobile-->
<script type="text/javascript" src="js/js_element_menu-mobile.js"></script>

<!-- Header -->
<script type="text/javascript" src="js/js_element_header.js"></script>

<!-- 元件 -->
<script type="text/javascript" src="js/components.js"></script>


<script>
    //滑動苗點
    $('a.scroll-link').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function() {
            window.location.hash = target;
        });
    });


    // 初始化
    $(document).ready(function() {

        // 檢查使用者裝置
        checkDevice();

        // 檢查螢幕寬度
        checkzScreenWidth();

        // 螢幕尺寸變更偵聽函式
        $(window).resize(function() {
            checkzScreenWidth();
        });


        // 通知訊息燈箱
        $('.notificationListBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-notification').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody()
            return false;
        });

        // 提領設定
        $('.withdrawsettingBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-withdrawsetting').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody()
            return false;
        });

        // 編輯頭像
        $('.avatareditBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-avataredit').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody()
            return false;
        });


        // 聯絡我們燈箱
        $('.contactUsBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-contactus').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody()
            return false;
        });

        // 商品頁截圖
        $('.productscreenshotBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-productscreenshot').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 身分驗證-輸入密碼
        $('.selleridveriBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-idverify').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });


        // 身分驗證-SMS OTP
        $('.telveriBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-sendtelverify').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 燈箱－本次付款資料
        $('.paymentdoneBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-paymentdone').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 燈箱－出貨明細
        $('.dispatchdetailBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-dispatchdetail').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 燈箱－出貨包裹運送狀態
        $('.trackingLogBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-trackingLog').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 燈箱－退款明細
        $('.refunddetailBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-refunddetail').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 燈箱－提領設定--舊會員 重送認證
        $('.VerifyagainBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-verify-again').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody();
            return false;
        });

        // 選擇驗證方式
        $('.chooseveriBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-chooseverify').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody()
            return false;
        });

        // 帳號設定
        $('.accountSettingsBtn').on('click', function() {
            $('#sea-lightbox').children('.sea-lightBox_inner').children("div").hide();
            // 要顯示的燈箱ＩＤ名稱
            $('#sea-lightbox-accountSettings').show();
            $('#sea-lightbox').toggle();
            // 鎖住背景物件滑動函式
            lockBody()
            return false;
        });
    });


    //左側選單
    $(document).ready(function() {
        var menu = $('.sidebar-panel-wrap > ul');
        // menu.find('.hassub > ul').hide();

        menu.on('click', function(event) {
            event.preventDefault();
            var targetParent = $(event.target).parent();
            if (targetParent.hasClass('hassub')) {
                targetParent.toggleClass('active');
                targetParent.children('ul').slideToggle();
            }
        })
    });
</script>