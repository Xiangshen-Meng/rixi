<?php

use App\Topic;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('TopicTableSeeder');
    }

}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(['name' => 'rixi', 'email' => 'wqnnjm@gmail.com', 'password' => Hash::make('123456'), 'avatar' => 'avatar1.png']);
        User::create(['name' => '日系', 'email' => 'wqnnjm@163.com', 'password' => Hash::make('123456'), 'avatar' => 'avatar2.png']);
    }

}

class TopicTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('topics')->delete();

        Topic::create(['title' => '有哪些好的日系女装品牌？', 'description' => '求达人推荐日系（校园、甜美、森女均可）女装品牌，一直好奇在哪里能买到比较好一点的日系衣服呢？', 'user_id' => 1]);
        Topic::create(['title' => '有哪些好的日系女装品牌？', 'description' => '求达人推荐日系（校园、甜美、森女均可）女装品牌，一直好奇在哪里能买到比较好一点的日系衣服呢？', 'user_id' => 2]);
        Topic::create(['title' => '有哪些好的日系女装品牌？', 'description' => '求达人推荐日系（校园、甜美、森女均可）女装品牌，一直好奇在哪里能买到比较好一点的日系衣服呢？', 'user_id' => 1]);
    }

}
