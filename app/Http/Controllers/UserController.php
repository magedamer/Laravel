<?php

 namespace App\Http\Controllers;
 use Validator;
 use Illuminate\Http\Request;


  class UserController extends Controller
  {

      public function create()
      {
        return view('create');
      }


      public function store(Request $req)
      {



        $this->validate($req,[

            "name"       => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/' ,
            "email"      => 'required|email',
            "password"   => 'required|min:6',
            "address"    => 'required|max:10',
            "gender"     => 'required',
            "linkidin"   => 'required|url'

        ]);

      }

      public function userInfo(Request $req)
      {
        $name  = $req->name;
        $mail  = $req->email;
        $pass  = $req->password;
        $add   = $req->address;
        $gen   = $req->gender;
        $link  = $req->linkidin;

        //echo $name . '<br>' . $mail;

        $detail = ["name"=>$name,"email"=>$mail,"pass"=>$pass,"add"=>$add,"gen"=>$gen,"link"=>$link];
      //  $detail = ["name"=>"maged","age"=>20];
        return view('userDetails',["data" => $detail]);
      }

  }


?>
