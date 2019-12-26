<?php

use yii\db\Migration;

/**
 * Class m191226_143940_update_books_table_add_year_column
 */
class m191226_143940_update_books_table_add_year_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('books', 'year', $this->integer()->unsigned());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('books', 'year');

        return false;
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191226_143940_update_books_table_add_year_column cannot be reverted.\n";

        return false;
    }
    */
}
