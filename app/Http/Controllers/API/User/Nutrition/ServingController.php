<?php

namespace App\Http\Controllers\API\User\Nutrition;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\User\Nutrition\SuggestedServingRequest;
use App\Http\Requests\API\User\Nutrition\UnderImplementationServingRequest;
use App\Http\Resources\User\Nutrition\Serving\ServingResource;
use App\Models\Serving;
use App\Models\User;
use App\Services\API\User\Nutrition\ServingService;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServingController extends Controller
{
    use ApiResponse;
    private $service;

    public function __construct(ServingService $service)
    {
        \request()->headers->set('Accept','application/json');
        $this->service = $service;
    }

    public function index()
    {
        $serving = User::query()
            ->where('id',auth()->guard('user-api')->user()->id)
            ->with(['masterServing','usedServing','underImplementationServing','usedHistoryServing', 'underImplementationHistoryServing'])
            ->first();
        return $this->success(" ",ServingResource::make($serving));
    }

    public function update(UnderImplementationServingRequest $request, Serving $serving)
    {
        $user = auth()->guard('user-api')->user();
        $response = $this->service->update($request, $serving, $user);
        if($response['status'] == 200)
        {
            $serving = User::query()
                ->with(['masterServing','usedServing','underImplementationServing'])
                ->first();
            return $this->coreResponse($response['message'],$response['status'],ServingResource::make($serving),$response['isSuccess']);
        }
        return $this->coreResponse($response['message'],$response['status'],$response['data'],$response['isSuccess']);
    }

    public function suggestedServing(SuggestedServingRequest $request,$id)
    {
        $user = auth()->guard('user-api')->user();
        $update = DB::table('user_serving_per_food_type')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('status', 2)
            ->update([
                'Starches'     => $request->starches,
                'Fruits'       => $request->fruits,
                'Vegetables'   => $request->vegetables,
                'Meats'        => $request->meats,
                'Dairy'        => $request->dairy,
                'Oils'         => $request->oils,
            ]);
        if($update == true)
        {
            $serving = User::query()
                ->where('id',auth()->guard('user-api')->user()->id)
                ->with(['masterServing','usedServing','underImplementationServing','usedHistoryServing', 'underImplementationHistoryServing'])
                ->first();
            return $this->success(" ",ServingResource::make($serving));
        }
        return $this->error(" ", 400);
    }
}
