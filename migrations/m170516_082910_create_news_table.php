<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m170516_082910_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'name' => $this->string(30),
            'description' => $this->string(2000),
            'date' => $this->integer(),
            'photo' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
