<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PublicController@index');
Route::get('/kota', 'PublicController@kota');
Route::get('/grafis', 'PublicController@grafis');
Route::get('/publik', 'PublicController@publik');
Route::get('/info', 'PublicController@info');
Route::get('/pemerintahan', 'PublicController@pemerintahan');
Route::get('/bankdata', 'PublicController@bankdata');
Route::get('/sakip', 'PublicController@sakip');
Route::get('/transparansi', 'PublicController@transparansi');
Route::get('/berita', 'PublicController@index');
Route::get('/kontak', 'PublicController@kontak');
Route::get('/video', 'PublicController@video');
Route::get('/cpnsd', 'PublicController@cpnsd');
Route::get('/domain', 'PublicController@domain');


Route::get('/admin/sejarah', 'Admin\KotaController@sejarah');
Route::post('/admin/sejarah/updatesejarah/{id}', 'Admin\KotaController@updatesejarah');
Route::get('/admin/lambang', 'Admin\KotaController@lambang');
Route::post('/admin/lambang/updatelambang/{id}', 'Admin\KotaController@updatelambang');
Route::get('/admin/geografis', 'Admin\KotaController@geografis');
Route::post('/admin/geografis/updategeografis/{id}', 'Admin\KotaController@updategeografis');
Route::get('/admin/visimisi', 'Admin\KotaController@visimisi');
Route::post('/admin/visimisi/updatevisimisi/{id}', 'Admin\KotaController@updatevisimisi');


//menu gap Admin
Route::get('/admin/gap', 'Admin\GapController@gap');
Route::get('/admin/gap/edit/{id}', 'Admin\GapController@edit');
Route::post('/admin/gap/update/{id}', 'Admin\GapController@update');
Route::post('/admin/gap/create','Admin\GapController@create');
Route::get('/admin/gap/tambah','Admin\GapController @tambah');
Route::get('/admin/gap/delete/{id}', 'Admin\GapController@delete');

//menu gender Admin
Route::get('/admin/gender', 'Admin\GenderController@gender');
Route::get('/admin/gender/edit/{id}', 'Admin\GenderController@edit');
Route::post('/admin/gender/update/{id}', 'Admin\GenderController@update');
Route::post('/admin/gender/create','Admin\GenderController@create');
Route::get('/admin/gender/tambah','Admin\GenderController@tambah');
Route::get('/admin/gender/delete/{id}', 'Admin\GenderController@delete');


//menu grafis Admin
Route::get('/admin/grafis', 'Admin\GrafisController@grafis');
Route::get('/admin/grafis/edit/{id}', 'Admin\GrafisController@edit');
Route::post('/admin/grafis/update/{id}', 'Admin\GrafisController@update');
Route::post('/admin/grafis/create','Admin\GrafisController@create');
Route::get('/admin/grafis/tambah','Admin\GrafisController@tambah');
Route::get('/admin/grafis/delete/{id}', 'Admin\GrafisController@delete');


//menu Video Admin
Route::get('/admin/video', 'Admin\VideoController@video');
Route::get('/admin/video/edit/{id}', 'Admin\VideoController@edit');
Route::post('/admin/video/update/{id}', 'Admin\VideoController@update');
Route::post('/admin/video/create','Admin\VideoController@create');
Route::get('/admin/video/add','Admin\VideoController@add');
Route::get('/admin/video/delete/{id}', 'Admin\VideoController@delete');


//menu rencana Admin
Route::get('/admin/rencana', 'Admin\RencanaController@rencana');
Route::get('/admin/rencana/edit/{id}', 'Admin\RencanaController@edit');
Route::post('/admin/rencana/update/{id}', 'Admin\RencanaController@update');
Route::post('/admin/rencana/create','Admin\RencanaController@create');
Route::get('/admin/rencana/tambah','Admin\RencanaController@tambah');
Route::get('/admin/rencana/delete/{id}', 'Admin\RencanaController@delete');

