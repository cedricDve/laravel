<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqModel;
class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FaqModel::create(     
        ['question'=> "question 1",
        'category' =>"3",
        'shortansw' =>"Im i-am so happy",
        'longansw'=> " sso sooo happy " ,]

    );
    FaqModel::create(     
        ['question'=> "question akba ",
    'category' => "2",
    'shortansw' =>"Im i-am so happy",
    'longansw'=> " sso sooo happy " ,] 
    );
    FaqModel::create(     
        ['question'=> "question aez ",
    'category' => "1",
    'shortansw' =>"Im i-am so happy",
    'longansw'=> " sso sooo happy " ,] 
    );
        
    }
    
}
