<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
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
    <div class="main_right padd_bottom">
        <div class="title5">
            <h4><?php echo $catnme;?></h4>
            <ul>
                <li><a href="index.php">首页></a> <?php echo catpos($catid);?></li>
            </ul>
        </div>
        <div class="xq">
            <h2><?php echo $title;?></h2>
            <span>发布时间：<?php echo $inputtime;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布者：<?php echo $username;?></span>
            <p><?php echo $content;?></p>
        </div>
    </div>
</div>
<!--content_end-->

<?php include template("content","footer"); ?>