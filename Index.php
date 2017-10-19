<?php

require_once './aop/AopClient.php';
require_once './aop/request/AlipayOpenPublicTemplateMessageIndustryModifyRequest.php';
require_once './aop/request/AlipayTradePagePayRequest.php';


/**
* 
*/
class Index
{
	private $shop;
	private $price;
	
	function __construct($shop,$price)
	{
		$this->shop=$shop;
		$this->price=$price;
	}

	public function index()
	{
		$c = new AopClient;
		$c->gatewayUrl = "https://openapi.alipaydev.com/gateway.do";
		$c->appId = "2016082000290576";
		$c->rsaPrivateKey = 'MIIEpAIBAAKCAQEAvWeuvHJtg67tTfkzAVEKlmsTRMa1VcUIJAQS41N1MQNWyuxYpuNYTWUM0II1tvLYU4hODVKM+1cl9yTd1yDF1OCo3rLsX3jNhuK/+F0y5KZRWIWFD9+HryIZWOSV7fDqPcaM92zK+wW6VHa/9TaNb3ayamJDJKxcLYiLKHk23cmIaM0BhOLiqVRGbUwDWhSq31J+G2qhYRDPfPQI/OQ13D9L5kDFR0mQANfBDZX5Zs/Ctpy/1rHpiaTsXSbtgGCzo2L6IaSNAJPJNizzTP6Zz0SxhJbWL7W8rZIWjfI08UqJnpAEG+9dK0cNa22WbdAPNZ/4XuS7c9epLkwP9D5SjQIDAQABAoIBAQCAcT5q5wJjSY390Z+IJggTB1vSyRoRpwMlQWn5pRAVA9mo1OwtiIDKQ1uUTqjUfwy6YPXlTPT0QR4q4mJaUAw4l32NQDLRb5+Y+E4MxE8OBcemSy14HTLrTil4QdN2v2hqKipQZAOmhTTdsIXuaWcyjoDhae90gDomWrFb6g+OCMB/LVYNXPfwEtmjVee5/nfblBm1NCAebhEIET/krHl1zwnimr4nqVPMeVJcVeDZ79PC2r1/fl2nMyGQq6CSF7Ndw2BRTdybUpPfrM0LjGHDP8V4NFYXDhBJe5UYjmv4nsuV+hS69Fig9UxrdWnUbbtztZKoiJItKs9Je+1pNuXVAoGBAO8oeI2ZUCSpN6QweER4h/ufciLHjVUaLFocNXNWczo/+hJDoBPLmlEjx+HXYLaGzQPTiXR6z2I6bRCIL0/g+S1mBdFhK7eB+zl9bKLv9ekB1qalL5rLmEIE5HUohcB60ltugpsa0l22hUspr4NjxCMd4kh+mhZaLaPqzgC1tk+HAoGBAMq+RA1fkl21B26hinbT0+GfQPn6isx3eQdCd6F836t6lPuCCG+G0+aW/RbCW5gdiAhI/74FFdzMg9k01rTVA0zcHEI5qNh7pUpQ0+rd7VzNxEG+jdRN9G+SuheYLHZD9bAdpQ324fs85R5RSNAFN188gJkd9XWNKWeMS1AaaEpLAoGAXU574jrbgsImfD+Q3J3t5+ToYdtbL8W7Yhi5Xdtvr11Akpmhvbdk6J0+IcWm7O+g0wpYCYLUoG1NGfMYCmEqtmSkhnET3k+vFVny5YsbdSILfg7aiNk/+RnxjCgYLuV8ZsGx4RPQ2VEZph6IZImq/0xseX4zXd8nCVnVr381tscCgYBxKz+FT4G9+NzLLjTCG3+8A08bunRbqZzPJpTseW3IpEYhFfZrepExt7pSR+8ku+dA6K6IfQI1G5vFVK88hWKwNnU3qkPLg0lCcFe6VGK4WMth/2HfzhvRY8+od/LpmQm9Yu7NGrANs3IZODoyk5bS/Ey0K3rmQQOJn1AyyGrKfQKBgQDQQ/yh3Qu2MWMbZTlExYJROXdk3Dp0KOa8aDuPHcqbm5KSUaBEu8f932Iu0p/VDsfwRMdpv16KCq/JjaV18RFU+c0AGlHGCTn4SSpt+SuebegeJ2jUdQn70oHHdZtZDEBSassCGW6J8+3mfUK6jFpbPabVS9ZzXDC2Qm4x8DKPkQ==' ;
		$c->format = "json";
		$c->charset= "GBK";
		$c->signType= "RSA2";
		$c->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0q4ZCztTBRb1xvSXuG1WvpAJQh+mGb00XXZZEV/eNIDBe5bxrJoQ4wzOj8t6WbslTXg8d/3Ls6P4kIT5OiYQfNU8ZgUTebclLqhAlHkle0LZ85jMsbwUU5U5T7Zx31EEyNxc2zxLL9H8sI7CsGU6Yp5bIs8hL84c3B5HEuTkZyRUgPQZB8CIAdZkU9UUa6OObyXaGAMQbIqstBS1KqZQUQGwV/LdL9VmY2UcII1yScGszLN8OXXGd7ht/ltkIN0I7sHAxn6MI+cL5SVMCK1JYTPoaBi3nm4Jy3Y4oVBr61V59RlEDSUwDbBJc3s0No6KKk9C7E+pnbjZ1hR5QEorUwIDAQAB';
		//实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.open.public.template.message.industry.modify
		$request = new AlipayOpenPublicTemplateMessageIndustryModifyRequest();
		//SDK已经封装掉了公共参数，这里只需要传入业务参数
		//此次只是参数展示，未进行字符串转义，实际情况下请转义
		$request->bizContent = "{" .
		"    \"primary_industry_name\":\"IT科技/IT软件与服务\"," .
		"    \"primary_industry_code\":\"10001/20102\"," .
		"    \"secondary_industry_code\":\"10001/20102\"," .
		"    \"secondary_industry_name\":\"IT科技/IT软件与服务\"" .
		" }";
		$response= $c->execute($request);
	}

