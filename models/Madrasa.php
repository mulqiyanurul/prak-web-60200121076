<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "madrasa".
 *
 * @property int $id
 * @property string $nama_madrasa
 * @property int $jumlah_peserta
 * @property string $provinsi_madrasa
 */
class Madrasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'madrasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_madrasa', 'jumlah_peserta', 'provinsi_madrasa'], 'required'],
            [['jumlah_peserta'], 'integer'],
            [['nama_madrasa'], 'string', 'max' => 11],
            [['provinsi_madrasa'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_madrasa' => 'Nama Madrasa',
            'jumlah_peserta' => 'Jumlah Peserta',
            'provinsi_madrasa' => 'Provinsi Madrasa',
        ];
    }
}
