<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    $search = Request::input('search');
    /** @var \Illuminate\Pagination\LengthAwarePaginator */
    $paginate = User::query()
        ->when($search, fn ($query) => $query->where('name', 'like', "%{$search}%"))
        ->paginate(10);

    return Inertia::render('Users', [
        'users' => $paginate->withQueryString()
            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
            ]),
        'search' => $search,
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('logging the user out');
});
