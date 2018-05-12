<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <link href="css/base.css" type="text/css" rel="stylesheet" />
    <link href="css/common.css" type="text/css" rel="stylesheet" />
    <link href="css/homepage.css" type="text/css" rel="stylesheet" />
    <title>辰象科技</title>
</head>
<body>
<!--头部-->
<div class="header">
    <div class="header-main">
        <div class="menu">
            <ul class="menuUl">
                <li class="menuItem"><a href="/">首页</a></li>
                <li class="menuItem"><a href="/serverscope">业务范围</a></li>
                <li class="menuItem"><a href="/advantage">我们优势</a></li>
                {{--<li class="menuItem"><a href="/negotiate/6K+36YCJ5oup">业务洽谈</a></li>--}}
                <li class="menuItem"><a href="/negotiate">业务洽谈</a></li>
                <li class="menuItem"><a href="/support">支持</a></li>
                <li style="display: none;" class="menuItem"><a href="baidu.com">案例</a></li>
            </ul>
        </div>
        <div class="header-main-icon">
            <!-- Menu list for header -->
            <ul>
                <li><span>页面导航</span><img onclick="document.body.scrollTop = document.documentElement.scrollTop = 0" src="img/icon-menu-1.png" /></li>
            </ul>
        </div>
    </div>
</div>
<div class="banner">
    <div class="banner-container">
        <img src="img/banner-1.png" />
    </div>
    <!--Logo及宣传语-->
    <div class="censngShow">
        <!--logo-->
        <div class="censngShow-logo">
            <a href="/serverscope">
                <img src="img/site.censng.com-logo.png" />
            </a>
        </div>
        <!--标语-->
        <div class="censngShow-words">辰象建站，您较好的选择</div>
    </div>
</div>

