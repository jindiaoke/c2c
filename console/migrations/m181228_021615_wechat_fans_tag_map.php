<?php

use yii\db\Migration;

class m181228_021615_wechat_fans_tag_map extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%wechat_fans_tag_map}}', [
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'fans_id' => 'int(11) unsigned NOT NULL DEFAULT \'0\' COMMENT \'粉丝id\'',
            'tag_id' => 'int(10) unsigned NOT NULL DEFAULT \'0\' COMMENT \'标签id\'',
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='微信_粉丝标签关联表'");
        
        /* 索引设置 */
        $this->createIndex('mapping','{{%wechat_fans_tag_map}}','fans_id, tag_id',1);
        $this->createIndex('fanid_index','{{%wechat_fans_tag_map}}','fans_id',0);
        $this->createIndex('tagid_index','{{%wechat_fans_tag_map}}','tag_id',0);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%wechat_fans_tag_map}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

