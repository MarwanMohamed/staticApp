<?php

namespace App\Jobs;

use App\Mail\QuoteForClientMail;
use App\Mail\QuoteMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class QuoteQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('m.ramadan@qatarbima.com')->send(new QuoteMail($this->data));
        Mail::to('allan@qatarbima.com')->send(new QuoteMail($this->data));
        Mail::to('m.saleh@qatarbima.com')->send(new QuoteMail($this->data));
        Mail::to('maria@qatarbima.com')->send(new QuoteMail($this->data));

    }
}
