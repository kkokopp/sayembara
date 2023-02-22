<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

// use App\Models\Invoice;
use App\Models\Post;

class DashboardController extends Controller
{
    //

    public function index()
    {
        // $daftar = Daftar::get_post(auth()->user()->id);
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'daftar' => Daftar::where([
                ['author_id', auth()->user()->id],
                ['status', 'On Review']])->get(),
            'peserta' => Daftar::where([
                ['author_id', auth()->user()->id],
                ['status', 'Diterima']])->get(),
            // 'daftar' => $daftar,
            'jmlh_post' => Post::where('user_id', auth()->user()->id)->count(),
            // 'formulir' => Invoice::where('author_id', auth()->user()->id)->count(),
        ]);
    }

    public function status(Request $request)
    {
        // $data['status'] = $request->status;
        Daftar::where([
            ['id', $request->id],
            ['user_id', $request->user_id]
        ])->update(['status' => $request->status]);

        return back();
    }
}