	public function trade()
	{
		$aop = new AopClient ();  
		$aop->gatewayUrl = 'https://openapi.alipaydev.com/gateway.do';  
		$aop->appId = '2016082000290576';  
		$aop->rsaPrivateKey = 'MIIEpAIBAAKCAQEAvWeuvHJtg67tTfkzAVEKlmsTRMa1VcUIJAQS41N1MQNWyuxYpuNYTWUM0II1tvLYU4hODVKM+1cl9yTd1yDF1OCo3rLsX3jNhuK/+F0y5KZRWIWFD9+HryIZWOSV7fDqPcaM92zK+wW6VHa/9TaNb3ayamJDJKxcLYiLKHk23cmIaM0BhOLiqVRGbUwDWhSq31J+G2qhYRDPfPQI/OQ13D9L5kDFR0mQANfBDZX5Zs/Ctpy/1rHpiaTsXSbtgGCzo2L6IaSNAJPJNizzTP6Zz0SxhJbWL7W8rZIWjfI08UqJnpAEG+9dK0cNa22WbdAPNZ/4XuS7c9epLkwP9D5SjQIDAQABAoIBAQCAcT5q5wJjSY390Z+IJggTB1vSyRoRpwMlQWn5pRAVA9mo1OwtiIDKQ1uUTqjUfwy6YPXlTPT0QR4q4mJaUAw4l32NQDLRb5+Y+E4MxE8OBcemSy14HTLrTil4QdN2v2hqKipQZAOmhTTdsIXuaWcyjoDhae90gDomWrFb6g+OCMB/LVYNXPfwEtmjVee5/nfblBm1NCAebhEIET/krHl1zwnimr4nqVPMeVJcVeDZ79PC2r1/fl2nMyGQq6CSF7Ndw2BRTdybUpPfrM0LjGHDP8V4NFYXDhBJe5UYjmv4nsuV+hS69Fig9UxrdWnUbbtztZKoiJItKs9Je+1pNuXVAoGBAO8oeI2ZUCSpN6QweER4h/ufciLHjVUaLFocNXNWczo/+hJDoBPLmlEjx+HXYLaGzQPTiXR6z2I6bRCIL0/g+S1mBdFhK7eB+zl9bKLv9ekB1qalL5rLmEIE5HUohcB60ltugpsa0l22hUspr4NjxCMd4kh+mhZaLaPqzgC1tk+HAoGBAMq+RA1fkl21B26hinbT0+GfQPn6isx3eQdCd6F836t6lPuCCG+G0+aW/RbCW5gdiAhI/74FFdzMg9k01rTVA0zcHEI5qNh7pUpQ0+rd7VzNxEG+jdRN9G+SuheYLHZD9bAdpQ324fs85R5RSNAFN188gJkd9XWNKWeMS1AaaEpLAoGAXU574jrbgsImfD+Q3J3t5+ToYdtbL8W7Yhi5Xdtvr11Akpmhvbdk6J0+IcWm7O+g0wpYCYLUoG1NGfMYCmEqtmSkhnET3k+vFVny5YsbdSILfg7aiNk/+RnxjCgYLuV8ZsGx4RPQ2VEZph6IZImq/0xseX4zXd8nCVnVr381tscCgYBxKz+FT4G9+NzLLjTCG3+8A08bunRbqZzPJpTseW3IpEYhFfZrepExt7pSR+8ku+dA6K6IfQI1G5vFVK88hWKwNnU3qkPLg0lCcFe6VGK4WMth/2HfzhvRY8+od/LpmQm9Yu7NGrANs3IZODoyk5bS/Ey0K3rmQQOJn1AyyGrKfQKBgQDQQ/yh3Qu2MWMbZTlExYJROXdk3Dp0KOa8aDuPHcqbm5KSUaBEu8f932Iu0p/VDsfwRMdpv16KCq/JjaV18RFU+c0AGlHGCTn4SSpt+SuebegeJ2jUdQn70oHHdZtZDEBSassCGW6J8+3mfUK6jFpbPabVS9ZzXDC2Qm4x8DKPkQ==';  
		$aop->apiVersion = '1.0';  
		$aop->signType = 'RSA2';  
		$aop->postCharset= 'utf-8';  
		$aop->format='json';  
		$request = new AlipayTradePagePayRequest ();  
		$request->setReturnUrl('http://www.mypay.com/test.html');  
		$request->setNotifyUrl('http://www.mypay.com/test1.php');
		$time=time();  
		$request->setBizContent('{"product_code":"FAST_INSTANT_TRADE_PAY","out_trade_no":'.$time.',"subject":"'.$this->shop.'","total_amount":"'.$this->price.'","body":"Iphone6 16G"}');

		//请求  
		return $result = $aop->pageExecute ($request);

		//输出  
		//echo $result;
	}
}
	$shop=$_POST['shop'];
	$price=$_POST['price'];
	$index=new index($shop,$price);
	//echo $index->index();
	echo $index->trade();