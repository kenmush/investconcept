<?php

namespace App\Http\Controllers;

use App\Services\Investor;
use Illuminate\Http\Request;

class ResetPassword extends Controller
{
    public function __invoke(Request $request)
    {
        $response = (new Investor())->changepassword([
                'old_password'     => $request->oldpassword,
                'new_password'     => $request->password,
                'confirm_password' => $request->password,
        ], $request->user()->api_id);
        if ($response['detail'] === 'Password was successfully updated') {
            $request->user()->update([
                    'first_login' => false,
            ]);

            return redirect()->route('portfolio.index');
        }

        return back()->withErrors([
                'updatepassword' => $response['detail'],
        ]);
    }
}
