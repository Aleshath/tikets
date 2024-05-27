<?php

namespace app\models;


use Yii;
use yii\db\Query;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "place".
 *
 * @property int $id
 * @property string $title
 * @property string $discription
 * @property int $event_id
 * @property int $count_seats
 *
 * @property Event $event
 */
class Place extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'place';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'discription', 'event_id', 'count_seats'], 'required'],
            [['event_id', 'count_seats'], 'integer'],
            [['title', 'discription'], 'string', 'max' => 255],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::class, 'targetAttribute' => ['event_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'discription' => 'Discription',
            'event_id' => 'Event ID',
            'count_seats' => 'Count Seats',
        ];
    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::class, ['id' => 'event_id']);
    }
    public static function getPlaceEventId()
    {
        return (new Query())
            ->select(['title', 'discription'])
            ->from('place')
            ->indexBy('event_id')
            ->all();

        // VarDumper::dump($a, true, 10); die;
    }
}
