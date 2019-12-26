<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m191226_115807_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'author' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'rating' => $this->integer()->unsigned()
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-books-author',
            'books',
            'author'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-books-author',
            'books',
            'author',
            'authors',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
