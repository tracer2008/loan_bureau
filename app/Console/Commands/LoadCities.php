<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use App\Services\City\CityService;
use App\Http\Controllers\CityController;

class LoadCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Загрузка городов в базу из файла cities.json';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $outputStyle = new OutputFormatterStyle('white', '#ff0000', ['bold']);
        $this->output->getFormatter()->setStyle('fire', $outputStyle);

        $service = app(CityService::class);

        $file = file_get_contents(resource_path('files/cities.json'));

        $cities = json_decode($file, true);

        $progressBar = $this->output->createProgressBar(count($cities));
        $progressBar->start();

        foreach ($cities as $city) {
            $service->saveCity($city);
            $progressBar->advance();
        }
        $progressBar->finish();

        $this->output->writeln('<fire>Города загружены</fire>');

        return 0;
    }
}