//menu poster Admin
Route::get('/admin/poster', 'Admin\PosterController@poster');
Route::get('/admin/poster/edit/{id}', 'Admin\PosterController@edit');
Route::post('/admin/poster/update/{id}', 'Admin\PosterController@update');
Route::post('/admin/poster/create','Admin\PosterController@create');
Route::get('/admin/poster/tambah','Admin\PosterController@tambah');
Route::get('/admin/poster/delete/{id}', 'Admin\PosterController@delete');


//menu pengelolaan Admin
Route::get('/admin/pengelolaan', 'Admin\PengelolaanController@pengelolaan');
Route::get('/admin/pengelolaan/edit/{id}', 'Admin\PengelolaanController@edit');
Route::post('/admin/pengelolaan/update/{id}', 'Admin\PengelolaanController@update');
Route::post('/admin/pengelolaan/create','Admin\PengelolaanController@create');
Route::get('/admin/pengelolaan/tambah','Admin\PengelolaanController@tambah');
Route::get('/admin/pengelolaan/delete/{id}', 'Admin\PengelolaanController@delete');


//menu akuntabilitas Admin
Route::get('/admin/akuntabilitas', 'Admin\AkuntabilitasController@akuntabilitas');
Route::get('/admin/akuntabilitas/edit/{id}', 'Admin\AkuntabilitasController@edit');
Route::post('/admin/akuntabilitas/update/{id}', 'Admin\AkuntabilitasController@update');
Route::post('/admin/akuntabilitas/create','Admin\AkuntabilitasController@create');
Route::get('/admin/akuntabilitas/tambah','Admin\AkuntabilitasController@tambah');
Route::get('/admin/akuntabilitas/delete/{id}', 'Admin\AkuntabilitasController@delete');


//menu kegiatan Admin
Route::get('/admin/kegiatan', 'Admin\KegiatanController@kegiatan');
Route::get('/admin/kegiatan/edit/{id}', 'Admin\KegiatanController@edit');
Route::post('/admin/kegiatan/update/{id}', 'Admin\KegiatanController@update');
Route::post('/admin/kegiatan/create','Admin\KegiatanController@create');
Route::get('/admin/kegiatan/tambah','Admin\KegiatanController@tambah');
Route::get('/admin/kegiatan/delete/{id}', 'Admin\KegiatanController@delete');

//menu sakip Admin
Route::get('/admin/sakip', 'Admin\SakipController@sakip');
Route::get('/admin/sakip/edit/{id}', 'Admin\SakipController@edit');
Route::post('/admin/sakip/update/{id}', 'Admin\SakipController@update');
Route::post('/admin/sakip/create','Admin\SakipController@create');
Route::get('/admin/sakip/tambah','Admin\SakipController@tambah');
Route::get('/admin/sakip/delete/{id}', 'Admin\SakipController@delete');

//menu spip Admin
Route::get('/admin/spip', 'Admin\SpipController@spip');
Route::get('/admin/spip/edit/{id}', 'Admin\SpipController@edit');
Route::post('/admin/spip/update/{id}', 'Admin\SpipController@update');
Route::post('/admin/spip/create','Admin\SpipController@create');
Route::get('/admin/spip/tambah','Admin\SpipController@tambah');
Route::get('/admin/spip/delete/{id}', 'Admin\SpipController@delete');

//menu cpnsd Admin
Route::get('/admin/cpnsd', 'Admin\CpnsdController@cpnsd');
Route::get('/admin/cpnsd/edit/{id}', 'Admin\CpnsdController@edit');
Route::post('/admin/cpnsd/update/{id}', 'Admin\CpnsdController@update');
Route::post('/admin/cpnsd/create','Admin\CpnsdController@create');
Route::get('/admin/cpnsd/tambah','Admin\CpnsdController@tambah');
Route::get('/admin/cpnsd/delete/{id}', 'Admin\CpnsdController@delete');


//Menu User


//LOGIN
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();
Route::get('/admin/users','HomeController@tampil');
Route::get('/admin/tambah','HomeController@add');
Route::post('/admin/create','HomeController@create');
Route::get('/delete/{id}','HomeController@delete');
Route::post('/admin/changepassword','HomeController@changepassword')->name('changepassword');
Route::get('/admin/changepassword','HomeController@showChangePasswordForm');
Route::get('/welcome','HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

