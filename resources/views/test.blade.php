<?php
use Illuminate\Support\Facades\DB;

// select users
$users = DB::table('users')->select('name')->where('name', 'Jsffdsg')->get();

if (count($users) == 0) {
    echo "Not Data";
} else {
    foreach ($users as $user) {
        echo $user->name;
    }
}

// select users
$users = DB::table('users')->select('name', 'email')->where('active', 1)->get();

// insert users
DB::table('users')->insert([
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'active' => 1
]);

// update users
DB::table('users')->where('id', 1)->update(['active' => 0]);

// delete users
DB::table('users')->where('id', 1)->delete();


?>