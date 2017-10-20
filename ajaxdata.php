<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2017/10/19
 * Time: 10:58
 */
header("Content-type: text/json");
$con=@mysqli_connect("127.0.0.1","root","root","highcharts","3306")or die("数据库连接失败");
date_default_timezone_set('Etc/GMT-1');
$str="select * from main ORDER BY ID DESC LIMIT 1";
$result=mysqli_query($con,$str);
while($data=mysqli_fetch_array($result))
{
    $output=array(date('Y-m-d H:i:s',$data["time"]),(int)$data["data"]);
   // $output=array((int)($data["time"]),(int)$data["data"]);
}
echo json_encode($output);
//echo PHP_FLOAT_MAX;