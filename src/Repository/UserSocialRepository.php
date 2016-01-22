<?php namespace davis\socialprofile\Repository;

use davis\socialprofile\buttons;
use Illuminate\Database\Eloquent\Builder;
use Flarum\Core\User;

class UserSocialRepository
{
    public function query()
    {
        return buttons::query();
    }
    
    public function findOrFail($id, User $actor = null)
    {
        $this->query = buttons::where('user_id', $id);
        return $this->query->firstOrFail();
    }
}
