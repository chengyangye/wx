<?php 
$index = array(
		array(
				'name' => '我的管家',
				'sub' => array(
						array(
								'name'=>'账号信息',
								'file'=>'userCenter/myAccount'
						),
						array(
								'name'=>'修改密码',
								'file'=>'userCenter/updatePwd'
						),
//						array(
//								'name'=>'支付方式管理',
//								'file'=>'baseService/payset'
//						),
						array(
								'name'=>'公共账号管理',
								'file'=>'userCenter/pubs'
						),
						array(
								'name'=>'运营图表',
								'file'=>'userCenter/statisticalData'
						)
						
				)
		),
/*		
		array(
				'name' => '微服务',
				'sub' => array(
						array(
								'name'=>'应用管理',
								'file'=>'userCenter/sysapp'
						)
				)
		),
*/

                array(
                                'name' => '微官网',
                                'sub' => array(
                                                array(
                                                                'name'=>'模板预览',
                                                                'file'=>'web/setview'
                                                ),
                                                array(
                                                                'name'=>'关键字设置',
                                                                'file'=>'adds/webkeyword'
                                                ),
                                                array(
                                                                'name'=>'微官网设置',
                                                                'file'=>'businessModule/wsite'
                                                ),
//						array(
//								'name'=>'微官网菜单',
//								'file'=>'webmenu/set'
//						),
//						array(
//								'name'=>'游戏和功能',
//								'file'=>'web/yx'
//						)

                                )
                ),

		array(
				'name' => '自定义菜单',
				'sub' => array(
						array(
								'name'=>'授权设置',
								'file'=>'baseService/customSecImpower'
						),
						array(
								'name'=>'菜单设置',
								'file'=>'baseService/customMenu'
						 )
				       )
		      ),

                array(
                                'name' => '素材库',
                                'sub' => array(
                                                array(
                                                                'name'=>'首次关注',
                                                                'file'=>'baseService/firstAttention'
                                                ),
                                                array(
                                                                'name'=>'关键字回复',
                                                                'file'=>'baseService/keyword'
                                                ),

                                                array(
                                                                'name'=>'素材管理',
                                                                'file'=>'baseService/contresource'
                                                ),
                                                array(
                                                                'name'=>'LBS设置',
                                                                'file'=>'baseService/lbs'
                                                )
                                )
                  ),
                array(
                                'name' => '智能客服',
                                'sub' => array(
                                                array(
                                                                'name'=>'客服调教',
                                                                'file'=>'baseService/intelligentServiceGuide'
                                                )
                                )
                ),
                array(
                                'name' => '微门店',
                                'sub' => array(
                                                array(
                                                                'name'=>'门店管理',
                                                                'file'=>'businessModule/shop'
                                                ),
                                                array(
                                                                'name'=>'门店新增',
                                                                'file'=>'businessModule/shopadd'
                                                )
                                )
                ),

                array(
                                'name' => '增值功能',
                                'sub' => array(
                                                'sub' => array(
                                                                'name' => '360全景图',
                                                                'sub' => array(
                                                                                'name'=>'全景图管理',
                                                                                array(

                                                                                                'file'=>'quanjing/qj'
                                                                                ),
                                                                                'name'=>'添加全景图',
                                                                                array(

                                                                                                'file'=>'quanjing/qjadd'
                                                                                )
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微相册',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'相册设置',
                                                                                                'file'=>'./xiangce/set'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'相册管理',
                                                                                                'file'=>'./xiangce/list'
                                                                                )
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微信墙',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'微信墙设置',
                                                                                                'file'=>'wall/set'
                                                                                ),
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微留言',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'留言板设置',
                                                                                                'file'=>'liuyan/set'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'留言管理',
                                                                                                'file'=>'liuyan/mg'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'黑名单管理',
                                                                                                'file'=>'liuyan/hei'
                                                                                )
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微话题',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'微吧配置',
                                                                                                'file'=>'marketingPromotion/weiba'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'话题管理',
                                                                                                'file'=>'marketingPromotion/weibaht'
                                                                                )
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微调研',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'调研管理',
                                                                                                'file'=>'businessModule/microSurvey'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'调研新增',
                                                                                                'file'=>'businessModule/microSurveyAdd'
                                                                                )

                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微预约',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'预约管理',
                                                                                                'file'=>'businessModule/onlineBooking'
                                                                                ),
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微投票',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'微投票管理',
                                                                                                'file'=>'businessModule/microVote'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'微投票新增',
                                                                                                'file'=>'businessModule/microVoteAdd'
                                                                                )
                                                                )
                                                ),
                                                'sub' => array(
                                                                'name' => '微喜帖',
                                                                'sub' => array(
                                                                                 array(
                                                                                                'name'=>'功能设置',
                                                                                                'file'=>'xitie/index'
                                                                                    )
                                                                         )
                                                ),
                                                'sub' => array(
                                                                'name' => '微贺卡',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'贺卡大全',
                                                                                                'file'=>'businessModule/whkdq'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'微贺卡设置',
                                                                                                'file'=>'businessModule/whk'
                                                                                )
                                                                )
                                                )
                                )
                ),


		array(
                                'name' => '促销功能',
				'sub' => array(
                                                array(
                                                                'name' => '微信会员卡',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'会员卡设置',
                                                                                                'file'=>'businessModule/microMemberCard'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'会员卡添加',
                                                                                                'file'=>'businessModule/microMemberCardAdd'
                                                                                )
                                                                )
                                                ),
                                                array(
                                                                'name' => '微团购',
                                                                'sub' => array(
                                                                                array(
                                                                                                'name'=>'微团购设置',
                                                                                                'file'=>'businessModule/microGroupBuy'
                                                                                ),
                                                                                array(
                                                                                                'name'=>'微团购新增',
                                                                                                'file'=>'businessModule/microGroupBuyAdd'
                                                                                )

                                                                )
                                                ),
						array(
								'name'=>'优惠券',
								'file'=>'marketingPromotion/discountCoupon'
						),
						array(
								'name'=>'刮刮卡',
								'file'=>'marketingPromotion/ggk'
						),
						array(
								'name'=>'幸运机',
								'file'=>'marketingPromotion/xyj'
						),
						array(
								'name'=>'大转盘',
								'file'=>'marketingPromotion/xydzp'
						),
						array(
								'name'=>'一站到底',
								'file'=>'marketingPromotion/yzdd'
						),
						array(
								'name'=>'一站到底题库管理',
								'file'=>'marketingPromotion/yzddtk'
						)						
				)
		),
		
		
                array(
                                'name' => '快速主页向导',
                                'sub' => array(
                                            array(
                                                            'name' => '微外卖',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'公司设置',
                                                                                            'file'=>'diancai/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'菜品分类管理',
                                                                                            'file'=>'diancai/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'菜品管理',
                                                                                            'file'=>'diancai/loupanhuxing'
                                                                            ),

                                                                            array(
                                                                                            'name'=>'订单管理',
                                                                                            'file'=>'diancai/loupanhaibao'
                                                                            ),
                                                                    /*	array(
                                                                                            'name'=>'楼盘相册',
                                                                                            'file'=>'diancai/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'房友印象',
                                                                                            'file'=>'diancai/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'diancai/zhuanjiadianping'
                                                                            )*/
                                                            )
                                            ),
                                            array(
                                                            'name' => '微房产',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'楼盘简介',
                                                                                            'file'=>'fangchan/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'楼盘海报',
                                                                                            'file'=>'fangchan/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'子楼盘',
                                                                                            'file'=>'fangchan/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'楼盘户型',
                                                                                            'file'=>'fangchan/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'楼盘相册',
                                                                                            'file'=>'fangchan/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'房友印象',
                                                                                            'file'=>'fangchan/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'fangchan/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微汽车',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'关键字回复',
                                                                                            'file'=>'car/keyword'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'品牌管理',
                                                                                            'file'=>'car/pinpai'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'车系管理',
                                                                                            'file'=>'car/chexi'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'车型管理',
                                                                                            'file'=>'car/chexing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'销售管理',
                                                                                            'file'=>'car/xiaoshou'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'预约保养',
                                                                                            'file'=>'car/yyby'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'预约试驾',
                                                                                            'file'=>'car/yysj'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'车主关怀',
                                                                                            'file'=>'car/guanhuai'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微酒店',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'酒店管理',
                                                                                            'file'=>'jiudian/set'
                                                                            ),
                                                            )
                                            ),

                            /*
                                            array(
                                                            'name' => '微商城',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'关键字设置',
                                                                                            'file'=>'adds/shopkeyword'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'商城设置',
                                                                                            'file'=>'adds/shopstyle'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'商品分类管理',
                                                                                            'file'=>'adds/shangcheng-1'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'商品管理',
                                                                                            'file'=>'adds/shangcheng-2'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'订单管理',
                                                                                            'file'=>'adds/shangcheng-3'
                                                                            )
                                                            )
                                            ),*/
                                            array(
                                                            'name' => '微食品',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'食品公司简介',
                                                                                            'file'=>'shipin/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'shipin/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'销售门店',
                                                                                            'file'=>'shipin/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'会员服务',
                                                                                            'file'=>'shipin/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'食品相册',
                                                                                            'file'=>'shipin/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'会员印象',
                                                                                            'file'=>'shipin/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户点评',
                                                                                            'file'=>'shipin/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微美容',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'美容机构简介',
                                                                                            'file'=>'meirong/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'meirong/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'美容店面',
                                                                                            'file'=>'meirong/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'美容服务',
                                                                                            'file'=>'meirong/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传相册',
                                                                                            'file'=>'meirong/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户印象',
                                                                                            'file'=>'meirong/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'meirong/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),

                                            array(
                                                            'name' => '微旅游',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'旅游区简介',
                                                                                            'file'=>'lvyou/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'lvyou/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'景区',
                                                                                            'file'=>'lvyou/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'景点',
                                                                                            'file'=>'lvyou/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'风景相册',
                                                                                            'file'=>'lvyou/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'游客印象',
                                                                                            'file'=>'lvyou/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'lvyou/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微健身',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'俱乐部简介',
                                                                                            'file'=>'jianshen/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'jianshen/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'健身房',
                                                                                            'file'=>'jianshen/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'健身室',
                                                                                            'file'=>'jianshen/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'健身相册',
                                                                                            'file'=>'jianshen/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'会员印象',
                                                                                            'file'=>'jianshen/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'jianshen/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微教育',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'培训机构简介',
                                                                                            'file'=>'jiaoyu/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'jiaoyu/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'校区',
                                                                                            'file'=>'jiaoyu/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'培训课程',
                                                                                            'file'=>'jiaoyu/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'教学相册',
                                                                                            'file'=>'jiaoyu/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'学员印象',
                                                                                            'file'=>'jiaoyu/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'家长点评',
                                                                                            'file'=>'jiaoyu/zhuanjiadianping'
                                                                            )
                                                            )

                                            ),
                                            array(
                                                            'name' => '微政务',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'政务部门简介',
                                                                                            'file'=>'zhengwu/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'服务海报',
                                                                                            'file'=>'zhengwu/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'服务窗口',
                                                                                            'file'=>'zhengwu/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'服务类型',
                                                                                            'file'=>'zhengwu/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'政务相册',
                                                                                            'file'=>'zhengwu/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'市民印象',
                                                                                            'file'=>'zhengwu/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'领导点评',
                                                                                            'file'=>'zhengwu/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微物业',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'物业公司简介',
                                                                                            'file'=>'wuye/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'wuye/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'小区',
                                                                                            'file'=>'wuye/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'业主服务',
                                                                                            'file'=>'wuye/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'物业相册',
                                                                                            'file'=>'wuye/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'业主印象',
                                                                                            'file'=>'wuye/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'wuye/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微KTV',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'经营主体简介',
                                                                                            'file'=>'ktv/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'ktv/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'KTV分店',
                                                                                            'file'=>'ktv/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'KTV包厢',
                                                                                            'file'=>'ktv/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传相册',
                                                                                            'file'=>'ktv/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户印象',
                                                                                            'file'=>'ktv/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户点评',
                                                                                            'file'=>'ktv/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微酒吧',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'经营主体简介',
                                                                                            'file'=>'jiuba/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'jiuba/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'酒吧',
                                                                                            'file'=>'jiuba/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'特色酒水',
                                                                                            'file'=>'jiuba/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'酒吧相册',
                                                                                            'file'=>'jiuba/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'会员印象',
                                                                                            'file'=>'jiuba/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户点评',
                                                                                            'file'=>'jiuba/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微婚庆',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'婚庆公司简介',
                                                                                            'file'=>'hunqing/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'hunqing/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'婚庆门店',
                                                                                            'file'=>'hunqing/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'成功案例',
                                                                                            'file'=>'hunqing/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'婚庆相册',
                                                                                            'file'=>'hunqing/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户印象',
                                                                                            'file'=>'hunqing/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户点评',
                                                                                            'file'=>'hunqing/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微装修',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'装修公司简介',
                                                                                            'file'=>'zhuangxiu/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'装修海报',
                                                                                            'file'=>'zhuangxiu/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'门店',
                                                                                            'file'=>'zhuangxiu/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'成功案例',
                                                                                            'file'=>'zhuangxiu/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'装修相册',
                                                                                            'file'=>'zhuangxiu/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户印象',
                                                                                            'file'=>'zhuangxiu/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'专家点评',
                                                                                            'file'=>'zhuangxiu/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                            array(
                                                            'name' => '微花店',
                                                            'sub' => array(
                                                                            array(
                                                                                            'name'=>'经营主体简介',
                                                                                            'file'=>'huadian/loupanjianjie'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'宣传海报',
                                                                                            'file'=>'huadian/loupanhaibao'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'门店',
                                                                                            'file'=>'huadian/ziloupan'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'特色鲜花',
                                                                                            'file'=>'huadian/loupanhuxing'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'花店相册',
                                                                                            'file'=>'huadian/loupanxiangce'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户印象',
                                                                                            'file'=>'huadian/fangyouyinxiang'
                                                                            ),
                                                                            array(
                                                                                            'name'=>'客户点评',
                                                                                            'file'=>'huadian/zhuanjiadianping'
                                                                            )
                                                            )
                                            ),
                                )
                ),
);
