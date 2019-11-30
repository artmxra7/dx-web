<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'users_code' => $this->users_code,
            'users_name' => $this->users_name,
            'users_email' => $this->email,
            'users_hp' => $this->users_hp,
            'users_referral_code' => $this->users_referral_code,
            'users_npwp' => $this->users_npwp,
            'users_company' => $this->users_company,
        ];
    }
}

class UserSearchResult extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'users_code' => $this->users_code,
            'users_name' => $this->name,
            'users_email' => $this->email,
            'users_hp' => $this->users_hp,
            'users_company' => $this->users_company,
            'users_referral_code' => $this->users_referral_code,
            'users_npwp' => $this->users_npwp
        ];
    }
}
