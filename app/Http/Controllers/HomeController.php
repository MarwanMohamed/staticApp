<?php

namespace App\Http\Controllers;

use App\Jobs\QuoteQueue;
use App\Mail\QuoteMail;
use App\Mail\SubscriptionMail;
use App\Mail\QuoteForClientMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Spatie\Newsletter\Facades\Newsletter;
use Twilio\Rest\Client;


class HomeController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $previous = app('url')->previous() . '#subscribe';

        $validator = Validator::make($request->all(), ['subscriber_email' => 'required|email']);

        if ($validator->fails()) {
            return redirect()->to($previous)->with(['error' => trans('messages.subscriber_email.validation')]);
        }
        try {
            if (Newsletter::isSubscribed($request->get('subscriber_email'))) {
                return redirect()->to($previous)->with(['error' => trans('messages.subscriber_email.already_subscribed')]);
            } else {
                Newsletter::subscribe($request->get('subscriber_email'));

                Mail::to($request->get('subscriber_email'))->send(new SubscriptionMail());

                return redirect()->to($previous)->with(['success' => trans('messages.subscriber_email.subscribed')]);
            }
        } catch (\Exception $exception) {
            return redirect()->to($previous)->with(['error' => $exception->getMessage()]);
        }
    }


    public function getQuote(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required', 'last_name' => 'required',
            'email' => 'required|email', 'phone' => 'required', 'text' => 'required',
        ]);

        $data = $request->all();
        Mail::to('m.ramadan@qatarbima.com')->send(new QuoteMail($data));
        Mail::to('allan@qatarbima.com')->send(new QuoteMail($data));
        Mail::to('m.saleh@qatarbima.com')->send(new QuoteMail($data));
        Mail::to('maria@qatarbima.com')->send(new QuoteMail($data));
//      QuoteQueue::dispatch();

//        return $this->sendWhatsAppMessage();

        Mail::to('mohamed@a.com')->send(new QuoteForClientMail());

        return redirect()->back()->with(['success' => 'email send successfully']);
    }


    private function sendWhatsAppMessage(): JsonResponse
    {
        $twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));

        try {
            $twilio->messages->create(
                "whatsapp:+" . '201112168033',
                [
                    "from" => 'whatsapp:' . env('TWILIO_WHATSAPP_NUMBER'),
                    "body" => 'Hello From code',
                ]
            );

            return response()->json(['message' => 'WhatsApp message sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
