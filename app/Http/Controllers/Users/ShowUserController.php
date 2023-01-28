<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\UpdateRequest;
use App\Models\User;

class ShowUserController
{
    public function __invoke(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

}
