<?php
namespace Home\Controller;
use Think\Controller;
require __DIR__ . "/vendor/autoload.php";

use Qcloud\Sms\SmsSingleSender;
use Qcloud\Sms\SmsMultiSender;
use Qcloud\Sms\SmsVoiceVerifyCodeSender;
use Qcloud\Sms\SmsVoicePromptSender;
use Qcloud\Sms\SmsStatusPuller;
use Qcloud\Sms\SmsMobileStatusPuller;

class IndexController extends Controller {

	public function _initialize(){
        $this->city=D('city');
        $this->province=D('province');
        $this->mycity=D('mycity');
        $this->lie1=D('lieone');
        $this->lie2=D('lietwo');
	}

    public function index(){
        $province = $this->province->select();
        $mycity = $this->mycity->find();

        //首页分类列表
        $lie1 = $this->lie1->select();
        $lie2 = $this->lie2->select();
        // V($_POST);
        // exit;
        $this->assign('province',$province);

        $this->assign('mycity',$mycity);

        foreach($lie1 as $key => $val){
           $lv1 = explode('/',$val['name']);
           $lie1[$key]['names'] = $lv1;
        }
        $this->assign('lie1',$lie1);
        $this->assign('lie2',$lie2);

     
        $this->display();
    }

    //注册
    public function register(){
        $this->display();
    }
    //注册验证
    public function register_sdk(){
        //手机号
        $tel = $_POST['tel'];
        //验证码
        $num = rand(1000,9999); 
        //返回手机号+验证码
        $data = [];
        $data['tel'] = $tel;
        $data['num'] = $num; 

        // 短信应用SDK AppID
        $appid = 1400091422; // 1400开头

        // 短信应用SDK AppKey
        $appkey = "37cdf5545d50647a299cc767c4a37217";

        // 需要发送短信的手机号码
        $phoneNumbers = [$tel];

        // 短信模板ID，需要在短信应用中申请
        $templateId = 121376;  // NOTE: 这里的模板ID`7839`只是一个示例，真实的模板ID需要在短信控制台中申请

        // 签名
        $smsSign = "二手交易平台"; // NOTE: 这里的签名只是示例，请使用真实的已申请的签名，签名参数使用的是`签名内容`，而不是`签名ID`

        // 指定模板ID单发短信
        // try {
        //     $ssender = new SmsSingleSender($appid, $appkey);
        //     $params = [$num];
        //     $result = $ssender->sendWithParam("86", $phoneNumbers[0], $templateId,
        //         $params, $smsSign, "", "");  // 签名参数未提供或者为空时，会使用默认签名发送短信
        //     $this->ajaxReturn($num);
        //     $rsp = json_decode($result);
        //     echo $result;
        // } catch(\Exception $e) {
        //     echo var_dump($e);
        // }
            $this->ajaxReturn($data);
        
    }
    //注册后填写密码
    public function pass(){
        $this->display();
    }
    //登录
    public function login(){
        $this->display();
    }
  
    //ajax城市地址联动
     public function ajaxpro(){
        $city = $this->city->where('pid='.$_POST['id'])->select();

        $opt = '<option>--请选择市区--</option>';
        foreach($city as $key=>$val){
            $opt .= "<option value='{$val['id']}'>{$val['name']}</option>";
         }

        $this->ajaxReturn($opt);
    }
    //ajax切换城市
    public function ajaxcity(){
        $city = $this->city->where('id='.$_POST['id'])->find();

        //修改城市
        $data['name']=$city['name'];
        // $this->mycity->create($data);
         
        $this->mycity->where('id=1')->save($data);

        $this->ajaxReturn($city['name']);
    }
    //ajax清空城市
    public function ajaxdelcity(){
        $data['name']=null;
        $this->mycity->where('id=1')->save($data);
    }

    //ajax首页分类
    public function ajaxlie(){
        $lie2 = $this->lie2->where('lid='.$_POST['id'])->select();
        foreach($lie2 as $key=>$val){
            $nama .= "<a href='#'  target='_blank'>{$val['nama']}</a>";
            $namb .= "<a href='#'  target='_blank'>{$val['namb']}</a>";
            $namc .= "<a href='#'  target='_blank'>{$val['namc']}</a>";
         }
        $name=array($nama,$namb,$namc);
        $this->ajaxReturn($name);
    }
}