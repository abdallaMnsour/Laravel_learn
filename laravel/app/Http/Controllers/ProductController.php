<?php

namespace App\Http\Controllers;

use App\Mail\MySend;
use App\Models\User;
use App\Models\Product;
use App\Models\AllImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    function show()
    {
        // dump(AllImage::find(1)->imageable);
        // dump(Product::first()->all_images);
        // dump(User::first()->all_images);
        // dump(AllImage::first());
        // dump(AllImage::first()->by_many_images);

        // $users = User::all()->reject(function (User $user) {
        //     return $user->car_id == 25;
        // })->map(function (User $user) {
        //     return [$user->name, $user->email];
        // });

        // dump($users);
        // foreach ($users as $user) :
        //     dump($user);
        // endforeach;
        // $data = User::first();
        // dump($data->products);

        /* accessor mutator */


        // return User::find(221);

        // $users = User::with('images')->paginate();
        // return view('user_car.user_car', ['allUsers' => $users]);


        // Mail::to('bodemansour8@gmail.com')->send(new MySend('tasnim'));

        ########### my test ###########

        $array = [1, 2, 8, 8, 3, 6];
        // $this->my_split($array);
    }



    public function my_split($array)
    {
        if (array_sum($array) % 2 != 0) {
            echo 'error the array dos\'t have even number';
        } else if (count($array) % 2 != 0) {
            echo 'error the array dos\'t have even count';
        } else {

            $val_1 = 0;
            $val_2 = 0;

            rsort($array);

            foreach ($array as $value) {

                if ($val_1 < $val_2) {
                    $val_1 += $value;
                } else {
                    $val_2 += $value;
                }
            }

            dump($val_1, $val_2);
        }
    }
    // public function t($value)
    // {
    //     dump($value);
    // }
}
