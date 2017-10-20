<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 2017/10/19
 * Time: 10:58
 */
$con=@mysqli_connect("127.0.0.1","root","root","highcharts","3306")or die("数据库连接失败");
$str="SELECT * FROM(SELECT * From main  order by ID DESC limit 200)a ORDER BY ID";
$result=mysqli_query($con,$str);
date_default_timezone_set('Etc/GMT-1');
while($data=mysqli_fetch_array($result))
{
    $output[]=array(date('Y-m-d H:i:s',$data["time"]),(int)$data["data"]);
}
echo json_encode($output);
