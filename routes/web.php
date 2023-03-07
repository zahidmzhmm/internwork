<?php


use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/home', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/h1b', [SiteController::class, 'h1b'])->name('h1b');
Route::get('/internships', [SiteController::class, 'internships'])->name('internships');
Route::get('/privacy', [SiteController::class, 'privacy'])->name('privacy');
Route::get('/traineeships', [SiteController::class, 'traineeships'])->name('traineeships');
Route::post('/contact', [SiteController::class, 'contactReq'])->name('contact.req');

Route::get('/old-users-import', function () {
    $old_db = DB::connection('second_database');
    $old_users = $old_db->table('intern')->select([
        "username",
        "email",
        "fname",
        "lname",
        "mobile",
        "address",
        "city",
        "state",
        "post_code as postcode",
        "level_of_study as study_level",
        "course_of_study as course",
        "matriculation_no as matriculation",
        "institution as institute",
        "letter as internship",
        "is_verified as email_verified_at",
    ])->orderBy('id', 'desc')
        ->get();
    for ($i = 0; $i < count($old_users); $i++) {
        $userChecking = \App\Models\User::where('email', '=', $old_users[$i]->email)->first();
        if (!$userChecking) {
            if (!empty($old_users[$i]->username) && isset($old_users[$i]->username) && !empty($old_users[$i]->email)) {
                $user = new \App\Models\User();
                $user->username = $old_users[$i]->username;
                $user->email = $old_users[$i]->email;
                $user->password = \Illuminate\Support\Facades\Hash::make("password@#123");
                if (isset($old_users[$i]->email_verified_at) && !empty($old_users[$i]->email_verified_at) && $old_users[$i]->email_verified_at == 1) {
                    $user->email_verified_at = \Carbon\Carbon::now();
                }
                $user->created_at = \Carbon\Carbon::now();
                $user->updated_at = \Carbon\Carbon::now();
                $user->save();
                if ($user) {
                    $profile = \App\Models\Profile::insert([
                        "user_id" => $user->id,
                        "fname" => $old_users[$i]->fname,
                        "lname" => $old_users[$i]->lname,
                        "mobile" => $old_users[$i]->mobile,
                        "address" => $old_users[$i]->address,
                        "city" => $old_users[$i]->city,
                        "state" => $old_users[$i]->state,
                        "postcode" => $old_users[$i]->postcode,
                        "study_level" => $old_users[$i]->study_level,
                        "course" => $old_users[$i]->course,
                        "matriculation" => $old_users[$i]->matriculation,
                        "institute" => $old_users[$i]->institute,
                        "internship" => $old_users[$i]->internship,
                        "program" => "Internship",
                        "pss_year" => 1
                    ]);
                }
            }
        }
    }
});
