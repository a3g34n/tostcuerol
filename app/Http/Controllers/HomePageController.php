<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function edit()
    {
        $homePage = HomePage::first() ?? new HomePage();

        return view('dashboard.index', compact('homePage'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_text' => 'nullable|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'text1' => 'nullable|string',
            'text2' => 'nullable|string',
            'text3' => 'nullable|string',
            'text4' => 'nullable|string',
            'text5' => 'nullable|string',
            'catchphrase' => 'nullable|string',
        ]);

        $homePage = HomePage::first() ?? new HomePage();

        // Handle banner image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
            $homePage->banner_image = $filename;
        }

        // Handle banner image
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
            $homePage->image1 = $filename;
        }
        // Handle banner image
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
            $homePage->image2 = $filename;
        }
        // Handle banner image
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
            $homePage->image3 = $filename;
        }
        // Handle banner image
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
            $homePage->image4 = $filename;
        }
        // Handle banner image
        if ($request->hasFile('image5')) {
            $file = $request->file('image5');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
            $homePage->image5 = $filename;
        }


        // Save texts
        for ($i = 1; $i <= 5; $i++) {
            $homePage->{"text$i"} = $request->input("text$i");
        }

        // Save catchphrase
        $homePage->catchphrase = $request->input('catchphrase');

        $homePage->save();

        return redirect()->back()->with('success', 'Home Page updated successfully!');
    }
}
