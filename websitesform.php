<?php
error_reporting(0);
$time = $_GET['time'];
if ($time == ""){
	$time = date("Ymd");
	$url = "http://news-at.zhihu.com/api/4/news/$time";
}
$url = "http://news.at.zhihu.com/api/4/news/before/$time";
$data = file_get_contents($url);
$json = json_decode($data);
$json = $json->stories;
$i=0;
foreach ($json as $key) {
	$i++;
	$arr[$i]['title']=$key->title;
	$arr[$i]['id']=$key->id;
}
$list = 5;

$id_1 = 16390;
$data_1 = file_get_contents($url_1);
while($data_1 == null)
{
    $id_1++;
    $url_1 = 'http://www.whxy.net/show/'.$id_1.'.htm';
    $data_1 = file_get_contents($url_1);
}

$id_2 = 16368;
$data_2 = file_get_contents($url_2);
while($data_2 == null)
{
    $id_2++;
    $url_2 = "http://www.whxy.net/show/".$id_2.".htm";
    $data_2 = file_get_contents($url_2);
}

$id_3 = 16361;
$data_3 = file_get_contents($url_3);
while($data_3 == null)
{
    $id_3++;
    $url_3 = 'http://www.whxy.net/show/'.$id_3.'.htm';
    $data_3 = file_get_contents($url_3);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="websitesform.css" rel="stylesheet" />
        <link rel="shortcut icon" href="http://zs.whxy.edu.cn/favicon.ico">
        <script src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.js" type="text/javascript"></script>
        <title>武汉学院-信息系</title>

        <script type="text/javascript">
            $(document).ready(function(){
            var right = $("#right");
            var btn = $("#strHref");
            btn.toggle(function(){
                right.show(1000);
                btn.text("隐藏 >");
            },function(){
                right.hide(1000);
                btn.text("< 更多");
            });
        });
        </script>
    </head>
    <body>
        <div id="wrap">
                <p><a href="#" id="strHref" class="btn-slide">&#8249;&nbsp;更多</a></p>
            <div id="top">
            <div id="middle">
                <div class="left">
                    <div id="pic">
                        <img alt="武汉学院" src="http://www.whxy.net/img/logo.png" />
                    </div>
                    <div id="links">
                        <p><a href="http://www.whxy.net/">学校首页&nbsp;&#187;</a></p>
                        <p><a href="http://it.whxy.net/list.aspx?id=467">通知公告&nbsp;&#187;</a></p>
                        <p><a href="http://it.whxy.net/about.aspx?id=41">本系概况&nbsp;&#187;</a></p>
                        <p><a href="http://zs.whxy.edu.cn/">招生就业&nbsp;&#187;</a></p>
                        <p><a href="http://it.whxy.net/list.aspx?id=460">教学教务&nbsp;&#187;</a></p>
                        <p><a href="http://it.whxy.net/list.aspx?id=459">师资队伍&nbsp;&#187;</a></p>
                        <p><a href="http://www.whxy.net/Photo.aspx">校园风光&nbsp;&#187;</a></p>
                        <p><a href="http://www.whxy.net/news/6/322.htm">学校新闻&nbsp;&#187;</a></p>
                        <p><a href="http://www.whxy.net/list/7/1177.htm">联系我们&nbsp;&#187;</a></p>
                    </div>
                </div>
                <div id="pic1">
                    <img src="http://zs.whxy.edu.cn/templets/default/img/001.jpg" />
                </div>
                <div id="right" style="display: none">
                    <div class="inform">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#DC143C;overflow:hidden;"></div>
                        <ul>
                            <strong>学校新闻</strong>
                            <?php
                                for($i=0;$i<$list;$i++,$id_1--)
                                {
                                    $temp = 'http://www.whxy.net/show/'.$id_1.'.htm';
                                    $lines_array = file($temp); 
                                    $lines_string = implode('',$lines_array);
                                    eregi("<title>(.*)</title>", $lines_string, $title); 
                                    
                                    echo "<li><a href=".$temp.">".$title[1]."</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="box">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#fff;overflow:hidden;"></div>
                            <ul>
                                <strong>通知公告</strong>
                                <?php
                                    for($j=0;$j<$list;$j++,$id_2--)
                                    {
                                        $temp = 'http://www.whxy.net/show/'.$id_2.'.htm';
                                        $lines_array = file($temp);
                                        $lines_string = implode('', $lines_array);
                                        eregi("<title>(.*)</title>", $lines_string, $title);

                                        echo "<li><a href=".$temp.">".$title[1]."</a></li>";
                                    }
                                ?>
                            </ul>
                    </div>
                    <div class="box1">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#fff;overflow:hidden;"></div>
                        <ul>
                            <strong>科学研究</strong>
                            <li><a href="http://www.msn.com/en-us/video/wonder/jupiter-101/vi-BBu6HFj?ocid=spartanntp">Jupiter 101:facts about the plannet</a></li>
                            <li><a href="http://www.msn.com/en-us/video/wonder/ancient-observatory-used-to-predict-the-harvest-death-and-war/vp-BBugzwe?ocid=spartanntp">Ancient Observatory Used to Predict the Harvest, Death and War</a></li>
                        </ul>
                    </div>
                    <div class="box2">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#DC143C;overflow:hidden;"></div>
                        <ul>
                            <strong>Election 2016</strong>
                            <li><a href="http://www.msn.com/en-us/news/politics/wikileaks-could-release-more-material-on-us-election-says-assange/ar-BBuYBN6?ocid=spartanntp">WikiLeaks could release more material on US election, says Assange </a></li>
                            <li><a href="http://www.msn.com/en-us/news/politics/democrats%e2%80%99-divisions-linger-but-parties-have-seen-far-worse/ar-BBuYaWD?ocid=spartanntp">Democrats’ Divisions Linger, but Parties Have Seen Far Worse </a></li>
                            <li><a href="http://www.msn.com/en-us/news/factcheckingtrump/trump-defends-oswald-claim/ar-BBuGqYq?ocid=spartanntp">Trump Defends Oswald Claim</a></li>
                        </ul>
                    </div>
                    <div class="box3">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#DC143C;overflow:hidden;"></div>
                        <ul>
                            <strong>Technology</strong>
                            <li><a href="http://www.msn.com/en-us/news/technology/the-biggest-hacks-of-2016-so-far/ss-BBuVc6e?ocid=spartanntp">The Biggest Hacks of 2016 -- So Far</a></li>
                            <li><a href="http://www.msn.com/en-us/news/technology/the-redmi-pro-is-xiaomis-first-dual-camera-smartphone/ar-BBuZAg1">The RedMi Pro is Xiaomi's first dual-camera smartphone</a></li>
                            <li><a href="http://www.msn.com/en-us/news/technology/a-new-way-to-fight-back-when-hackers-take-your-data-hostage/ar-BBuX4jO?ocid=spartanntp">A new way to fight back when hackers take your data hostage</a></li>
                        <ul>
                    </div>
                    <div class="box4">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#fff;overflow:hidden;"></div>
                        <ul>
                            <strong>知乎日报</strong>
                            <?php
                                for ($i=0;$i<$list;$i++)
                                {
                                    echo "<li><a href="."http://news.at.zhihu.com/story/".$arr[$i]['id'].">".$arr[$i]['title']."</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="box5">
                        <div style="width:220px;height:1.5px;margin:0px auto;padding:0px;background-color:#fff;overflow:hidden;"></div>
                        <ul>
                            <strong>全人发展</strong>
                            <?php
                                for ($k=0;$k<$list;$k++, $id_3--)
                                {
                                    $temp = 'http://www.whxy.net/show/'.$id_3.'.htm';
                                    $lines_array = file($temp);
                                    $lines_string = implode('', $lines_array);
                                    eregi("<title>(.*)</title>", $lines_string, $title);

                                    echo "<li><a href=".$temp.">".$title[1]."</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="bottom">
                <p><strong>通讯地址：湖北省武汉市江夏区黄家湖大道333号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮编：430212</strong></p>
                <p>Copyright &#169; Wuhan Collage All Rights Reserved 2006 - 2016&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;鄂ICP备10014564号 </p>
            </div>
        </div>
    </body>
</html>