<?php

namespace App\Http\Controllers\API\User\Nutrition\SuggestedMealPlan;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\User\Nutrition\SubmitPlanRequest;
use App\Http\Resources\User\Nutrition\SubmittedPlan\DaysResource;
use App\Http\Resources\User\Nutrition\SubmittedPlan\PlanResource;
use App\Http\Resources\User\Nutrition\SuggestedMealPlan\MealPlanResource;
use App\Http\Resources\User\Nutrition\SuggestedMealPlan\Weekly\WeeklyResource;
use App\Models\MealPlan;
use App\Models\PlanMealTypesMeals;
use App\Models\User;
use App\Models\UserMealPlan;
use App\Services\API\User\Nutrition\HistoryPlanService;
use App\Services\API\User\Nutrition\SuggestedMealPlan\MealPlanService;
use App\Traits\ApiResponse;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    use ApiResponse;
    private $service;
    const WEEKLY_PLAN          = 2;
    const ACTIVE_WEEKLY_PLAN   = 1;

    public function __construct(MealPlanService $service)
    {
        \request()->headers->set('Accept','application/json');
        $this->service = $service;
    }

    public function index()
    {
        if(\request()->query('duration') == 1)
        {
            $plan = MealPlan::query()
                ->with('suggestedMealTypes')
                ->where('goal_id', auth()->guard('user-api')->user()->goal)
                ->inRandomOrder()
                ->limit(1)
                ->first();
            if($plan)
            {
                return $this->success(" ", MealPlanResource::make($plan));
            }
            return $this->success(" ", $plan);
        }
        if(\request()->query('duration') == 2)
        {
            $limit = DB::table('user_suggested_plan')
                ->where('user_id',auth()->guard('user-api')->user()->id)
                ->where('duration', self::WEEKLY_PLAN)
                ->where('status', self::ACTIVE_WEEKLY_PLAN)
                ->groupBy('plan_id')
                ->orderBy('day_number','ASC')
                ->select('plan_id','day_number')
                ->get();

            $plan = MealPlan::query()
                ->with('suggestedMealTypes')
                ->where('goal_id', auth()->guard('user-api')->user()->goal)
                ->whereNotIn('id',$limit->pluck('plan_id'))
                ->inRandomOrder()
                ->limit(7 - (count($limit)))
                ->get();
            $count = count($limit) + count($plan);
            $data = [
                'code'             => 200,
                'error'            => false,
                'message'          => " ",
                'payload'          =>
                    [
                        'submitted_plans'  => $limit,
                        'plans'            => $count != 7 ? [] : MealPlanResource::collection($plan),
                    ],
            ];
            return response()->json($data,200);
        }
        if(\request()->query('shuffle') == 1 && \request()->query('current_plan_id'))
        {
            $plan = MealPlan::query()
                ->with('suggestedMealTypes')
                ->where('goal_id', auth()->guard('user-api')->user()->goal)
                ->where('id', '!=', \request()->query('current_plan_id'))
                ->inRandomOrder()
                ->limit(1)
                ->first();
            if($plan)
            {
                return $this->success(" ", MealPlanResource::make($plan));
            }
            return $this->success(" ", null);
        }
        return $this->success(" ", null);
    }

    public function store(SubmitPlanRequest $request)
    {
        $user = auth()->guard('user-api')->user();
        $this->service->reviewPlan($request, $user);
        return $this->success(" ", true);
    }
}
