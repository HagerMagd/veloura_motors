<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontEndRequests\SellCarRequest;
use App\Models\SellRequest;
use App\utlis\ImageManeger as UtlisImageManeger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SellRequestController extends Controller
{
    public function index() {}


    public function store(SellCarRequest $request)
    {

        DB::beginTransaction();
        try {
            $sellcar = SellRequest::create($request->validated());
            UtlisImageManeger::uploadImages($request,$sellcar);
            DB::commit();
            return redirect()->back()->with('success','Your request has been successfully received');
        } catch (\Throwable $th) {
            DB::rollBack();
           return redirect()->back()->with('error','Please Try Again ! ');
        }
    }
}
