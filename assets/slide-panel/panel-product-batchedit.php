<!-- 滑動面板 -->

<!-- orderListDetail 訂單明細 -->
<div class="pct-panel pct-panel--from-right js-pct-panel-batchedit">
    <!-- 標題與關閉按鈕 -->
    <header class="pct-panel__header">
        <div class="pct-panel__header-title">大量編輯</div>
        <a href="#0" class="pct-panel__close js-pct-close"><i class="pct-icon icon-delete"></i></a>
    </header>


    <!-- 內容容器 -->
    <div class="pct-panel__container">
        <div class="pct-panel__content">
            <div class="pct-panel__content-addMarginBottom">

                <!-- 表格－大量編輯 -->
                <div class="tableBox tableBox-batchedit">
                    <!-- 表格（分類標題） -->
                    <div class="table__thead hidden-md-down">
                        <table>
                            <!-- colgroup -->
                            <colgroup>
                                <col class="table--w25">
                                <col class="table--w15">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w10">
                                <col class="table--w12">
                            </colgroup>
                            <!-- thead -->
                            <thead>
                                <tr>
                                    <th>名稱</th>
                                    <th>價格</th>
                                    <th>重量</th>
                                    <th>運費</th>
                                    <th>規格</th>
                                    <th>數量</th>
                                    <th>狀態</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <!-- 表格（單一商品＋大量編輯按鈕） -->
                    <div class="table__tbody md-break-table">
                        <table class="normal-table">
                            <colgroup>
                                <col class="table--w25">
                                <col class="table--w15">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w12">
                                <col class="table--w10">
                                <col class="table--w12">
                            </colgroup>


                            <!-- 說明FOR RD: 商品單一規格時，直接編輯商品數量-->
                            <tbody>
                                <!-- 商品編輯欄 -->
                                <tr class="categories">
                                    <!-- 分類欄 -->
                                    <!-- <td colspan="7" data-title="分類"> -->
                                    <td colspan="7" data-title="Category">
                                        <div class="tableData-header">
                                            <!-- <div class="table_flexBox table_flexBox-column table_flexBox-left categoriesGroup"> -->
                                            <div class="categoriesGroup">

                                                <div class="table_inlineBox">
                                                    <span class="categoriesTitle hidden-md-down">分類：</span>
                                                    <ul class="categoriesList">
                                                        <li>
                                                            <span>生鮮食品</span>
                                                        </li>
                                                        <li class="pct-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>爬蟲類</span>
                                                        </li>
                                                        <li class="pct-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>ชุดคิท เครื่องมือซ่อมแซมบ้าน</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="table_inlineBox categoriesGroup-action">
                                                    <div class="table_flexBox-column">

                                                        <div class="table_inlineBox">
                                                            <a class="pct-ui btn-xs btn pexhlistBtn"
                                                                style="flex-shrink:0;">
                                                                <li class="pct-icon icon-edit"></li>修改
                                                            </a>
                                                        </div>
                                                        <div class="table_inlineBox">
                                                            <a
                                                                class="pct-ui btn-xs btn-secondary batchedit-applyAllBtn">套用以下館別
                                                                <!-- มีหมวดหมู่ทั้งหมดดังต่อไปนี้ --></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <!-- <td data-title="名稱"> -->
                                    <td data-title="Name">
                                        <div class="tableDeta-box">
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <img class="img-fluid"
                                                        src="https://cf.shopee.tw/file/6577b8ee142362e1a43100fdd82d1619_tn"
                                                        alt="Product-Picture">
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">เปลัดขิก หลวงพ่อกลั่น
                                                            วัดอินทราวาส อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร เก่ามาก
                                                            สวย สมบูรณ์ หายากมาก<span>
                                                    </div>
                                                    <a class="pct-ui btn-xs btn batchedit-editNameBtn">
                                                        <li class="pct-icon icon-edit"></li>修改
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- <td data-title="價格"> -->
                                    <td data-title="Price">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="pct-ui form product-price-THbaht unit-before">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                    <!-- <td data-title="重量"> -->
                                    <td data-title="Weight">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="pct-ui form product-weight unit-after">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_inlineBox">
                                                <a class="pct-ui btn-xs btn btn-fluid btn-apply batchedit-applyAllBtn">以下套用
                                                    <!-- ใช้สิ่งต่อไปนี้ --></a>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="指定運費"> -->
                                    <td data-title="Freight">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="pct-ui form product-price-THbaht unit-before">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_inlineBox">
                                                <a class="pct-ui btn-xs btn btn-fluid btn-apply batchedit-applyAllBtn">以下套用
                                                    <!-- ใช้สิ่งต่อไปนี้ --></a>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="規格"> -->
                                    <td data-title="Specification" class="single">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="pct-ui form text-with-input">
                                                    <p>單一規格</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td data-title="數量"> -->
                                    <td data-title="Quantity">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">

                                                    <!-- <div class="pct-ui form-label form-sm-break"> -->
                                                    <!-- <label for="" class="required">數量</label> -->
                                                    <div class="pct-ui form ">
                                                        <input type="tel" placeholder="" value="0" class="stock-num">
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="狀態"> -->
                                    <td data-title="Status">
                                        <div class="tableDeta-box">
                                            <!-- <div class="content-block"> -->
                                            <!-- <div class="content-description"> -->

                                            <!-- <div class="pct-ui form-label form-sm-break"> -->
                                            <div class="radio-wrap">
                                                <div class="pct-ui form radio">
                                                    <input type="radio" id="1" name="radio-group">
                                                    <label for="1">
                                                        <!-- 上架 -->แสดงสินค้า</label>
                                                </div>
                                                <div class="pct-ui form radio">
                                                    <input type="radio" id="2" name="radio-group">
                                                    <label for="2">
                                                        <!-- 下架 -->เก็บสินค้า</label>
                                                </div>
                                            </div>
                                            <!-- </div>  -->

                                            <!-- </div> -->
                                            <!-- </div> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- 單筆商品＋大量編輯按鈕 End -->



                            <!-- 說明FOR RD: 商品多種規格時，編輯數量/規格 需點擊燈箱-->
                            <tbody>
                                <!-- 商品編輯欄 -->
                                <tr class="categories">
                                    <!-- 分類欄 -->
                                    <!-- <td colspan="7" data-title="分類"> -->
                                    <td colspan="7" data-title="Category">
                                        <div class="tableData-header">
                                            <div class="table_flexBox-column table_flexBox-left categoriesGroup">

                                                <div class="table_inlineBox">
                                                    <span class="categoriesTitle hidden-md-down">分類：</span>
                                                    <ul class="categoriesList">
                                                        <li>
                                                            <span>มือถือและอุปกรณ์สื่อสาร</span>
                                                        </li>
                                                        <li class="pct-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>สมาร์ตโฟนและโทรศัพท์มือถือ</span>
                                                        </li>
                                                        <li class="pct-icon icon-angle-right arrow"></li>
                                                        <li>
                                                            <span>อุปกรณ์แยกสายสำหรับธุรกิจ</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="table_inlineBox categoriesGroup-action">
                                                    <div class="table_flexBox-column">

                                                        <div class="table_inlineBox">
                                                            <a class="pct-ui btn-xs btn pexhlistBtn"
                                                                style="flex-shrink:0;">
                                                                <li class="pct-icon icon-edit"></li>修改
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <!-- <td data-title="名稱"> -->
                                    <td data-title="Name">
                                        <div class="tableDeta-box">
                                            <div class="productInfoGroup">
                                                <!-- 商品圖片 -->
                                                <div class="productInfo-img">
                                                    <img class="img-fluid"
                                                        src="https://cf.shopee.tw/file/66f156cc8015d87c0cb7db109cb772ab_tn"
                                                        alt="Product-Picture">
                                                </div>

                                                <!-- 商品資訊 -->
                                                <div class="productInfo-info">
                                                    <!-- 商品名稱 -->
                                                    <div class="productInfo-info-title">
                                                        <span class="productInfo-info-title-text">เปลัดขิก หลวงพ่อกลั่น
                                                            วัดอินทราวาส อ่างทอง ไม้ดำดง ยุคต้น 2.5นิ้ว รอยจาร เก่ามาก
                                                            สวย สมบูรณ์ หายากมาก<span>
                                                    </div>
                                                    <a class="pct-ui btn-xs btn batchedit-editNameBtn">
                                                        <li class="pct-icon icon-edit"></li>修改
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="價格"> -->
                                    <td data-title="Price">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="pct-ui form product-price-THbaht unit-before">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                    <!-- <td data-title="重量"> -->
                                    <td data-title="Weight">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="pct-ui form product-weight unit-after">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                    <!-- <td data-title="指定運費"> -->
                                    <td data-title="Freight">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <div class="pct-ui form product-price-THbaht unit-before">
                                                        <input type="tel" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td colspan="2" data-title="數量與規格">
                                        <div class="tableDeta-box">
                                            <div class="content-block">
                                                <div class="content-description">
                                                    <a href="" class="pct-ui btn-sm btn batchedit-editspecstockBtn">
                                                        <li class="pct-icon icon-edit"></li>修改規格與數量
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>



                                    <!-- <td data-title="狀態"> -->
                                    <td data-title="Status">
                                        <div class="tableDeta-box">
                                            <!-- <div class="content-block"> -->
                                            <!-- <div class="content-description"> -->

                                            <!-- <div class="pct-ui form-label form-sm-break"> -->
                                            <div class="radio-wrap">
                                                <div class="pct-ui form radio">
                                                    <input type="radio" id="3" name="radio-group-001" checked="">
                                                    <label for="3">
                                                        <!-- 上架 -->แสดงสินค้า</label>
                                                </div>
                                                <div class="pct-ui form radio">
                                                    <input type="radio" id="4" name="radio-group-001">
                                                    <label for="4">
                                                        <!-- 下架 -->เก็บสินค้า</label>
                                                </div>
                                            </div>
                                            <!-- </div>  -->

                                            <!-- </div> -->
                                            <!-- </div> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- 單筆商品 End -->




                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- 操作按鈕 -->
        <div class="pct-panel__content-actions">
            <a href="#" class="pct-ui btn btn-secondary js-pct-close">取消</a>
            <a href="#" class="pct-ui btn btn-secondary">確定</a>
        </div>

    </div> <!-- pct-panel__container -->
</div> <!-- pct-panel -->