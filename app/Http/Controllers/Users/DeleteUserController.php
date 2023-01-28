<?php

namespace App\Http\Controllers\Users;

use App\Models\User;

class DeleteUserController
{
    public function __invoke(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
