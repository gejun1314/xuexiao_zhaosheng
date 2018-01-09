<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style>
    body{background: #e8e8e8;}
</style>
<!--content_start-->
<div id="content" class="content-area main">
    <div class="main_left">
        <h3>关于交院</h3>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8df9a94a860d40d194c49cadfe11c62&action=category&catid=0&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'6',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($n==5) { ?><li><a href="/index.php?m=content&c=index&a=lists&catid=22" <?php if($catid==22) { ?> style="background: #FB9900; color: #fff;" <?php } ?>>校园风采</a></li><?php } ?>
            <li><a href="<?php echo $r['url'];?>" <?php if($catid==$r[catid]) { ?> id="current" <?php } ?>><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="main_right1">
        <div class="title5">
            <h4><?php echo $catname;?></h4>
            <ul>
                <li><a href="index.php">首页 > </a>  <?php echo catpos($catid);?></li>
            </ul>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8a92e46879377795bcb520b357c9d079&action=lists&catid=%24catid&num=5&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$content_total = $content_tag->count(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$stu_pages = stu_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <div class="news">
            <h4><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h4>
            <span><?php echo date('Y年m月d日',$r[inputtime]);?>  录入员：<?php echo $r['username'];?>　　点击数：null</span>
            <p><?php echo $r['description'];?>[<a href="<?php echo $r['url'];?>">详情</a>]</p>
        </div>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<div class="down">
    <?php echo $stu_pages;?>
</div>
<!--content_end-->

<?php include template("content","footer"); ?>