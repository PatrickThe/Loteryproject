<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Payment;
use App\User;
use App\News;
use App\Post;
use Newsdb;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Images;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Feth Home Variables
        $paymentsSum = DB::table("payments")
            ->where('user_id', Auth::User()->id)
            ->get()
            ->sum("amount");

        $referrals = DB::table('referrals')
            ->where('user_id', Auth::User()->id)
            ->get();

    
        $payments = Payment::where('user_id', Auth::User()->id)->get();
        return view('home', compact('payments', 'paymentsSum', 'referrals'));
    }
    public function savePayment(Request $request)
    {
        //save Payment
        $save_payment = new Payment([
            'amount'=>$request->get('amount'),
            'trans_code'=>$request->get('code'),
        ]);

        $save_payment->user_id = Auth::User()->id;
        $created_status = $save_payment ->save();

        //update paid status
        switch ($created_status) {
            case 1:
                //update the paid status and points
                $user = User::where('id', Auth::User()->id)->first();
                $user->has_paid = 1;
                $user->points = $user->points + 1;
                $user->update();
                return 200;
                break;
            case 0:
                //saving was not successfull
                return 300;
                break;
            default:
                //other factors. Meaning saving was not successful
                return 400;
        }
    }
    public function save_ref(Request $request)
    {
          //save referal
        $save_ref= new Referral([
            'user_id'=>$request->get('user_id'),
            'email'=>$request->get('email'),
        ]);

        $save_ref ->save();
              
    }
    public function save_news(Request $request)
    {
        //save news
        if(Input::has('image')){
            $file= Input::file('image');
            $file->move('assets/img', $file->getClientOriginalName()); //moves to folder(uploads)

        $data = new News([
            'user_id'=>1,
            'headline' =>$request->get('headline'),
            'details' =>$request->get('details'),
            'image'=>$file->getClientOriginalName(),  //saves the images original name in db not path
            'status' =>1,
        ]);
        $data->save();
        session()->flash('success!', 'News has been added successful');
        $news = new News();
        return redirect()->back();
        }
        echo "no image";
    }


    public function edit(Request $request, $id)
    {    //update news
        //if(Input::has('image')){
            //$file= Input::file('image');
           // $file->move('assets/img', $file->getClientOriginalName());
        $data = News::find($id);
        $data->headline = $request->get('headline');
        $data->details = $request->get('details');
        //$data->image =$file->getClientOriginalName();
        //$data->status = $request->input('status');
        $data->save();
        //}
        //return redirect('/edit_news')->with('success');
    }

    public function destroy($id) {
        $new = news::find($id);
        $new->delete();
        return redirect('/add_news')->with('success', 'news deleted!');
    }
    public function referrals()
    {
        return view('referrals');
    }
    public function add_news()
    {
        $news = News::all();
        return view('add_news', compact('news'));
    }

    public function edit_news($id)
    {
        $data = News::find($id);
        return view('edit_news', compact('data'));
    }
    public function all_members()
    {
        $data = Member::all();
        return view('members.all_members', compact('data'));
    }

    public function view_more($id)
    {
        $member = Member::find($id);
        return view('members.view_more', compact('member'));
    }
    public function news()
    {
        $data = News::all();
        return view('news', compact('data'));
    }
    public function morePost($id)
    {
        $news = News::find($id);
        return view('morePost', compact('news'));
    }
    public function customers()
    {
        $users = DB::table('users')
      ->where('is_admin', [0])->get();
    return view('customers', compact('users'));
    }
    public function update_users(Request $request, $id)
    {    //update user to admin
        $user  = User::find($id);
        $user->is_admin =1;
        $user->save();
        return redirect('/customers')->with('success', 'user made Admin!');
    }
    
    public function admin()
    {
        $users = DB::table('users')
      ->where('is_admin', [1])->get();
    return view('admin', compact('users'));
    }
    public function update_admin(Request $request, $id)
    {    //update user to admin
        $user  = User::find($id);
        $user->is_admin =0;
        $user->save();
        return redirect('/admin')->with('success', 'user removed from Admin!');
    }

    public function payments()
    {
        $payments = Db::table('payments')
                ->join('users', 'payments.user_id', '=', 'users.id')
                ->select('payments.id','payments.amount','payments.trans_code','payments.created_at','users.name')
                ->get();
        return view('payments', compact('payments'));
    }
    public function paymentsReport()
    {
        $payments = Db::table('payments')
        ->join('users', 'payments.user_id', '=', 'users.id')
        ->select('payments.id','payments.amount','payments.trans_code','payments.created_at','users.name')
        ->get();
        return view('Reports.paymentsReport',compact('payments'));
    }

    public function customersReport()
    {
        $users = DB::table('users')
        ->where('is_admin', [0])->get();
      return view('Reports.customersReport', compact('users'));
    }
}
