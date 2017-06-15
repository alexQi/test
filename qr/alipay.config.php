<?php
/* *
 * 配置文件
 * 版本：3.5
 * 日期：2016-06-25
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 * 安全校验码查看时，输入支付密码后，页面呈灰色的现象，怎么办？
 * 解决方法：
 * 1、检查浏览器配置，不让浏览器做弹框屏蔽设置
 * 2、更换浏览器或电脑，重新登录查询。
 */
 
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串，查看地址：https://openhome.alipay.com/platform/keyManage.htm?keyType=partner
$alipay_config['partner']		= '2088102169606780';

//收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
$alipay_config['seller_id']	= $alipay_config['partner'];

//商户的私钥,此处填写原始私钥去头去尾，RSA公私钥生成：https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.nBDxfy&treeId=58&articleId=103242&docType=1
$alipay_config['private_key']	= 'MIIEpAIBAAKCAQEAqab2iy8zKiIx3hSlpUaDn+OMtoJp21GYy/cy0KiVZSNJ634k/95lhMPXrfjK+phVDcAnbV0JzS2+o5tzTuo5i9+DsezDGZRpkE4PKu9uCJJwoFl64cKUCO0O1c3u+y1NyiNgeOsptdW8JWtjVKBElA2Goku/olPXNU5BiQkxNjZwWAHmmsltEX+nAlGFOi0sbgQQ519Soj9wkxbS4RF831dBQV1ZwpD3S6I3IRtHGvzmbj6RT5Vs2m+k9GIOW5qorFnWwAt9wVl9Vx2UJygDkFQ4PSpLWH8zppsr6QSjLjoQwhzRsLyOYn1QZZtu/bk3Bj7CoXsIColFf9RD+qtrOwIDAQABAoIBAFdItZPKhvJogWuXB9pOuy2p7x1/X2MdShW2awh7k9FjJIbqcbLLA0QZVoAFfrkLYsceU6qqsX5EyM54Dg1N6KmUJ7eE7qPcfatm3drjMKNsZFG7d8NrTqqA/J73wrqsBle3d8z+gIkzHAfMhmBlzKK3iss5WbD0ncapKoKMnisbZIjbtoQvTgru67KDWwvXPMCmy1Q7Qmb/QI0t/kTU/lJajUHmJkMz5Ccm/pnFwheLTRh9leFGblRKHM2ex9VmNo1Lb8f2Vp/gQsJf8ezm36XjjJvRWQqcKCn23fWPm5F5t/uEFRGlZF40AX+pXB1g7ZVO6rZkY36sNDiuFJtMPIECgYEA1xNFfT866CMnVVojTfYct8tWG61hO3wegrBKAQcP02+WOe7VmbG69JcCloLwP/aTEbWIW8USemqwetfWMvFguWAnbnAVgKa+RrjF3zKH8PCy8+1xtKfSuDMWmDAxiencFEruNVggBxLFkTPb+/duUUHwfRNGJVIT/VEuNQqct5sCgYEAye8L5LRMQE8rwxdqiHro1YPfgYan7V+qlSSTjAaYNcd0YPwp8AJNkKza/I5INsweW5gevP9ycbWzGXiVmDx1hSjsOwFso1R3/rvXXOhpIU0q5dYq1RHJU9FthvLF4R7pZtNSn+LhZDEtqKmj5+Vo3W236XcSYv5Pcy3EAhS45OECgYA7izpR0o+cdR8OokXj759DwyezweyJa3OG+weCAVKAVwRgRZ8dTfdUf/pXcSjSjJFq9bcqsQTMn3z8hYTn1avRpq1EBgPt+jvzmHQvtu2r5vekULiKK2xLUtmOiMkuRXCIrbYFTsCPNMM9z/23ZGlGVdsexZdF/dNK7o68YJPCwQKBgQCeAtHZqkOoZsslo6MXHKYovUIdhpLMqfk/LxnNjjN4kZQ9d9QRHJw5QykwSt2zE1IF9ijHV1PkKnv0yGi2cUi8Y+NF4L1zqNsklzPUXYA2ML4KjuWBSKOzVMNRv5Kbr6aPcXjL56razaieu++nu9msuvgYVbYrhDgDNqKTxkdPwQKBgQCOwdMGtf5juiqabBnfajasNW/mBJ0/5OtFgVH/qJaTuhDV1uxk0EO5ImEiT52a8erxDxXTNa7rY+OYmLxWotBL2AxXTNJdZI8z2L7zeqxbjsYjdPEQ9DbDJpGi0g5qSVJ5+Ybb8zEgsRW5UNA8/oFZyT/F/iMxxPezIsW6aswrsw==';

//支付宝的公钥，查看地址：https://b.alipay.com/order/pidAndKey.htm 
$alipay_config['alipay_public_key']= 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6uFAFheNOFEe/J1/2r1588OGLFaEqtEVaLNZowb4O4+BFlE2ZluaCBAWY3lA2f/ASZpq/ZmlfUbXhv9exYmjL1RuGrfTjBXWZr7AgF8yoApQOcNO3LnLyn34CiLXulQn2eHFW2fi+o46Mq+3WoKw2p04I+vjF3NrbOQIzfZzZ/FaRDNbFhnt6TurhDbwrfQgPduDt7O92rt+zNzn3jCgLOP+5WqwtTC+tZhOHsyC7zN66S5gcBSqfBjdIM0xEjAUEQ3ibX+TDGPp64Gzv6K4126ngCOXPMclIf1rB8tDKhnY313hSU5QchARgWOCq4ocAMLjo/YjzhjXqddBHn+nlwIDAQAB';

// 服务器异步通知页面路径  需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['notify_url'] = "http://商户网址/create_direct_pay_by_user-PHP-UTF-8/notify_url.php";

// 页面跳转同步通知页面路径 需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['return_url'] = "http://商户网址/create_direct_pay_by_user-PHP-UTF-8/return_url.php";

//签名方式
$alipay_config['sign_type']    = strtoupper('RSA2');

//字符编码格式 目前支持 gbk 或 utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
$alipay_config['cacert']    = getcwd().'cacert.pem';

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';

// 支付类型 ，无需修改
$alipay_config['payment_type'] = "1";
		
// 产品类型，无需修改
$alipay_config['service'] = "create_direct_pay_by_user";

//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


//↓↓↓↓↓↓↓↓↓↓ 请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
	
// 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
$alipay_config['anti_phishing_key'] = "";
	
// 客户端的IP地址 非局域网的外网IP地址，如：221.0.0.1
$alipay_config['exter_invoke_ip'] = "";
		
//↑↑↑↑↑↑↑↑↑↑请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑

?>