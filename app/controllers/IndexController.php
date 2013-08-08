<?php

use Illuminate\Http;

class IndexController extends BaseController
{

    protected $layout = 'layouts.master';

    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function index()
    {
        $this->layout->content = View::make('index');
    }

    public function signup()
    {
        $view = View::make('signup');
        
        $input = Input::all();

        if ($input)
        {
            $validator = Validator::make(
                            $input, array(
                        'firstname' => 'required',
                        'surname' => 'required',
                        'email' => 'required',
                        'password' => 'required',
                            )
            );
            
            $valid = $this->validate($validator);
            
            if($valid)
            {
                //Redirect somewhere
            }
            
            $view->input = $input;
        }

        

        $view->user = new User();

        $this->layout->content = $view;
    }

}