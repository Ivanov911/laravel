<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return 'message from user:' . $request->query('attribute');
    }

    public function view(Request $request)
    {
        return 'User (ID):' . $request->route('id');
    }
}