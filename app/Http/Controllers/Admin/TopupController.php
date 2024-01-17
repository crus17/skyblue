<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Settings;
use App\Models\Tp_Transaction;
use App\Models\User;
use App\Notifications\AccountNotification;
use App\Traits\PingServer;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    use PingServer;

    //top up route
    public function topup(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user_bal = $user->account_bal + $request->amount;
        $user_bonus = $user->bonus + $request->amount;
        $user_roi = $user->roi + $request->amount;
        $user_Ref = $user->ref_bonus + $request->amount;

        if ($request->type == "Bonus") {
            User::where('id', $request['user_id'])
                ->update([
                    'bonus' => $user_bonus,
                    'account_bal' => $user_bal,
                ]);
        } elseif ($request->type == "balance") {
            User::where('id', $request->user_id)
                ->update([
                    'roi' => $user_roi,
                    'account_bal' =>  $user_bal,
                ]);
        } elseif ($request->type == "Ref_Bonus") {
            User::where('id', $request->user_id)
                ->update([
                    'ref_bonus' => $user_Ref,
                    'account_bal' =>  $user_bal,
                ]);
        } elseif ($request->type == "Profit") {
            User::where('id', $request->user_id)
                ->update([
                    'account_bal' =>  $user_bal,
                ]);
        } elseif ($request->type == "Deposit") {

            $dp = new Deposit();
            $dp->amount = $request['amount'];
            $dp->payment_mode = 'Express Deposit';
            $dp->status = 'Processed';
            $dp->plan = $request['user_pln'];
            $dp->user = $request['user_id'];
            $dp->save();

            User::where('id', $request['user_id'])
                ->update([
                    'account_bal' =>  $user_bal,
                ]);
        }

        $currency = Settings::select('currency')->find(1);

        // Send notification to user
        $user->notify(new AccountNotification("You have a new {$request->type} transaction. Amount: {$currency}{$request->amount}.", 'System Topup'));

        //add history
        Tp_Transaction::create([
            'user' => $request->user_id,
            // 'plan' => $formatResponse->data->type,
            'plan' => $request->t_type,
            'amount' => $request->amount,
            'type' => $request->type,
        ]);


        return redirect()->back()->with('success', 'Action Successful!');
    }
}
