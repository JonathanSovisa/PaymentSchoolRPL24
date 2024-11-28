<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin; // Model Admin untuk cek data
use Illuminate\Support\Facades\Hash;

class APIController extends Controller
{
    public function login(Request $request) {
        // Ambil data dari request
        $IdAdmin = $request->input('IdAdmin');
        $Password = $request->input('Password');

        // Lakukan pengecekan validitas data Admin
        $client = new Client();
        $apiUrl = "https://29c9-182-253-190-139.ngrok-free.app/API/Admin"; 

        try {
            // Kirim request untuk mendapatkan data admin dari API
            $response = $client->get($apiUrl);
            
            if ($response->getStatusCode() !== 200) {
                // return redirect()->back()->withErrors(['msg' => 'Unable to connect to the API.']);
                return response()->json([
                    'success' => false,
                    'message' => 'Error bos',
                    'status_code' => $response->getStatusCode()
                ], $response->getStatusCode());
            }
            
            
            // Parse response JSON
            $admins = json_decode($response->getBody(), true);
            
            
            // Temukan admin berdasarkan IdAdmin
            // ini gak ada datanya yang 123
            $admin = collect($admins)->firstWhere('IdAdmin', $IdAdmin);
            
            // Cek apakah admin ditemukan dan passwordnya valid
            if ($admin) {
                // Cek apakah password valid
                if (\Hash::check($Password, $admin['Password'])) {
                    // Jika password valid, cek peran (role) admin
                    // ini stringnya dikecilin jadi yang dicek dikecilin juga
                    if (strtolower($admin['Role']) == 'admin instansi') {
                        return redirect()->route('dashboard');  // Redirect ke dashboard admin instansi
                        // return response()->json([
                        //     'success' => true,
                        //     'message' => 'Login berhasil',
                        //     'redirect_url' => route('dashboard')
                        // ]);
                    } elseif (strtolower($admin['Role']) == 'admin bank') {
                        return redirect()->route('dashboardadmin');  // Redirect ke dashboard admin bank
                        // return response()->json([
                        //     'success' => true,
                        //     'message' => 'Login berhasil',
                        //     'redirect_url' => route('dashboardadmin')
                        // ]);
                    } else {
                        return redirect()->back()->withErrors(['msg' => 'Role tidak dikenali']);
                        // return response()->json([
                        //     'success' => false,
                        //     'message' => 'Role ampas',
                        // ]);
                    }
                } else {
                    // Password salah
                    return redirect()->back()->withErrors(['msg' => 'Invalid password']);
                }
            } else {
                // ID admin tidak ditemukan
                return redirect()->back()->withErrors(['msg' => 'Invalid ID admin']);
                // return response()->json([
                //     'success' => false,
                //     'message' => 'Invalid ID admin',
                // ]);
            }

        } catch (\Exception $e) {
            // Menangani error API atau lainnya
            \Log::error("Error during login: " . $e->getMessage());
            return redirect()->back()->withErrors(['msg' => 'Something went wrong.']);
        }
    }

    
    public function getMahasiswa()
    {
        //  // Replace 'YOUR_API_KEY' with your OpenWeather API key
        //  $apiKey = 'YOUR_API_KEY';
        
         // Create a new Guzzle client instance
         $client = new Client();
 
         // API endpoint URL with your desired location and units (e.g., London, Metric units)
         $apiUrl = "https://29c9-182-253-190-139.ngrok-free.app/API/Mahasiswa";
 
         try {
             // Make a GET request to the OpenWeather API
             $response = $client->get($apiUrl);
             
             // Get the response body as an array
             $data = json_decode($response->getBody(), true);
 
             // Handle the retrieved weather data as needed (e.g., pass it to a view)
             return view('datamahasiswa', ['getMahasiswa' => $data]);
         } catch (\Exception $e) {
             // Handle any errors that occur during the API request
             return view('api_error', ['error' => $e->getMessage()]);
         }
    }


    public function getAdmin()
    {
        //  // Replace 'YOUR_API_KEY' with your OpenWeather API key
        //  $apiKey = 'YOUR_API_KEY';
        
         // Create a new Guzzle client instance
         $client = new Client();
 
         // API endpoint URL with your desired location and units (e.g., London, Metric units)
         $apiUrl = "https://29c9-182-253-190-139.ngrok-free.app/API/Admin";
 
         try {
             // Make a GET request to the OpenWeather API
             $response = $client->get($apiUrl);
             
             // Get the response body as an array
             $data = json_decode($response->getBody(), true);
 
             // Handle the retrieved weather data as needed (e.g., pass it to a view)
             return view('admininstansi', ['getAdmin' => $data]);
         } catch (\Exception $e) {
             // Handle any errors that occur during the API request
             return view('api_error', ['error' => $e->getMessage()]);
         }
    }


    public function getInstansi()
    {
        //  // Replace 'YOUR_API_KEY' with your OpenWeather API key
        //  $apiKey = 'YOUR_API_KEY';
        
         // Create a new Guzzle client instance
         $client = new Client();
 
         // API endpoint URL with your desired location and units (e.g., London, Metric units)
         $apiUrl = "https://29c9-182-253-190-139.ngrok-free.app/API/Instansi";
 
         try {
             // Make a GET request to the OpenWeather API
             $response = $client->get($apiUrl);
             
             // Get the response body as an array
             $data = json_decode($response->getBody(), true);
 
             // Handle the retrieved weather data as needed (e.g., pass it to a view)
             return view('daftarinstansi', ['getInstansi' => $data]);
         } catch (\Exception $e) {
             // Handle any errors that occur during the API request
             return view('api_error', ['error' => $e->getMessage()]);
         }
    }




}
