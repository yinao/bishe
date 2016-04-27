<?php
require 'BaseAction.class.php';
require DIR.'/Web/Model/OrderModel.class.php';
//require DIR.'/Web/Model/IndexModel.class.php';
class OrderAction extends BaseAction{
	public function run(){
		if(!$this->checkIsLogin()){
			$this->showLoginPage();return;
		}
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('orderActive',' class="active"');

		switch ($para) {
			case 'info':
				$this->info();
				break;
			case 'oc':
				$this->count();
				break;
			case 'oused':
				$this->orderUsed();
				break;
			default:
				$this->index();
				break;
		}
	}

	private function index(){
		$this->obj->assign('bread',$this->bread(1,'订单管理'));
		$this->obj->assign('omActive',' class="active"');

		if(!isset($this->parameters['safe']['p'])||empty($this->parameters['safe']['p'])||!is_numeric($this->parameters['safe']['p'])){
			$this->parameters['safe']['p']=1;
		}

		//记录当前登录的防疫站的账户对应的station表中的id
		$this->parameters['safe']['station_id']=$this->adminInfo['station_id'];
		//$rowsCount=OrderModel::rowsCount(0);

		//require DIR.'/Web/Common/Page.class.php';
		//$page=new Page($rowsCount, $this->url,$this->parameters['safe']['p']);

		//$this->obj->assign('pager',$page->setPage());

		$result=OrderModel::fetchAll($this->parameters['safe'],$this->url);
		//unset($page);
		$this->obj->assign('pager',$result['page']);
		$this->obj->assign('orderList',$result['list']);

		$this->obj->display('order_index.html');
	}

	private function info(){

		$this->obj->assign('bread',$this->bread(2,'订单管理','o','订单详情'));
		$this->obj->assign('oiActive',' class="active"');

		//查询订单的时候，还有看当前的登录账户有权查看别的防疫站的订单吗
		$this->parameters['safe']['staion_id']=$this->adminInfo['station_id'];
		//echo '<pre>';
		//\print_r(OrderModel::fetchInfo($this->parameters['safe']));exit();
		$this->obj->assign('orderInfo',OrderModel::fetchInfo($this->parameters['safe']));

		$this->obj->display('order_info.html');
	}

	private function count(){

		$this->obj->assign('bread',$this->bread(2,'订单管理','o','订单统计'));
		$this->obj->assign('ocActive',' class="active"');
		$this->obj->display('order_count.html');
	}

	private function orderUsed(){
		if(!$this->isAjax()){
			echo json_encode(array('status'=>0));exit();
		}
		$paras=$_POST;
		$r=OrderModel::orderUsed($paras);
		if($r){
			echo json_encode(array('status'=>1));exit();
		}else{
			echo json_encode(array('status'=>0));exit();
		}
	}
}