<?php
header('Content-Type:text/html;charset=utf-8');
$url=$_POST['titurl'];
//$url = 'http://www.beipy.com/';//url链接地址
echo getTitle($url);
 	
function getTitle($url){
    $header = array('user-agent:'.$_SERVER['HTTP_USER_AGENT']);
    $data = curl_https($url);
    preg_match('/<title>(.*)<\/title>/', $data, $matches);
    return $matches[1];
}
/** curl 获取 https 请求 
* @param String $url        请求的url 
* @param Array  $data       要發送的數據 
* @param Array  $header     请求时发送的header 
* @param int    $timeout    超时时间，默认30s 
*/  
function curl_https($url, $data=array(), $header=array(), $timeout=30){ 
    $ch = curl_init();  
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查  
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在  
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);  
    //curl_setopt($ch, CURLOPT_POST, true);  
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //2019-2-23 13:09:31 修复报错title curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if (ini_get('open_basedir') == '' && ini_get('safe_mode' == 'Off')) {
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    }
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);  
    $response = curl_exec($ch);  
    if($error=curl_error($ch)){  
        die($error);  
    }  
    curl_close($ch);  
    return $response;  
}  

?>
