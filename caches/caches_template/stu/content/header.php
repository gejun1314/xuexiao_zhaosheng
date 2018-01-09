<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><head>
    <meta charset="utf-8">
    <title>山东交通技师学院招生网</title>
    <link href="<?php echo CSS_PATH;?>stucss/style.css" rel="stylesheet" type="text/css" />
    <!--<link href="<?php echo CSS_PATH;?>stucss/spring.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="<?php echo CSS_PATH;?>stucss/summer.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="<?php echo CSS_PATH;?>stucss/autumn.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="<?php echo CSS_PATH;?>stucss/winter.css" rel="stylesheet" type="text/css" />-->
    <script src="<?php echo JS_PATH;?>stujs/js.js" type="text/javascript"></script>
    <script type="text/javascript">
        function aa(){
            var myDate = new Date();
            var yue=myDate.getMonth();
            var yue1=yue+1;
            var link
            //3-5月为春天调用春天的CSS
            if(yue1>=3&&yue1<=5){
                link = document.createElement("link");
                link.rel = "stylesheet";
                link.type = "text/css";
                link.href = "<?php echo CSS_PATH;?>stucss/spring.css";
                document.getElementsByTagName("head")[0].appendChild(link);
            }
            //6-8月为夏天调用夏天的CSS
            else if(yue1>=6&&yue1<=8){
                link = document.createElement("link");
                link.rel = "stylesheet";
                link.type = "text/css";
                link.href = "<?php echo CSS_PATH;?>stucss/summer.css";
                document.getElementsByTagName("head")[0].appendChild(link);
            }
            //9-11月为秋天调用秋天的CSS
            else if(yue1>=9&&yue1<=11){
                link = document.createElement("link");
                link.rel = "stylesheet";
                link.type = "text/css";
                link.href = "<?php echo CSS_PATH;?>stucss/autumn.css";
                document.getElementsByTagName("head")[0].appendChild(link);
            }
            //12-2月为冬天调用冬天的CSS
            else{
                link = document.createElement("link");
                link.rel = "stylesheet";
                link.type = "text/css";
                link.href = "<?php echo CSS_PATH;?>stucss/winter.css";
                document.getElementsByTagName("head")[0].appendChild(link);
            }
        }
        aa();
    </script>
</head>

<body onload="gundong()">
<!--header_start-->
<div id="header">
    <div class="content-area">
        <a href="#" class="left"></a>
        <a href="#" class="right"></a>
    </div>
</div>
<!--header_end-->
<!--nav_start-->
<div id="nav">
    <div class="content-area">
        <ul>
            <li><a href="/index.php">首页<span>Home</span></a></li>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4041a96f40605287a6c3eff16aa020c&action=category\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'20',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?><span><?php echo $r['catdir'];?></span></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <img src="<?php echo IMG_PATH;?>stuimages/shu.png" />
        </ul>
        <div class="search">
            <form>
                <input type="text" placeholder="站内搜索" />
            </form>
            <a href="#">搜 索</a>
        </div>
    </div>
</div>
<!--nav_end-->
