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
            //中文分词
            $tokenizer = new \XSTokenizerScws;

            $keywords = trim($data['keywords']);
            //词语拆分
            $words = $tokenizer->getTokens( $keywords );
            $where = '';
            foreach ($words as $key => $val) {
                if ($key == 0) {
                    $where = $val;
                } else {
                    $where .= ' OR ' . $val;
                }
            }
            $docs =  $xs->search->setQuery($where)
            ->setSort('chrono')
            ->setLimit( $num, ($page*$num)-$num )
            ->search();
            // 设置搜索语句
            $count = $search->count();
            // TDK
            $column_tdk_res = [
                'title' => $keywords,
                'description'   => '彬彬教育为您提供' . round( $count / 100 ) * 100 . '条：' . $keywords . '相关攻略，包括留学资讯、留学攻略等美国留学相关信息',
                'keywords'  => $keywords
            ];
            
            $this->assign([
                'docs' => $docs,
                'search' => $search,
                'count' => $count,
                'article_list'  => $article_list,
                'num'   =>  $num,
                'column_tdk_res'    => $column_tdk_res
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
