<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EloquentUserController extends Controller
{
    public function queries()
    {
        // $response = User::insert(
        //     [
        //     'name' => 'New User',
        //     'email' => 'newuser@example.com',
        //     'password' => bcrypt('password'),
        //     ]
        // );
        // if ($response) {
        //     return "Data Inserted Successfully";
        // } else {
        //     return "Data Insertion Failed";
        // }


        // $response = User::where('name', 'New User')->update(
        //     [
        //     'name' => 'Faisal Khan',
        //     'email' => 'faisal@example.com',
        //     'password' => bcrypt('password'),
        //     ]
        // );
        // if ($response) {
        //     return "Data Updated Successfully";
        // } else {
        //     return "Data Update Failed";
        // }


        // $response = User::where('name', 'Faisal Khan')->delete();
        // if ($response) {
        //     return "Data Deleted Successfully";
        // } else {
        //     return "Data Delete Failed";
        // }


        /*
        |--------------------------------------------------------------------------
        | BASIC RETRIEVAL
        |--------------------------------------------------------------------------
        */

        // Get all users
        $allUsers = User::all();

        // Get users with pagination (recommended for large datasets)
        $paginatedUsers = User::paginate(10);

        // Get first user
        $firstUser = User::first();

        // Find user by primary key (id)
        $userById = User::find(1);

        // Find user or throw 404 if not found
        $userOrFail = User::findOrFail(1);


        /*
        |--------------------------------------------------------------------------
        | WHERE CONDITIONS
        |--------------------------------------------------------------------------
        */

        // Get users where status is active
        $activeUsers = User::where('status', 'active')->get();

        // Multiple where conditions
        $filteredUsers = User::where('status', 'active')
            ->where('role', 'admin')
            ->get();

        // OR condition
        $orConditionUsers = User::where('role', 'admin')
            ->orWhere('role', 'manager')
            ->get();

        // Where IN
        $usersInRoles = User::whereIn('role', ['admin', 'editor'])->get();

        // Where NOT IN
        $usersNotInRoles = User::whereNotIn('role', ['guest'])->get();

        // Where NULL
        $usersWithNoPhone = User::whereNull('phone')->get();

        // Where NOT NULL
        $usersWithPhone = User::whereNotNull('phone')->get();


        /*
        |--------------------------------------------------------------------------
        | SORTING & LIMITING
        |--------------------------------------------------------------------------
        */

        // Order by latest (created_at DESC)
        $latestUsers = User::latest()->get();

        // Order by oldest (created_at ASC)
        $oldestUsers = User::oldest()->get();

        // Order by specific column
        $sortedUsers = User::orderBy('name', 'asc')->get();

        // Limit records
        $limitedUsers = User::limit(5)->get();


        /*
        |--------------------------------------------------------------------------
        | SELECT & AGGREGATES
        |--------------------------------------------------------------------------
        */

        // Select specific columns only
        $selectedColumns = User::select('id', 'name', 'email')->get();

        // Count users
        $userCount = User::count();

        // Max value
        $maxAge = User::max('age');

        // Min value
        $minAge = User::min('age');

        // Average value
        $avgAge = User::avg('age');

        // Sum value
        $totalPoints = User::sum('points');


        /*
        |--------------------------------------------------------------------------
        | CREATE / UPDATE / DELETE
        |--------------------------------------------------------------------------
        */

        // Create a new user (Mass Assignment)
        $newUser = User::create([
            'name'  => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        // Update user by ID
        User::where('id', 1)->update([
            'name' => 'Updated Name'
        ]);

        // Update using model instance
        $user = User::find(1);
        if ($user) {
            $user->update([
                'name' => 'Another Update'
            ]);
        }

        // Delete user by ID
        User::destroy(1);

        // Delete using condition
        User::where('status', 'inactive')->delete();


        /*
        |--------------------------------------------------------------------------
        | ADVANCED QUERIES
        |--------------------------------------------------------------------------
        */

        // Check if record exists
        $exists = User::where('email', 'test@example.com')->exists();

        // Get first matching record
        $firstMatch = User::where('role', 'admin')->first();

        // Chunking (useful for large data processing)
        User::chunk(100, function ($users) {
            foreach ($users as $user) {
                // Process each user
            }
        });

        // Eager loading relationships
        $usersWithPosts = User::with('posts')->get();

        // Conditional query
        $conditionalQuery = User::when(request('status'), function ($query) {
            $query->where('status', request('status'));
        })->get();


        /*
        |--------------------------------------------------------------------------
        | RESPONSE
        |--------------------------------------------------------------------------
        */

        // Return any query result for testing
        return response()->json($allUsers);
    }
}
