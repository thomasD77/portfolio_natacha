<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FacebookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('facebooks')->insert([
            'title'=>'Coronasteun in Oostende',
            'code' => '<div class="fb-post" data-href="https://www.facebook.com/NatachaWaldmannOostende/posts/951084555668460" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/NatachaWaldmannOostende/posts/951084555668460" class="fb-xfbml-parse-ignore"><p>🙌🏻 Dankzij subsidies van de Vlaamse en federale overheid kon &#064;oostendedestadaanzee vorig jaar in september starten met...</p>Geplaatst door <a href="https://www.facebook.com/NatachaWaldmannOostende/">Natacha Waldmann</a> op&nbsp;<a href="https://www.facebook.com/NatachaWaldmannOostende/posts/951084555668460">Zondag 9 mei 2021</a></blockquote></div>',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('facebooks')->insert([
            'title'=>'Moederdag',
            'code' => '<div class="fb-post" data-href="https://www.facebook.com/NatachaWaldmannOostende/posts/950849302358652" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/NatachaWaldmannOostende/posts/950849302358652" class="fb-xfbml-parse-ignore"><p>🤍 Fijne moederdag aan alle mama’s, aan de mijne maar ook aan de jouwe. Aan mama’s zonder kindje of mama’s van een...</p>Geplaatst door <a href="https://www.facebook.com/NatachaWaldmannOostende/">Natacha Waldmann</a> op&nbsp;<a href="https://www.facebook.com/NatachaWaldmannOostende/posts/950849302358652">Zondag 9 mei 2021</a></blockquote></div>',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('facebooks')->insert([
            'title'=>'Vaccin',
            'code' => '<div class="fb-post" data-href="https://www.facebook.com/NatachaWaldmannOostende/posts/949110629199186" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/NatachaWaldmannOostende/posts/949110629199186" class="fb-xfbml-parse-ignore"><p>💉Benieuwd wanneer jij aan de beurt bent voor je vaccin?

📆 Check hier de richtdata waarop jij en je familie geprikt...</p>Geplaatst door <a href="https://www.facebook.com/NatachaWaldmannOostende/">Natacha Waldmann</a> op&nbsp;<a href="https://www.facebook.com/NatachaWaldmannOostende/posts/949110629199186">Vrijdag 7 mei 2021</a></blockquote></div>',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('facebooks')->insert([
            'title'=>'OverKopHuis',
            'code' => '<div class="fb-post" data-href="https://www.facebook.com/NatachaWaldmannOostende/posts/947805152663067" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/NatachaWaldmannOostende/posts/947805152663067" class="fb-xfbml-parse-ignore"><p>🗣 Deze week maakte minister Beke bekend dat het OverKophuis Oostende erkend wordt en vanaf nu dus structurele steun...</p>Geplaatst door <a href="https://www.facebook.com/NatachaWaldmannOostende/">Natacha Waldmann</a> op&nbsp;<a href="https://www.facebook.com/NatachaWaldmannOostende/posts/947805152663067">Woensdag 5 mei 2021</a></blockquote></div>',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
