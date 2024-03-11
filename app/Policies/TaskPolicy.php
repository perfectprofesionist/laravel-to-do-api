<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function view(User $user, Task $task): bool
    {
        // Logic to determine if the user can view the model
        return $user->id === $task->user_id;
    }
}
