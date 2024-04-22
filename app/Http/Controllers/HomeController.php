<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use Illuminate\View\View;
 class HomeController extends Controller
 {
 /**
 * Create a new controller instance.
 *
 * @return void
 */
 public function __construct()
 {
 $this->middleware('auth');
}
 /**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
public function index(): View
 {
 return view('home'); //role mahasiswa
 }
 /**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
 public function superAdminHome(): View
 {
 return view('superAdminHome'); //role super admin
 }
 /**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
 public function adminHome(): View //role admin
 {
 return view('adminHome');
 }
 /**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
 public function dosenHome(): View //role dosen
 {
 return view('dosenHome');
 }
public function tendikHome(): View
{
return view('tendikHome'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function adminAkademikHome(): View
{
return view('adminAkademikHome'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function adminKeuanganHome(): View
{
return view('adminKeuanganHome'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function direkturHome(): View
{
return view('direkturHome'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function wakilDirektur1Home(): View
{
return view('wakilDirektur1Home'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function wakilDirektur2Home(): View
{
return view('wakilDirektur2Home'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function wakilDirektur3Home(): View
{
return view('wakilDirektur3Home'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function adminLppmHome(): View
{
return view('adminLppmHome'); //role super admin
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
public function adminSdmHome(): View
{
return view('adminSdmHome'); //role super admin
}
}
/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/