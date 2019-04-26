<?php
namespace app\home\controller;
// 文章类型表
use app\home\model\WhArticleType;

class Search extends Common
{
    public function index(){


        $article_model = new WhArticleType();
        $article_list = change_key($article_model->field('id,title,rewrite')->select()->toArray());
        $data = input('');
        $page = input('page') ? input('page') : 1;
        $num = input('num') ? inut('num') : 8;
        try {
            include '/usr/local/xunsearch/sdk/php/lib/XS.php';
            $xs = new \XS('demo'); // 创建 XS 对象，项目名称为：demo
            $search = $xs->search;

            // 关键词
            $query = trim($data['keywords']);


            // $docs = $search->setQuery( "subject:$query" )->setFuzzy()->setLimit( $num, ($page*$num)-$num )->setSort('chrono')->search();
            // $count = $search->lastCount;



            // 设置搜索语句
            $count = $search->count($query);
            $docs = $search->search($query);
            
            // $search->setQuery($query);
            // 开启模糊搜索
            $search->setFuzzy();
            // $search->addWeight('subject', $query); // 增加附加条件：提升标题中包含 'xunsearch' 的记录的权重
            $search->setLimit($num, ($page*$num)-$num);
            // 排序
            $search->setSort('chrono');

            // $docs = $search->search();  //  搜索 ‘ 测试’
            // $count = $search->count();

            
            $this->assign([
                'docs' => $docs,
                'search' => $search,
                'count' => $count,
                'article_list'  => $article_list,
                'num'   =>  $num
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        return $this-> fetch();
    }

    public function add(){
        try {
            include '/usr/local/xunsearch/sdk/php/lib/XS.php';
            $xs = new \XS('demo'); // 创建 XS 对象，项目名称为：demo
            $index = $xs->index;
            $index->flushLogging();
            $data = array(
                'pid' => 9, // 此字段为主键，必须指定
                'subject' => '顶级美国蓝带高中 看别人是如何申请成功的4？',
                'message' => '美国内容4'
            );
 
            // 创建文档对象
            $doc = new \XSDocument;
            $doc->setFields($data);
             
            // 添加到索引数据库中
            $res = $index->add($doc);
            dump($res);
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function clean(){
        try {
            include '/usr/local/xunsearch/sdk/php/lib/XS.php';
            $xs = new \XS('demo'); // 创建 XS 对象，项目名称为：demo
            $index = $xs->index;
            $index->flushLogging();
            $res = $index->clean();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
