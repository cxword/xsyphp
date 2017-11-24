<?php
 
class HomeController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
    	// $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

     //    if ($keyword) {
     //        $items = (new ItemModel())->search($keyword);
     //    } else {
     //        $items = (new ItemModel)->selectAll();
     //    }

     //    $this->assign('title', '全部条目');
     //    $this->assign('keyword', $keyword);
     //    $this->assign('items', $items);
        $this->render();
    }
    public function dome(){
        var_dump('aa');
    }

}