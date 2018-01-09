<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--banner_start-->
<div id="banner" class="content-area">
    <a href="#"><img src="<?php echo IMG_PATH;?>stuimages/top_05.jpg" /></a>
</div>
<!--banner_end-->
<!--content_start-->
<div id="content" class="content-area">
    <!--content_left_start-->
    <div class="content_left">
        <div class="image">


                <div id="slide">
                    <ul class="list">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3158d4ab3f6e9ddaca5bbd7a3cd264df&action=position&posid=19\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','limit'=>'20',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li><a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt=""></a></li>
                        <?php $n++;}unset($n); ?>
                       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>


        </div>
        <div class="notice">
            <div class="title">
                <span><span class="color">NOTICE</span>&nbsp;公示公告</span>
                <a href="/index.php?m=content&c=index&a=lists&catid=17"></a>
            </div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc506ab2496d1dfb61bc61cdbef185ea&action=lists&catid=17&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','limit'=>'8',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="message">
            <div class="title2">
                <h4>招生信息</h4>
                <a href="/index.php?m=content&c=index&a=lists&catid=19">更多>></a>
            </div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0a93392fc410bb6c1683d73804f8c53e&action=lists&catid=19&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="serve">
            <div class="title2">
                <h4>招生服务</h4>
                <a href="/index.php?m=content&c=index&a=lists&catid=20">更多>></a>
            </div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd460f247eeb8acdb78bc1d420157a62&action=lists&catid=20&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'20','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="xwrs"></div>
        <div class="mien">
            <div id="lanren">
                <div id="lanren2">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2f3da6fc670cb45e6810fbf8ef20c1d&action=lists&catid=22&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','limit'=>'6',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"  width="152" height="111"/><span><?php echo $r['title'];?></span></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>

        </div>
    </div>
    <!--content_left_end-->
    <!--content_right_start-->
    <div class="content_right">
        <div class="video">
            <div class="title1">
                <h4>宣传片</h4>
            </div>
            <a href="#"><img src="<?php echo IMG_PATH;?>stuimages/video_06.jpg" /></a>
            <div class="title3">热点问答</div>
            <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59b7058c3b88e94e9e21a3d883962839&action=lists&catid=21&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','limit'=>'7',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <div class="jztx">
                <a href="#"></a>
            </div>
        </div>
        <ul>
            <li class="anniu1"><a href="/index.php?m=content&c=index&a=lists&catid=11"></a></li>
            <li class="anniu2"><a href="/index.php?m=content&c=index&a=lists&catid=15"></a></li>
            <li class="anniu3"><a href="#"></a></li>
        </ul>
    </div>
    <!--content_right_end-->
    <!--link_start-->
    <div class="link">
        <div class="title4">推荐网站</div>
        <form>
            <select name="select">
                <option>————校内导航————</option>
                <option>————校内导航————</option>
                <option>————校内导航————</option>
            </select>
            <select>
                <option>————推荐导航————</option>
                <option>————推荐导航————</option>
                <option>————推荐导航————</option>
            </select>
        </form>
    </div>
    <!--link_end-->
</div>
<script src="<?php echo JS_PATH;?>stujs/jquery-1.9.1.min.js"></script>
<script src="<?php echo JS_PATH;?>stujs/Mds.onePic.1.0.js" type="text/javascript"></script>
<script>
    $('#slide').MdsSlideFade({
        pageNum: true,time: '3000'
    });

</script>

<!--content_end-->
<?php include template("content","footer"); ?>
<style>
    #lanren {width: 900px;height: 100px;margin: 0 auto 0;position: relative;}
    #lanren2{position: absolute;left: 0;top: 0;}
    #lanren2 li { width:155px; margin:35px 10px 0; height:117px; float:left; transition:1s;}
    #lanren2 span{ overflow: hidden;text-overflow: ellipsis;white-space:nowrap;width: 50%; margin:0 auto;  display: block;color:#25B53B; font-size: 12px;}
    #lanren2 img{ border:1px solid #C2F1C7; padding:3px;}
</style>
<script>
    (function(){
        var speed = 10; //滚动速度
        var lis = 200; //单个单位的宽度
        var i = 0;
        var t = true;
        var a = parseInt($('#lanren').css('width'));
        var b = parseInt($('#lanren2 li').length * lis);
        $('#lanren2').css('width',b)
        var distance = b-a;
        // console.log(distance);
        function add(){
            i++;
        }
        function reduce(){
            i--;
        }
        function jia(){
            if((i< distance || i<i) && t){
                add();
            }else if(i >= distance || !t){
                t= false;
                reduce();
            }
            if(i==0){
                t = true;
            }
            $('#lanren2').css('left',-i)
        }
        var d = setInterval(jia, speed);
        $('#lanren').mouseover(function(){
            clearInterval(d);
        });
        $('#lanren').mouseleave(function(){
            d = setInterval(jia, speed);
        });
    }());
</script>