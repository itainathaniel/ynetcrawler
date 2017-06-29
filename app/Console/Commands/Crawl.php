<?php

namespace App\Console\Commands;

use App\Headline;
use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class Crawl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ynet:crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl Ynet for the headline';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $ynet = new Crawler(
            file_get_contents('http://www.ynet.co.il')
        );
        $headline = $ynet->filter('body .top-story-main');

        $title = $headline
            ->filter('.title')
            ->extract(array('_text', 'href'));
        $subtitle = $headline
            ->filter('.sub-title')
            ->extract(array('_text'));
        $image = $headline
            ->filter('.media_image_link')
            ->extract(array('src', 'alt'));

        Headline::report([
            'title' => $title[0][0],
            'subtitle' => $subtitle[0],
            'image' => $image[0][0],
            'image_alt' => $image[0][1],
            'href' => $title[0][1]
        ]);
    }
}
