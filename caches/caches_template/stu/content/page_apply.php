<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style>
    body{background: #e8e8e8;}
</style>
<!--banner_start-->
<div id="banner2" class="content-area">
    <a href="#"><img src="<?php echo IMG_PATH;?>stuimages/baoming-banner_03.jpg" /></a>
</div>
<!--banner_end-->
<!--content_start-->
<div id="content" class="content-area main">
    <div class="main_left">
        <h3>关于交院</h3>
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8df9a94a860d40d194c49cadfe11c62&action=category&catid=0&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'6',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($n==5) { ?><li><a href="/index.php?m=content&c=index&a=lists&catid=22" <?php if($catid==22) { ?> id="current"  <?php } ?>>校园风采</a></li><?php } ?>
            <li><a href="<?php echo $r['url'];?>" <?php if($catid==$r[catid]) { ?> id="current" <?php } ?>><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <div class="main_right">
        <div class="title5">
            <h4>在线报名</h4>
            <ul>
                <li><a href="index.html">首页></a></li>
                <li><a href="survey.html">关于交院></a></li>
                <li><a href="baoming.html" id="current1">在线报名</a></li>
            </ul>
        </div>
        <form method="post" action="?m=formguide&c=index&a=show&formid=12&siteid=1" >
            <p>
                <label>姓名：</label>
                <input type="text"  name="info[name]" id="name" />
            </p>
            <p>
                <label>身份证：</label>
                <input type="text"  name="info[sid]" id="sid"/>
            </p>
            <p>
                <label>手机号：</label>
                <input type="text"  name="info[phone]" id="phone" />
                <span class="hui">请正确填写您的手机号码</span>
            </p>
            <p>
                <label>QQ：</label>
                <input type="text" name="info[QQ]" id="QQ"/>
            </p>
            <p>
                <label>户口所在地：</label>
                <input type="text" class="hukou"  name="info[address]" id="address"/>
            </p>
            <p>
                <label>学历：</label>
                <select name='info[education]' id='education'>
                    <option value="所有学历" >所有学历</option>
                    <option value="初中毕业生" >初中毕业生</option>
                    <option value="高中，技校，中职毕业生" >高中，技校，中职毕业生</option>
                </select>
            </p>
            <p>
                <label>所报类别：</label>
                <select name='info[type]' id='type'>
                    <option value="所有类别" >所有类别</option>
                </select>
            </p>
            <p>
                <label>所报专业：</label>
                <select name='info[major]' id='major'>
                    <option value="所有专业" >所有专业</option>
                </select>
            </p>
            <p>
                <label>家长姓名：</label>
                <input type="text" name="info[famname]" id="famname"/>
            </p>
            <p>
                <label>毕业学校：</label>
                <input type="text"  name="info[overschool]" id="overschool"/>
            </p>
            <p>
                <label>收件地址：</label>
                <input type="text" class="hukou" name="info[addressmes]" id="addressmes"/>
            </p>
            <p>
                <label>收件人：</label>
                <input type="text" name="info[addressper]" id="addressper"/>
            </p>
            <p>
                <label>收件电话：</label>
                <input type="text" name="info[mesphone]" id="mesphone" />
            </p>
            <p class="mar_top">
                <input type="submit" name="dosubmit" value="提交" class="submit m_l" />
                <input type="reset" value="取消" class="submit" />
            </p>

        </form>
    </div>
</div>
<!--content_end-->

<?php include template("content","footer"); ?>
