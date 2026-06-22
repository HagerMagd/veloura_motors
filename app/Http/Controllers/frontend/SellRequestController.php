<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontEndRequests\SellCarRequest;
use App\Models\SellRequest;
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
            if ($request->hasFile('images')) {
                foreach ($request->images as $image) {
                    $image_name = Str::uuid() . time() . '.' . $image->getClientoriginalExtension();
                    $path = $image->storeAs('uploads/sellcars', $image_name, ['disk' => 'uploads']);

                    $sellcar->sellImages()->create([
                        'sell_request_id' => $sellcar->id,
                        'image_path' => $path,
                    ]);
                }
            }
            DB::commit();
            return redirect()->back()->with('success','Your request has been successfully received');
        } catch (\Throwable $th) {
            DB::rollBack();
              \log::error($th->getMessage());
           return redirect()->back()->with('error','Please Try Again ! ');
        }
    }
}
