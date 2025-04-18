<?php

namespace App\Http\Controllers;

use App\NFCCard;
use App\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NfcCardsController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('nfc_cards.create', ['title' => $user->name]);
    }

    public function store(Request $request) {
        $patient = Patients::withTrashed()->find($request->patient_reg_no);

        if($patient) {
            NFCCard::create([
                'card_no' => $request->card_number,
                'cvv' => $request->card_cvv,
                'patient_id' => $patient->id,
                'is_active' => true
            ]);

            session()->flash('regcsuccess', 'card registed successfully');
            return redirect()->back();
        } else {
            session()->flash('regcfailed', 'patient not found');
            return redirect()->back();
        }
    }
}
