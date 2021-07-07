<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\WebhookClient\ProcessWebhookJob as SpatieProcessWebhookJob;

class ProcessWebhookJob extends SpatieProcessWebhookJob
{
   /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // @TODO hande / parse the $data
        $data = json_decode($this->webhookCall, true);
        \Log::info($data);

        // exit gracefully
        http_response_code(200);
    }
}
