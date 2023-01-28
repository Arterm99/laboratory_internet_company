<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests\UpdateRequest;
use App\Models\User;

class UpdateUserController
{
    public function __invoke(UpdateRequest $request, USer $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('admin.user.show', compact('user'));
    }

}
