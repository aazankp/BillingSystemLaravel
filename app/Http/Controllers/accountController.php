<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\accountRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class accountController extends Controller
{
    public function insertAccounts(accountRequest $request)
    {
        $account = DB::table("accounts")->insert([
            "Acc_Id" => $this->generateUUID(),
            "Name" => $request->fullName,
            "Acc_type" => $request->accType,
            "Mobile_No" => $request->mobileNumb,
            "Opening_Balance" => $request->openingBal,
            "Address" => $request->address,
        ]);

        if ($account) {
            return back()->with('status', 'addAccountSuccess');
        }
    }

    public function fetchAccounts()
    {
        $accounts = DB::table("accounts")->get();
        return view('Accounts', ["fetchedAccounts" => $accounts]);
    }

    public function fetchUpdateAccount(string $id)
    {
        $accounts = DB::table("accounts")->where("Acc_Id", $id)->get();
        return view('Accounts', ["updatedAccount" => $accounts]);
    }

    private function generateUUID() {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

}
