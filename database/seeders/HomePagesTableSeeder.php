<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomePagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_pages')->delete();
        
        \DB::table('home_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'seo_title' => 'World custom boxes',
                'seo_description' => 'World custom boxes',
                'seo_keyword' => NULL,
                'company_intro' => '<p style="margin: 0px 0px 15px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis purus egestas, faucibus sem in, scelerisque libero. Aenean blandit et est nec auctor. Aenean sollicitudin dui quis sem viverra, quis commodo libero mollis. Cras sed neque a magna blandit sollicitudin vitae non enim. Integer sit amet orci ut sapien congue efficitur ut vel nisi. In consectetur nulla at auctor suscipit. Praesent posuere rutrum ipsum.Vivamus malesuada, ante sed pellentesque varius, turpis est mattis odio, sit amet tincidunt purus ante non urna. Quisque ornare ex a nisl placerat sodales. Nam luctus nec erat sed elementum. Ut ac nibh vitae tellus congue iaculis non quis tellus. Vestibulum bibendum purus vel est porttitor, ut efficitur risus maximus. Mauris quis nisi efficitur, pellentesque odio vitae, accumsan est. Aliquam tincidunt sem non dictum imperdiet. Ut sit amet est iaculis, pharetra tellus vitae, porta justo. Nulla non maximus libero, ac maximus libero. Nam lobortis, nibh at semper ullamcorper, tellus sem luctus diam, ut fringilla mi massa in turpis. Cras ex augue, iaculis eu venenatis ut, porttitor non nisi. In in enim quis ante egestas finibus at id ante.</p>',
                'short_description' => 'hey how are you',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id neque a est iaculis sollicitudin maximus et lorem. Ut quis efficitur odio, quis iaculis mauris. Donec id augue quis ante interdum dapibus. Fusce tempor turpis at urna hendrerit pharetra. Nullam condimentum quam non dolor molestie, venenatis egestas tellus imperdiet. Suspendisse vel posuere dolor. Duis ultrices, justo sed ornare porta, diam leo laoreet nisi, at varius arcu mi et sem. Nam at dignissim arcu. Morbi sodales ipsum sit amet erat scelerisque viverra. Donec imperdiet magna augue, non tempus turpis consequat ac. Suspendisse ultrices orci vitae nulla feugiat, nec dapibus sem aliquam.</p>
<p>&nbsp;</p>
<p>Morbi varius dignissim leo, in scelerisque arcu vehicula ac. Sed erat libero, accumsan non sem non, tincidunt accumsan justo. Nulla facilisi. Quisque blandit volutpat mi. Fusce diam justo, sagittis non vehicula vitae, euismod at dui. Vivamus justo tellus, consectetur id hendrerit nec, fermentum eu mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc mattis nibh at mi laoreet iaculis. Etiam et metus ut purus efficitur malesuada. Vivamus varius, ligula in ultricies malesuada, metus tortor mattis turpis, eu viverra felis neque sed odio. Vestibulum dolor tortor, vehicula id urna ut, mattis pellentesque lorem.</p>
<p>&nbsp;</p>
<h3>Why choose us?</h3>
<p>Praesent dictum odio odio, at rhoncus arcu tempor a. Donec lacus odio, malesuada at ligula aliquam, consectetur pulvinar tortor. Nam neque quam, bibendum sed ex porttitor, porta molestie enim. Proin enim turpis, viverra nec metus eu, blandit luctus ex. Suspendisse interdum lorem quis diam suscipit, ac mattis purus semper. Cras porta gravida tristique. Donec aliquet elit nibh, at pellentesque enim gravida nec. Nullam lacinia, odio ut malesuada placerat, augue enim suscipit felis, sed volutpat libero magna sit amet urna. Aenean condimentum vehicula lacinia.</p>
<p>&nbsp;</p>
<p>Sed luctus ligula eget dolor vehicula pellentesque. Nunc neque tellus, pellentesque sed ligula non, auctor vehicula quam. In porttitor mauris id turpis aliquam finibus. In hendrerit tortor sit amet nisl volutpat gravida. Nullam nunc felis, mattis nec lectus quis, pretium pellentesque augue. Proin cursus nunc semper nibh fringilla viverra. In vitae gravida sem. Praesent bibendum ornare vehicula. Nam sed ex quis nibh tristique aliquet. Duis sagittis libero eu viverra eleifend. Duis condimentum mi et aliquam fringilla. In mollis sapien turpis, ut finibus quam pellentesque sit amet. Nunc at nisi dapibus, vehicula arcu ac, imperdiet sem. Etiam aliquet, ante id auctor pretium, ex mauris auctor nisi, vitae molestie tortor odio vitae sapien.</p>
<p>&nbsp;</p>
<p>Aliquam et pretium eros. Vestibulum sollicitudin tincidunt ante id consectetur. Nam ac luctus sapien. Nunc accumsan libero quis tellus semper, vel vulputate ante consectetur. Integer aliquet nibh eget neque consectetur tincidunt. Ut pulvinar ut nisl ut pellentesque. Proin fermentum turpis id felis commodo rutrum. Nullam quis lectus non sapien volutpat feugiat sed eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus ultrices risus nec condimentum consequat.</p>',
                'created_at' => '2021-10-28 12:40:51',
                'updated_at' => '2021-10-31 16:40:44',
            ),
        ));
        
        
    }
}