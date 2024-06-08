<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User successfully registered'], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->only('email', 'password'), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = Auth::user();
        $token = $user->createToken('AccessToken')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function loginSuperAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if user is a superadmin
            if ($user->roles()->where('name', 'superadmin')->exists()) {
                $token = $user->createToken('SuperAdmin Access Token')->plainTextToken;
                return response()->json([
                    'message' => 'Super Admin login successful',
                    'token' => $token,
                    'redirect_to' => '/api/superadmin/dashboard'
                ], 200);
            } else {
                return response()->json(['message' => 'Access denied for non-superadmin users'], 403);
            }
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }


    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if user is an admin
            if ($user->roles()->where('name', 'admin')->exists()) {
                $token = $user->createToken('Admin Access Token')->plainTextScore;
                return response()->json([
                    'message' => 'Admin login successful',
                    'token' => $token,
                ], 200);
            } else {
                return response()->json(['message' => 'Access denied for non-admin users'], 403);
            }
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function loginSeoAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if user is an SEO admin
            if ($user->roles()->where('name', 'seoadmin')->exists()) {
                $token = $user->createToken('SEO Admin Access Token')->plainTextToken;
                return response()->json([
                    'message' => 'SEO Admin login successful',
                    'token' => $token,
                ], 200);
            } else {
                return response()->json(['message' => 'Access denied for non-SEO admin users'], 403);
            }
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function loginContentWriter(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if user is a content writer
            if ($user->roles()->where('name', 'content writer')->exists()) {
                $token = $user->createToken('Content Writer Access Token')->plainTextToken;
                return response()->json([
                    'message' => 'Content Writer login successful',
                    'token' => $token,
                ], 200);
            } else {
                return response()->json(['message' => 'Access denied for non-content writer users'], 403);
            }
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function logout(Request $request)
    {
        // Revoke the user's current token
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ], 200);
    }
}
