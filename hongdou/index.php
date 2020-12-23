<?php 
date_default_timezone_set("Asia/Shanghai"); //默认时区
define('ENVIRONMENT',false); //应用环境，TRUE 打开报错，FALSE关闭报错
header('content-type:application/json'); //强制编码
$links=array(
    "top"=>array(
        array("name"=>"顶部导航",    "urls"=>"http://www.xxx.com" ,),
    ),
    "bootm"=>array(
        array("name"=>"AV福利导航",    "urls"=>"http://www.avdh008.com",),
        array("name"=>"清沫导航",    "urls"=>"http://www.qingdh3.com",),
        array("name"=>"火鸡导航",    "urls"=>"http://www.huo008.com",),
    ),
    //自动连接放下边
);
$result=array("status"=> 1,"data"=>$links,"msg"=>"获取友链成功");
$json=json_encode($result);
echo $json;
// 写入文件
//file_put_contents('test.json', $json);
?>
