<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2017/10/19
 * Time: 10:57
 * description：
 *  1.读取WiFi模块上传的数据，获取当前系统时间，将时间-温度数据添加到数据库。
 */
$con=@mysqli_connect("127.0.0.1","root","root","highcharts","3306")or die("数据库连接失败");
$data=$_GET['data'];
date_default_timezone_set('Etc/GMT-1');//设置时区
$time=time();//1970.1.1
$str="INSERT INTO main (time,data) VALUES ('$time','$data')";
$result=mysqli_query($con,$str);
mysqli_close($con);
echo "done";