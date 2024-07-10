<?php

use yii\db\Migration;

/**
 * Class m240710_125816_insert_demo_data
 */
class m240710_125816_insert_demo_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Insert admin user
        $this->insert('user', [
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('admin123'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'status' => 1,
            'role' => 2,
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        // Insert regular users
        $this->insert('user', [
            'username' => 'user',
            'email' => 'user@test.com',
            'password_hash' => Yii::$app->security->generatePasswordHash('user123'),
            'auth_key' => Yii::$app->security->generateRandomString(),
            'status' => 1,
            'role' => 1,
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        for ($i = 1; $i <= 10; $i++) {
            $this->insert('user', [
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@test.com',
                'password_hash' => Yii::$app->security->generatePasswordHash('user' . $i . 'pwd'),
                'auth_key' => Yii::$app->security->generateRandomString(),
                'status' => 1,
                'role' => 1,
                'created_at' => time(),
                'updated_at' => time(),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Remove the inserted demo data
        $this->delete('user', ['username' => 'admin']);
        $this->delete('user', ['username' => 'user']);

        for ($i = 1; $i <= 10; $i++) {
            $this->delete('user', ['username' => 'user' . $i]);
        }
    }
}
