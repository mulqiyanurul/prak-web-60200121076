<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property int $id
 * @property int $no_ujian
 * @property int $nilai_ipa
 * @property int $nilai_ips
 * @property int|null $nilai__agama
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_ujian', 'nilai_ipa', 'nilai_ips'], 'required'],
            [['no_ujian', 'nilai_ipa', 'nilai_ips', 'nilai__agama'], 'integer'],
            [['no_ujian'], 'unique'],
            [['nilai__agama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_ujian' => 'No Ujian',
            'nilai_ipa' => 'Nilai Ipa',
            'nilai_ips' => 'Nilai Ips',
            'nilai__agama' => 'Nilai  Agama',
        ];
    }
}
