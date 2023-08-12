<?php

namespace App\Http\Controllers;

use App\Models\Community_Members;
use App\Models\Contact;
use App\Models\Paper;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('admin.contents.dashboard',[
            'authors' => User::where('role','author')->count('id'),
            'journals' => Paper::count('id'),
            'pending_journals' => Paper::where('status','pending')->count('id'),
            'report' => DB::table('papers')->whereBetween(DB::raw('DATE(created_at)'),[ date('Y-m-d',strtotime('last month')),date('Y-m-d',strtotime('today'))])
                        ->select(DB::raw('COUNT(id) as paper, DATE(created_at) as date'))
                        ->groupBy(DB::raw('DATE(created_at)'))
                        ->get()
        ]);
    }

    public function journal()
    {
        return view('admin.contents.journal',[
            'journals' => Paper::with('author')->get()
        ]);
    }
    public function member_dashboard()
    {
        return view('admin.contents.dashboard',[
            'journals' => Paper::with('author')->where('status','pending')->get(),
        ]);

    }

    public function editorial_member()
    {
        return view('admin.contents.editorial_member',[
            'members' => Community_Members::all()
        ]);
    }

    public function contact_message()
    {
        return view('admin.contents.contact_message',[
            'messages' => Contact::all()
        ]);
    }

    public function user()
    {
        return view('admin.contents.users',[
            'users' => User::all()
        ]);
    }
}
