<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Contact;
use App\Smslog;
use App\Settings;

class NotificationController extends Controller
{
    //

    public function index()
    {
        $count = Contact::where('active', '=', 'Y')->count();

        $cost = Settings::where('setting', '=', 'SMS Cost')->value('value');

        $total = $count * $cost;


        return view('notification.index', compact('count', 'total'));
    }

    public function sms(Request $request)
    {

        $members = Contact::where('active', 'Y')->get();
        $count = $members->count();
        $cost = Settings::Where('setting', 'SMS Cost')->value('value');
        $total = $count * $cost;


        foreach ($members as $m)

        {

        try {

            $basic  = new \Nexmo\Client\Credentials\Basic(getenv("NEXMO_KEY"), getenv("NEXMO_SECRET"));
            $client = new \Nexmo\Client($basic);


            $phone = $m->phone;


            $message = $request->get('message');

            $default_country_code  = '61';
            $phone = ltrim($phone, '0');
            $receiverNumber = $default_country_code . $phone;

            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => '+61485827023',
                'text' => $message
            ]);

        } catch (Exception $e) {
            Alert::error("Error: " . $e->getMessage(), 'Error');

        }
        }

        Alert::success('SMS Sent Successfully', 'Success')->autoclose(1000);

        $e= new Smslog;
        $e->username = Auth::user()->username;
        $e->message = $request->get('message');
        $e->cost = $total;
        $e->save();

        return redirect(action('NotificationController@index'));
    }
}
