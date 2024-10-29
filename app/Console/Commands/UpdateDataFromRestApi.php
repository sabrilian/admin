<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://dp-be.vercel.app',
    'timeout' => 5.0,
]);

$response = $client->request('GET', '/api');

// Assuming the API returns JSON data
$data = json_decode($response->getBody(), true);

class UpdateDataFromRestApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-data-from-rest-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
    }
}
