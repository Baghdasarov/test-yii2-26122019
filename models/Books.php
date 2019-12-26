<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property int $author
 * @property string $name
 * @property int|null $rating
 *
 * @property Authors $author0
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'name'], 'required'],
            [['author', 'rating'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['author'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['author' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'name' => 'Name',
            'rating' => 'Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(Authors::className(), ['id' => 'author']);
    }

    public function getAuthorLink()
    {
        $url = Url::toRoute(['author/view', 'id' => $this->author0->id]);
        $author = $this->author0->name;

        return '<a href="' . $url . '">' . $author . '</a>';
    }
}
