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
        ['question'=> "What are we doing what your data ? ",
        'category' =>"1",
        'shortansw' =>"Absolutely nothing.",
        'longansw'=> " We are not using your data even selling it. We do not use your data. The only data that can be used is your email-address, so that an admin can reply to your email." ]

    );
    FaqModel::create(     
        ['question'=> "Who can see my data ? ",
        'category' =>"1",
        'shortansw' =>"Posts and Profiles are set public.",
        'longansw'=> " Any use visitting this website can view your profile informations and your posts." ,]);
        FaqModel::create(     
            ['question'=> "How can I delete my account ? ",
            'category' =>"1",
            'shortansw' =>"Contact-us and put as subject 'delete my account'.",
            'longansw'=> "Able to delete you'r account you need to contact an administrator, therefor you can Contact-us and put as subject 'delete my account'. An administrator will reply to you'r request as soon as possible." ,]);

    FaqModel::create(     
        ['question'=> "What can I do on this website ? ",
    'category' => "2",
    'shortansw' =>"Blog-functionalities, find information about the website and contact administrators, administrator functionalities, Buy courses , Edit your profie",
    'longansw'=> "You can easily create, edit or delete posts, view all posts or even search for a post or an author using the search-bar or navigating to the searc-page. You can find all the informations about this website on the info page and the about page, aswell as the sources used for this project. Administrators will be able to easily modify posts,users configration, the Faq Page, and reply to emails." ,] 
    );
    FaqModel::create(     
        ['question'=> "How can I become an Administrator ?",
    'category' => "2",
    'shortansw' =>"An admin can promove you any time or you cant contact us and asking for beeing promoved to admin.",
    'longansw'=> " You can become an administrator in two different ways. 1) You can be promoved to admin at any time by one of our admins. 2) You can contact us and ask us for beeing promoved to admin." ,] 
    );
        
    }
    
}
