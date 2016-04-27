<?php

require_once('BaseAction.class.php');
require_once(DIR.'/Web/Model/ContentModel.class.php');
///require_once(DIR.'/Web/Model/IndexModel.class.php');
class ContentAction extends BaseAction{
	public function run(){
		//echo 'this is content';
		if(!$this->checkIsLogin()){
			$this->showLoginPage();return;
		}
		$this->getParameters();//获取地址栏参数
		$para = isset($this->parameters['safe']['e'])?$this->parameters['safe']['e']:NULL;
		switch ($para) {
			case 'e':
				$this->edit($this->parameters['safe']);
				break;
			case 'a':
				$this->add();
				break;
			case 'ca':
				$this->conAct();
				break;
			case 's':
				$this->sort();
				break;
			case 'sc':
				$this->sortAct();
				break;
			default:
				$this->index();
				break;
		}
	}

	private function index(){
		$this->obj->caching=false;
		$this->obj->assign('bread',$this->bread(1,'内容'));
		$this->obj->assign('title','内容页title');
		$this->obj->assign('keyword','关键字');
		$this->obj->assign('description','网站页面内容描述');
		$this->obj->assign('content','这是首页显示');
		$this->obj->assign('url',$this->url);
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('conActive',' class="active"');
		$this->obj->assign('mActive',' class="active"');

		$this->obj->assign('articleList',ContentModel::fetchArticle());

		$this->obj->display('content.html');
	}

	private function edit($paras){
		$this->obj->caching=false;
		$this->obj->assign('bread',$this->bread(2,'内容','c','内容编辑'));
		$this->obj->assign('title','内容编辑页title');
		$this->obj->assign('keyword','关键字');
		$this->obj->assign('description','网站页面内容描述');
		$this->obj->assign('content','这是首页显示');
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('url',$this->getUrl);
		$this->obj->assign('conActive',' class="active"');
		$this->obj->assign('mActive',' class="active"');
		$this->obj->assign('mTitle','内容编辑');
		$this->obj->assign('toggle','u');

		$this->obj->assign('list',ContentModel::fetchArticleOne($paras['i']));
		$this->obj->assign('sortList',ContentModel::fetchSort());
		
		$this->obj->display('content_edit.html');
	}

	private function add(){
		$this->obj->assign('bread',$this->bread(2,'内容','c','内容添加'));
		$this->obj->assign('conActive',' class="active"');
		$this->obj->assign('addActive',' class="active"');
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('url',$this->getUrl);
		$this->obj->assign('mTitle','内容添加');
		$this->obj->assign('toggle','a');

		$this->obj->assign('sortList',ContentModel::fetchSort());

		$this->obj->display('content_edit.html');
	}

	private function conAct(){
		$res=array();
		$res['status']=0;
		$res['res']=0;
		if($this->isAjax()){
			if(isset($_POST)&&!empty($_POST['tog'])){
				$res['res']=ContentModel::articleAction($_POST);
				$res['status']=1;
			}
		}
		echo json_encode($res);
	}

	private function sort(){

		$this->obj->assign('bread',$this->bread(2,'内容','c','分类设置'));
		$this->obj->assign('conActive',' class="active"');
		$this->obj->assign('sortActive',' class="active"');
		$this->obj->assign('rootUrl',$this->rootUrl);
		$this->obj->assign('url',$this->getUrl);

		$this->obj->assign('sortList',ContentModel::fetchSort());

		$this->obj->display('content_sort.html');
	}

	private function sortAct(){
		$res=array();
		$res['status']=0;
		if($this->isAjax()){
			if(isset($_POST)&&!empty($_POST['i'])&&!empty($_POST['a'])){
				$res['res']=ContentModel::sortAction($_POST);
				$res['status']=1;
			}
		}
		echo json_encode($res);
	}
}