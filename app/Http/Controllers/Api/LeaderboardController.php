<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    public function index(Request $request)
    {
        $timeFilter = $request->query('filter', 'allTime');
        $searchTerm = $request->query('search', '');

        $query = Attempt::query()
            ->where('completed', true)
            ->select([
                'user_id',
                DB::raw('SUM(score) as total_score'),
                DB::raw('COUNT(*) as total_completed'),
                DB::raw('SUM(hints_used) as total_hints'),
                DB::raw('MIN(time_spent) as best_time'),
            ])
            ->groupBy('user_id');

        switch ($timeFilter) {
            case 'daily':
                $query->whereDate('created_at', today());
                break;
            case 'weekly':
                $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                break;
            case 'allTime':
            default:
                break;
        }

        if ($searchTerm) {
            $query->whereHas('user', function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%");
            });
        }

        $query->orderByDesc('total_score');

        $rawResults = $query->with('user:id,name,player_configuration')->paginate(20);

        $startPosition = ($rawResults->currentPage() - 1) * $rawResults->perPage() + 1;

        $data = $rawResults->getCollection()->map(function ($item, $index) use ($startPosition) {
            return [
                'position' => $startPosition + $index,
                'user' => [
                    'id' => $item->user->id,
                    'name' => $item->user->name,
                    'player_configuration' => $item->user->player_configuration,
                ],
                'total_score' => (int) $item->total_score,
                'total_completed' => (int) $item->total_completed,
                'total_hints' => (int) $item->total_hints,
                'best_time' => (int) $item->best_time,
            ];
        });

        return response()->json([
            'data' => $data,
            'current_page' => $rawResults->currentPage(),
            'last_page' => $rawResults->lastPage(),
            'total' => $rawResults->total(),
            'per_page' => $rawResults->perPage(),
        ]);
    }

    public function room(Request $request, $escapeRoomId)
    {
        $timeFilter = $request->query('filter', 'allTime');
        $searchTerm = $request->query('search', '');

        $query = Attempt::query()
            ->where('completed', true)
            ->where('escape_room_id', $escapeRoomId)
            ->select([
                'user_id',
                DB::raw('SUM(score) as total_score'),
                DB::raw('COUNT(*) as total_completed'),
                DB::raw('SUM(hints_used) as total_hints'),
                DB::raw('MIN(time_spent) as best_time'),
            ])
            ->groupBy('user_id');

        switch ($timeFilter) {
            case 'daily':
                $query->whereDate('created_at', today());
                break;
            case 'weekly':
                $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
                break;
            case 'allTime':
            default:
                break;
        }

        if ($searchTerm) {
            $query->whereHas('user', function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%");
            });
        }

        $query->orderByDesc('total_score');

        $rawResults = $query->with('user:id,name,player_configuration')->paginate(20);

        $startPosition = ($rawResults->currentPage() - 1) * $rawResults->perPage() + 1;

        $data = $rawResults->getCollection()->map(function ($item, $index) use ($startPosition) {
            return [
                'position' => $startPosition + $index,
                'user' => [
                    'id' => $item->user->id,
                    'name' => $item->user->name,
                    'player_configuration' => $item->user->player_configuration,
                ],
                'total_score' => (int) $item->total_score,
                'total_completed' => (int) $item->total_completed,
                'total_hints' => (int) $item->total_hints,
                'best_time' => (int) $item->best_time,
            ];
        });

        return response()->json([
            'data' => $data,
            'current_page' => $rawResults->currentPage(),
            'last_page' => $rawResults->lastPage(),
            'total' => $rawResults->total(),
            'per_page' => $rawResults->perPage(),
        ]);
    }
}
