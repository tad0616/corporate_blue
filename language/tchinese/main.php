<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $GLOBALS['xoopsConfig']['language'] . '/theme_common.php';

/**自訂設定之語系**/
define("TF_FOOTER_IMG", "頁尾底圖");
define("TF_FOOTER_IMG_DESC", "可自行上傳想要的底圖");
define("TF_FOOTER_COLOR", "頁尾文字顏色");
define("TF_FOOTER_COLOR_DESC", "頁尾內容的文字顏色");
define("TF_FOOTER_HEIGHT", "頁尾高度");
define("TF_FOOTER_HEIGHT_DESC", "可設定頁尾高度");
define("TF_FOOTER_BGCOLOR", "頁尾底色");
define("TF_FOOTER_BGCOLOR_DESC", "頁尾底部的顏色");
define("TF_FOOTER_PADDING", "頁尾文字內距");
define("TF_FOOTER_PADDING_DESC", "分別為：上 右 下 左");
define("TF_SHOW_VAR", "顯示佈景變數資訊");
define("TF_SHOW_VAR_DESC", "佈景開發時，會顯示所有 tad_themes 提供的控制變數及設定值");
define("TF_USE_SHADOW", "外框是否套用陰影");
define("TF_USE_SHADOW_DESC", "若選是，外框會出現陰影");
define("TF_FOOTER_STYLE", "頁尾內容樣式設定");
define("TF_FOOTER_STYLE_DESC", "可使用CSS語法控制頁尾內容的外觀");
define("TF_LOGO_BGCOLOR", "上方LOGO區的底色");
define("TF_LOGO_BGCOLOR_DESC", "上方LOGO區的底色");
define("TF_FONT_FAMILY", "主要字型設定");
define("TF_FONT_FAMILY_DEFAULT", "\"Helvetica Neue\",Helvetica,Arial,\"微軟正黑體\",sans-serif");
define("TF_FONT_FAMILY_DESC", "輸入字型名稱，有空白的部份需要用\"\"包起來。如：" . TF_FONT_FAMILY_DEFAULT);
define("TF_USE_SHADOW_LOGO", "陰影是否包含logo");
define("TF_USE_SHADOW_LOGO_DESC", "當logo在滑動圖文之上時，是否仍要加上陰影？");
define("TF_USE_CONTAINER", "外框是否套用 container");
define("TF_USE_CONTAINER_DESC", "僅BootStrap模式有效。若否則採用預設的 container-fluid（可視範圍較大）");
define("TF_FOOTER_BG_CSS", "頁尾底圖CSS設定");
define("TF_FOOTER_BG_CSS_DESC", "可利用此處設定各種背景CSS設定，例如重複方式、位置...等");
define('TF_LEFT_SPARATE', '左區域分隔線');
define('TF_LEFT_SPARATE_DESC', '左區域和主內容間是否加上分隔線');
define('TF_RIGHT_SPARATE', '右區域分隔線');
define('TF_RIGHT_SPARATE_DESC', '右區域和主內容間是否加上分隔線');
define('TF_SPARATE_STYLE', '左右區域分隔線的樣式');
define('TF_SPARATE_STYLE_DESC', '左右區域分隔線的樣式');
define('TF_MY_CODE', '欲加入頁尾的CSS或JS語法');
define('TF_MY_CODE_DESC', '可自行載入CSS或JS');
