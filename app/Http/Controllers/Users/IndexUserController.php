<?php

namespace App\Http\Controllers\Users;

use App\Models\User;

class IndexUserController
{
    public function __invoke()
    {
        $users = User::all();
        // compact позволяет сделать доступными любые массивы, данные, аналогичен массиву: 'table' => $table
        return view('admin.user.index', compact( 'users'));
    }
}
