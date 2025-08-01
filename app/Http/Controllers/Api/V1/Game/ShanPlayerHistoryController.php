<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Models\Admin\ReportTransaction;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use App\Traits\HttpResponses;

class ShanPlayerHistoryController extends Controller
{
    use HttpResponses;

    private const DEFAULT_PER_PAGE = 10;
    private const MAX_PER_PAGE = 100;


    public function getPlayerHistory(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return $this->error(null, 'Unauthenticated.', 401);
        }

        // Optionally, allow query params for pagination/filtering
        $reports = ReportTransaction::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return $this->success($reports, 'Player report fetched successfully.');
    }

   
}
