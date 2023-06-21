<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('Seller');
    }


    public function read(User $user, Product $product)
    {
        if (empty($products->shop)) {
            return false;
        }

        return $user->id == $products->shop->user_id;
    }

    /**
     * Determine whether the user can update the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function edit(User $user, Product $products)
    {
        if(empty($products->shop)) {
            return false;
        }

        return $user->id == $products->shop->user_id;
    }


    /**
     * Determine whether the user can create Products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        return $user->hasRole('Seller');
    }

    /**
     * Determine whether the user can delete the Product.
     *
     * @param  \App\User  $user
     * @param  \App\Product  $product
     * @return mixed
     */
    public function delete(User $user, Product $products)
    {
        if (empty($products->shops)) {
            return false;
        }

        return $user->id == $products->shops->user_id;
    }


}