<?php

namespace App\Console\Commands;



use App\Models\Blog;
use Illuminate\Console\Command;

class featuresUpdate extends Command
{

    protected $signature = 'features:update';
    protected $description = 'Update features information.';

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $adminArray = array("Vadimuk","NoVadimuk","Vanik");
        $admin = array_rand($adminArray, 1);

        $el = new Blog();
        $el->title = "New fetures ".date("d.m.y");;
        $el->info = "Presentation of new features by admin - ".$adminArray[$admin];

        $el->author = $adminArray[$admin];
        $el->contenter = $this->textgen();


        $el->save();
        echo "Insertion done!" . "\n";


    }

    public function textgen()
    {

        $array1 = array("- Updated graphics","- Updated effects");
        $a1 = array_rand($array1, 1);

        $array2 = array("- Changed train mechanics","- Changed mechanics of mechanism's movement");
        $a2 = array_rand($array2, 1);
        $text = "In this update, we want to introduce you to our new features.
                    The list of chips is presented below:
                    \n". $array1[$a1]."\n". $array2[$a2];



        return $text;
    }
}
