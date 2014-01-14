<?php
use Blood\Mailers\DonorMailer as Mailer;
class DonorsController extends BaseController {

    protected $mailer;

    public function __construct(Mailer $mailer){
        $this->mailer = $mailer;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	        return View::make('donors.index',[
        		'donors' => Donor::paginate(9)
        	]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        if(! Auth::check()){
        	return View::make('donors.create');
        }else{
        	return Redirect::to('/');
        }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Donor::$rules);
		if( $v->passes() ) {
			$donor = new Donor;
			$donor->email=Input::get('email');
			$donor->name=Input::get('name');
			$donor->password=Hash::make(Input::get('password'));
			$donor->phoneNo=Input::get('phno');
			$donor->city=Input::get('city');
			$donor->bgroup=Input::get('bgroup');
			$donor->description=Input::get('bio');
			$donor->save();
			$user = Donor::find($donor->id);
			Auth::login($user);
            $this->mailer->welcome($user);
			return Redirect::to('/')->with('success','Account Created Successfully');
		} else {
			return Redirect::back()->withErrors($v)->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$donor = Donor::find($id);
        return View::make('donors.show',compact('donor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        if(Auth::user()->role == "Admin"){
        return View::make('donors.edit');
    	}else{
    		return Redirect::home()->with('error','You Dont Have permission');
    	}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$uprules = [
			'name'=>'alpha|required',
			'email'=>"email|required|unique:donors,email,$id",
			'password'=>'required|min:6|alpha_num|confirmed',
			'city'=>'alpha|required',
			'phoneNo'=>'numeric|required|digits:10'
			];
		$uv = Validator::make($input,$uprules);
		if( $uv->passes() ) {


            $d = Donor::find($id);
            foreach (Input::except('password_confirmation','_method') as $key => $value) {
                if($key == '_token' || $value == '') continue ;
                $in[$key] = $value;

            }
            if($d->fill($in)){
                $d->save();
                return Redirect::back()->with('success','Profile Updated ! ');

            }
        }else {
            return Redirect::back()->withErrors($uv);
        }


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function login(){
		if(! Auth::check()){
		return View::make('pages.login');
		}else{
			return Redirect::to('/');
		}
	}
	public function dologin(){

		$attempt = Auth::attempt(Input::only('email','password'));

		if($attempt) {
			return Redirect::intended('/')->with('success','You Have Been Logged Successfully');
		}else{
			return Redirect::back()->with('error','Could Not Verify Email Id & Password...try again !');
		}

	}

	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return Redirect::to('/')->with('success','You Have Been Logged out !');
		}else{
			return View::make('pages.login');
		}
	}

    public function sendRequest(){
            //dd (Input::all());
            $request = new Request;
            $request->to = Input::get('to');
               $request->save();

    }

}
