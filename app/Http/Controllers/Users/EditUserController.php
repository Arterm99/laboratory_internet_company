<?php

namespace App\Http\Controllers\Users;

use App\Models\User;

class EditUserController
{
    public function __invoke(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
}
