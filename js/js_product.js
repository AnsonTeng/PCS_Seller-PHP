var selectNum = 0;

$(document).ready(function () {
    // 商品管理－商品被選取
    // bindBatchEditBar();

    $(".sea-item-card-link .delete-btn").on("click", function (e) {
        e.stopPropagation();
    });

    // －－－－－以下是燈箱偵聽－－－－－－－－－－－－－－

    // 一鍵上架
    $(".sellAllBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-sellAll").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 上架所選商品
    $(".onTheMarketBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-onTheMarket").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 下架所選商品
    $(".takenOffStoreBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-takenOffStore").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 移除所選商品
    $(".removeProductBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-removeProduct").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 待上架商品上架確認
    $(".readyOnTheMarketBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-readyOnTheMarket").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 商品管理－大量編輯－選擇商品類別
    $(".pexhlistBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-pexhlist").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 商品管理－大量編輯－編輯商品名稱
    $(".batchedit-editNameBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-batchedit-editName").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 商品管理－大量編輯－編輯商品名稱
    $(".batchedit-applyAllBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-batchedit-applyAll").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 商品管理－大量編輯－編輯商品規格與數量
    $(".batchedit-editspecstockBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-editspenstock").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 規格填寫範例
    $(".specsampleBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-specsample").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 設定商品保固時間
    $(".warrantytimeBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-warrantytime").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 賣家指定運費
    $(".editshippingBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-editShipping").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 大量新增商品說明
    $(".xlserrorBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-xlserror").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 大量新增商品
    $(".xlsstepBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-xlsstep").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 關於 國際商品統一分類代碼 (HS Code)
    $(".aboutHScodeBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-aboutHScode").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 關於 包裹重量 說明
    $(".parcelWeightBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-parcelWeight").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });

    // 關於 包裹材積 說明
    $(".parcelVolumeBtn").on("click", function () {
        $("#sea-lightbox")
            .children(".sea-lightBox_inner")
            .children("div")
            .hide();
        // 要顯示的燈箱ＩＤ名稱
        $("#sea-lightbox-parcelVolume").show();
        $("#sea-lightbox").toggle();
        // 鎖住背景物件滑動函式
        lockBody();
        return false;
    });
});

$(document).ready(function () {
    var check = $("#singleVaritation").prop("checked");
    if (check) {
        $(".single").addClass("active");
    }

    var checkMulti = $("#multipleVaritation").prop("checked");
    if (checkMulti) {
        $(".multiple").addClass("active");
    }

    //click on yes
    $("#singleVaritation").on("click", function () {
        check = $(this).prop("checked");
        $(".multiple").removeClass("active");
        $(".single").addClass("active");
    });
    //click on No
    $("#multipleVaritation").on("click", function () {
        check = $(this).prop("checked");
        $(".single").removeClass("active");
        $(".multiple").addClass("active");
        console.log(check);
    });
});

$(function () {
    var check = $("#switch-checkbox-warranty").prop("checked");
    if (check) {
        $(".warrantytime").show();
    }

    $("#switch-checkbox-warranty").click(function () {
        $(".warrantytime").slideToggle(this.checked);
    });
});

//大量上傳
var $fileInput = $(".file-input");
var $droparea = $(".xsl-file-drop-area");

// highlight drag area
$fileInput.on("dragenter focus click", function () {
    $droparea.addClass("is-active");
});

// back to normal state
$fileInput.on("dragleave blur drop", function () {
    $droparea.removeClass("is-active");
});

// change inner text
$fileInput.on("change", function () {
    var filesCount = $(this)[0].files.length;
    var $textContainer = $(this).prev();

    if (filesCount === 1) {
        // if single file is selected, show file name
        var fileName = $(this)
            .val()
            .split("\\")
            .pop();
        $textContainer.text(fileName);
    } else {
        // otherwise show number of files
        $textContainer.text(filesCount + " files selected");
    }
});


// 商品列表－操作欄（點擊商品後顯示操作欄）
// function bindBatchEditBar() {
//     $(".selectBtn").unbind("click");
//     $(".selectBtn").on("click", function () {
//         if ($(this).hasClass("selectBtn-selected")) {
//             $(this).removeClass("selectBtn-selected");
//         } else {
//             $(this).addClass("selectBtn-selected");
//         }

//         if ($("input[name=productId]:checked").length > 0) {
//             $(".seller-action-bar-fixed").removeClass("seller-action-bar-fixed-hidden");
//         } else {
//             $(".seller-action-bar-fixed").addClass("seller-action-bar-fixed-hidden");
//         }
//         // console.log("selectNum = " + selectNum);
//     });
// }