{{--<div style="--}}
{{--width: 100%;--}}
{{--background: #2e2e2e;--}}
{{--text-align: center;--}}
{{--min-height: 600px;--}}
{{--position: relative;--}}
{{--">--}}
    {{--内容区--}}
    {{--<div style="--}}
    {{--width: 80%;--}}
    {{--margin: 0 auto;--}}
        {{--">--}}
        {{--圆--}}
        {{--<div style="--}}
    {{--background: #f0f0f0;--}}
    {{--border-radius: 100%;--}}
    {{--text-align: center;--}}
    {{--width: 240px;--}}
    {{--height: 240px;--}}
    {{--position: absolute;--}}
    {{--top: 100px;--}}
    {{--box-shadow: inset 0 0 36px #1d1d1d;--}}
{{--">--}}
            {{--园内部--}}
            {{--<div style="--}}
            {{--display: table-cell;--}}
            {{--vertical-align: middle;--}}
            {{--height: 240px;--}}
            {{--width: 240px;--}}
            {{--color: #545454;--}}
{{--">--}}
                {{----}}
                {{--<span style="font-size: 20px;font-weight:bold;display: inline-block;width: 200px;margin-bottom: 20px;line-height: 1.5em">PRODUCTS AND SERVICES</span>--}}
                {{--<br>--}}
                {{--<span style="padding-bottom: 12px;border-bottom:3px solid orange;font-size: 20px;margin-top: 20px;font-weight: bold">产品与服务</span>--}}
                {{----}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--<img style="--}}
{{--width: 1000px;--}}
{{--" src="/img/1024.jpg" />--}}

{{--</div>--}}

{{--业务核心场景--}}
<div class="serverScene">
    {{--标题--}}
    <div class="serverSceneTitle">
        <div class="lang_en">Server Code Scene</div>
        <div class="t">业务核心场景</div>
        <div class="a">辰象建站为各行业，客户的各方面，提供专业级“互联网+”方案，由内而外增加企业竞争力</div>
    </div>
    {{--场景列表--}}
    <div class="serverSceneList">
        {{--品牌营销--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">品牌营销</div>
                    <div class="i-c-value">
                        软硬兼顾（企业官网等），彰显品牌形象，提升品牌形象，打造品牌竞争力
                    </div>
                </div>
            </div>
        </div>
        {{--线上线下--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">线上线下</div>
                    <div class="i-c-value">
                        线上线下业务情景双管齐下，竞争力全面发展
                    </div>
                </div>
            </div>
        </div>
        {{--电商方案--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">电商方案</div>
                    <div class="i-c-value">
                        全方位打造电商营销环境，使您的用户消费更简单愉快
                    </div>
                </div>
            </div>
        </div>
        {{--营销工具--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">营销工具</div>
                    <div class="i-c-value">
                        不仅于CRM（客户关系管理系统），量身打造，使您营销过程中更清晰快捷
                    </div>
                </div>
            </div>
        </div>
        {{--多店系统--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">多店系统</div>
                    <div class="i-c-value">
                        多店联合，综合管理，让您更方便去合理配置资源
                    </div>
                </div>
            </div>
        </div>
        {{--智慧门店--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">智慧门店</div>
                    <div class="i-c-value">
                        互联网加，更准确来讲，是加互联网！为您增加核心竞争力
                    </div>
                </div>
            </div>
        </div>
        {{--内部管理--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">内部管理</div>
                    <div class="i-c-value">
                        OA（办公自动化），不止于此，量身打造，让你的公司运作更有效率
                    </div>
                </div>
            </div>
        </div>
        {{--新时代--}}
        <div class="item">
            <div class="item-box">
                <img src="/img/1025.jpg" />
            </div>
            <div class="item-bg">

            </div>
            <div class="item-content-div">
                <div class="item-content">
                    <div class="i-c-title">新时代</div>
                    <div class="i-c-value">
                        这是一个大时代，一个与互联网接洽的大时代，我们为您提供核心方案，让互联网加与您接洽！
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .serverScene{
        margin-top: 82px!important;
        text-align: center;
        font-size: 22px;
        /*font-weight: bold;*/
        color: #333;
        min-height: 100px;
        margin-bottom: 100px;
    }
    .serverScene .lang_en{
        font-size: 22px;
        margin-bottom: 16px;
        letter-spacing: 3px;
        color: darkgray;
        display: inline-block;
        border-bottom: 2px solid #e5e5e5;
        padding-bottom: 12px;
        text-indent: 3px;
    }
    .serverScene .t{
        letter-spacing: 3px;
        text-indent: 3px;
    }
    .serverScene .a{
        font-size: 16px;
        letter-spacing: 3px;
        text-indent: 3px;
        margin-top: 64px;
        margin-bottom: 26px;
    }
</style>
<style>
    .serverSceneList{
        width: 90%;
        margin: 0 auto;
    }
    .serverSceneList .item{
        display: inline-block;
        vertical-align: middle;
        text-align: center;
        width: 260px;
        height: 150px;
        position: relative;
        margin: 0 16px;
        margin-top: 24px;
        cursor: pointer;
    }
    .serverSceneList .item-box{
        display: table-cell;
        vertical-align: middle;
        width: 260px;
        height: 150px;
        background: #fff;
    }
    .serverSceneList .item-box img{
        max-height: 100%;
        max-width: 100%;
    }
    .serverSceneList .item-bg{
        position: absolute;
        width: 260px;
        height: 150px;
        background: rgba(0,0,0,0.66);
        top:0;
        left:0;
    }
    .item-content-div{
        display: table;
        position: absolute;
        left: 0;
        top: 0;
    }
    .item-content{
        height: 150px;
        width: 260px;
        display: table-cell;
        vertical-align: middle;
        color: #fff;
    }
    .i-t-title{

    }
    .i-c-value{
        font-size: 14px;
        /*display: inline-block;*/
        margin-top: 20px;
        width: 66%;
        line-height: 1.5em;
        display: none;
    }
    .serverSceneList .item:hover .i-c-value{
        display: inline-block;
    }
    .serverSceneList .item:hover .item-bg{

    }
    .serverSceneList .item:hover .item-content{
        background: rgba(255,255,255,0.26);
    }
</style>


{{--业务范围--}}
<div class="serverType_title">
    <div class="lang_en">Server Scope</div>
    <div class="t">业务范围</div>
</div>
<div class="serverType">
    <!--服务类型-->
    <a href="/serverscope">
        <div onclick="pageObj.scopeSwitch('web')" class="serverTypeClass serverTypeClassWeb">
            <div class="serverTypeClassLogo">
                <img src="img/3.jpg" />
            </div>
            <div class="serverTypeTitle">网站开发</div>
        </div>
    </a>
    <a href="/serverscope">
        <div onclick="pageObj.scopeSwitch('wechat')" class="serverTypeClass serverTypeClassWechat">
            <div class="serverTypeClassLogo">
                <img src="/img/4.jpg" />
            </div>
            <div class="serverTypeTitle">微信开发</div>
        </div>
    </a>
    <a href="/serverscope">
        <div onclick="pageObj.scopeSwitch('app')" class="serverTypeClass serverTypeClassApp">
            <div class="serverTypeClassLogo">
                <img src="/img/6.jpg" />
            </div>
            <div class="serverTypeTitle">APP开发</div>
        </div>
    </a>
    <a href="/serverscope">
        <div onclick="pageObj.scopeSwitch('zonghe')" class="serverTypeClass serverTypeClassZonghe">
            <div class="serverTypeClassLogo">
                <img src="/img/7.bmp" />
            </div>
            <div class="serverTypeTitle">综合开发</div>
        </div>
    </a>
    <a href="/serverscope">
        <div onclick="pageObj.scopeSwitch('cehua')" class="serverTypeClass serverTypeClassCehua">
            <div class="serverTypeClassLogo">
                <img src="/img/8.jpg" />
            </div>
            <div class="serverTypeTitle">企业策划</div>
        </div>
    </a>
</div>
<style>
    .serverType_title{
        margin-top: 82px!important;
        text-align: center;
        font-size: 22px;
        /*font-weight: bold;*/
        color: #333;
    }
    .serverType_title .lang_en{
        font-size: 22px;
        margin-bottom: 16px;
        letter-spacing: 3px;
        color: darkgray;
        display: inline-block;
        border-bottom: 2px solid #e5e5e5;
        padding-bottom: 12px;
        text-indent: 3px;
    }
    .serverType_title .t{
        letter-spacing: 3px;
        text-indent: 3px;
    }
    .serverType{
        margin-top: 36px;
        text-align: center;
        margin-bottom: 105px;
    }
    .serverType a{
        text-decoration: none;
        color: #333333;
    }
    .serverTypeClass:hover{
        box-shadow: 0 0 20px #ccc!important;
    }
    .serverTypeClass:first-child{
        /*box-shadow: 0 0 20px #ccc;*/
    }
    .serverTypeClass{
        display: inline-block;
        width: 120px;
        height: 120px;
        /*border-radius: 100px;*/
        text-align: center;
        margin: 0 28px;
        cursor: pointer;
        padding: 58px 10px;
        padding-bottom: 100px;
        margin-bottom: 16px;
    }
    .serverTypeClassLogo{
        display: inline-block;
        width: 120px;
        height: 120px;
        vertical-align: middle;
        border-radius: 100px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 10px #e5e5e5;
    }
    .serverTypeTitle{
        margin-top: 24px;
        font-size: 18px;
        letter-spacing: 2px;
        font-weight: bold;
    }
    .serverTypeClassLogo img{
        width: 100%;
    }

</style>
<!--尾部-->
<div class="footer">
    <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
    <p>简称【辰象科技】 备案号：陕ICP备18006045号-1</p>
</div>
<style>
    .header-main,.show_site-main,.service_scope-main,.contact-notice,.contact-main{
        width: 100%!important;
    }
</style>

</body>
</html>