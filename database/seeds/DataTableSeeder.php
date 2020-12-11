<?php

use Illuminate\Database\Seeder;

use App\User as UserEloquent;
use App\Student as StudentEloquent;
use App\Score as ScoreEloquent;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = UserEloquent::create(['name'=>'Nelson', 'email'=>'nelson.huang@wanin.tw', 'password'=>bcrypt('asdfasdf')]);

            $student = StudentEloquent::create(['user_id'=>$user->id, 'no'=>'s1234567890', 'tel'=>'12341234']);

            $score = ScoreEloquent::create(['student_id'=>$student->id, 'chinese'=>90, 'english'=>80, 'math'=>70, 'total'=>240]);
    }
}
