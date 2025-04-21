<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomScriptsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_scripts')->delete();
        
        \DB::table('custom_scripts')->insert(array (
            0 => 
            array (
                'created_at' => '2022-01-04 18:39:08',
                'id' => 1,
                'scripts' => '<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src=\'https://embed.tawk.to/5ed66cad4a7c62581799c62a/default\';
s1.charset=\'UTF-8\';
s1.setAttribute(\'crossorigin\',\'*\');
s0.parentNode.insertBefore(s1,s0);
})();
</script>',
                'updated_at' => '2022-01-04 18:39:08',
            ),
        ));
        
        
    }
}