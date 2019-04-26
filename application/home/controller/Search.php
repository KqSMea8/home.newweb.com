<?php
namespace app\home\controller;
// 文章类型表
use app\home\model\WhArticleType;
// 背景提升表
use app\home\model\PromoteModel;
// 活动表
use app\home\model\ActivityModel;
// 活动类型表
use app\home\model\ActivityTypeModel;
// 背景提升类型表
use app\home\model\PromoteTypeModel;
use think\db;
class Search extends Common
{
    public function index(){
        // 背景提升表
        $promote_model = new PromoteModel();
        // 文章类型表
        $article_model = new WhArticleType();
        // 活动表
        $activity_model = new ActivityModel();
        // 活动类型表
        $activity_type_model = new ActivityTypeModel();
        // 背景提升类型表
        $Promote_type_model = new PromoteTypeModel();

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
		dump($words);die;
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

            // 活动推荐
            $activity_info = $activity_model->where('open',1)->where('recommend_id','like','%37%')->field('id,title,details_portrait,lecture_time,type')->order('sort desc')->limit(2)->select();

            foreach ($activity_info as $k => &$v) {
                $activity_type = $activity_type_model->where('id',$v['type'])->field('rewrite')->find();
                $v['details_portrait'] = config('admin_path').$v['details_portrait'];
                $v['rewrite'] = $activity_type['rewrite'];
            }

            //背景提升推荐
            $promote_info = $promote_model->where('open',1)->where('recommend_id','like','%30%')->field('id,title,thumbnail,type')->order('sort desc')->limit(3)->select();
            foreach ($promote_info as $kk => &$vv) {
                $proType = $Promote_type_model->where('id',$vv['type'])->field('rewrite')->find();
                $vv['thumbnail'] = config('admin_path').$vv['thumbnail'];
                $vv['rewrite'] = $proType['rewrite']; 
            }

            //热门标签
            $label_list = Db::table('clt_new_label')->where('recommend_id','like','%45%')->field('title,href')->select();
            $this->assign('label_list',$label_list);


            $this->assign([
                'docs' => $docs,
                'search' => $search,
                'count' => $count,
                'article_list'  => $article_list,
                'num'   =>  $num,
                'column_tdk_res'    => $column_tdk_res,
                'label_list'    =>  $label_list,
                'promote_info'  => $promote_info,
                'activity_info'   => $activity_info
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
