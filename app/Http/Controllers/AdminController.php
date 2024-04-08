<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Models\SocialMediaLink;
use App\Models\PefectTourPackages;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    /**
     * Admin Dashboard
     * Route Name : admin/dashboard
     * Route : admin.dashboard
     * Method : GET
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('admins.dashboard');
    }

    /**
     * Admin Change Password
     * Route Name : admin/dashboard
     * Route : admin.dashboard
     * Method : GET
     * @return \Illuminate\View\View
     */
    public  function changePassword(Request $request)
    {
        return view('admins.change_password');
    }

    public  function updatePassword(Request $request)
    {
        // dd($request->all(), auth()->user());

        $request->validate([
            'current_password' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',              // Minimum length
                'confirmed',          // Must match the 'new_password_confirmation' field
            ],
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        $user->update(['password' => bcrypt($request->new_password)]);

        return redirect()->route('admin.dashboard')->with('success', 'Password changed successfully.');
        // return view('admins.dashboard');
    }

    /**
     * Admin Show Profile
     * Route Name : admin/profile
     * Route : admin.show.profile
     * Method : GET
     * @return \Illuminate\View\View
     */
    public  function showProfile(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('admins.profile.show', compact('user'));
    }

    /**
     * Admin Edit Prfile
     * Route Name : admin/profile/edit
     * Route : admin.edit.profile
     * Method : GET
     * @return \Illuminate\View\View
     */
    public  function editProfile(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('admins.profile.edit', compact('user'));
    }

    /**
     * Admin Edit Prfile
     * Route Name : admin/profile-update
     * Route : admin.update.profile
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public  function updateProfile(Request $request)
    {
        // return view('admins.dashboard');
        // dd($request->all());

        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'county' => 'nullable|string',
            'state' => 'nullable|string',
            'city' => 'nullable|string',
            'zipcode' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except(['_token', '_method']);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('assets/admins/profiles'), $imageName);
            // $file = $request->file('photo');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            // $file->storeAs('public/assets/admins/profiles', $fileName);
            $data['photo'] = 'assets/admins/profiles/' . $imageName;
        }

        $user->update($data);

        return redirect()->route('admin.show.profile')->with('success', 'Profile updated successfully.');
    }

    /**
     * Admin Social Media show
     * Route Name : contacts
     * Route : admin.contacts
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function showContacts()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('admins.contacts', compact('contacts'));
    }

    /**
     * Admin Social Media show
     * Route Name : admin/social-media/show
     * Route : admin.social.media.show
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function socialMediaShow()
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('admins.social_media.show', compact('socialMediaLinks'));
    }

    /**
     * Admin Social Media create
     * Route Name : admin/social-media/create
     * Route : admin.social.media.create
     * Method : PUT
     * @return \Illuminate\View\View
     */
    public function socialMediaCreate()
    {
        $socialMediaLinks = SocialMediaLink::first();
        return view('admins.social_media.create', compact('socialMediaLinks'));
    }

    /**
     * Admin Social Media storeOrUpdate
     * Route Name : admin/social-media/storeOrUpdate
     * Route : admin.social.media.storeOrUpdate
     * Method : POST
     * @return \Illuminate\View\View
     */
    public function socialMediaStoreOrUpdate(Request $request)
    {
        $request->validate([
            'youTube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'at_least_one' => 'required_without_all:youTube,instagram,facebook,linkedin',
        ], [
            'at_least_one' => 'At least one of YouTube, Instagram, Facebook, or LinkedIn is required.',
        ]);
        $socialMediaLinks = SocialMediaLink::firstOrNew();

        // Update or add new links
        $socialMediaLinks->youTube = $request->input('youTube');
        $socialMediaLinks->instagram = $request->input('instagram');
        $socialMediaLinks->facebook = $request->input('facebook');
        $socialMediaLinks->linkedin = $request->input('linkedin');
        $socialMediaLinks->save();

        return redirect()->route('admin.social.media.show')->with(['message' => 'Social media links updated/added successfully']);
    }

    public function appSetting()
    {
        $settings = Setting::first();
        // dd($settings);
        return view('admins.setting', compact('settings'));
    }

    public function appSettingUpdate(Request $request)
    {
        $request->validate([
            'app_name' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'contact' => 'required',
            // 'header_image' => 'nullable|url',
            'header_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        // Find an existing record or create a new one
        $settings = Setting::firstOrNew();

        // Update or add new settings
        $settings->app_name = $request->input('app_name');
        $settings->email = $request->input('email');
        $settings->whatsapp = $request->input('whatsapp');
        $settings->contact = $request->input('contact');

        // Handle image upload
        if ($request->hasFile('header_image')) {
            $customFileName = 'custom_image_name_' . time() . '_' . rand(100, 999) . '.' . $request->file('header_image')->getClientOriginalExtension();
            $request->file('header_image')->move(public_path('assets/images'), $customFileName);
            $settings->header_image = 'assets/images/' . $customFileName;
        }
        // $settings->header_image = $request->input('header_image');
        $settings->save();

        return redirect()->route('admin.app.setting')->with('success', 'Settings updated/added successfully');
    }

    public function tourPackageList()
    {
        $tour_packages = PefectTourPackages::get();
        return view('admins.tour_package.index', compact('tour_packages'));
    }

    public function tourPackageCreate()
    {
        return view('admins.tour_package.create');
    }
    // public function tourPackageStore(Request $request)
    // {
    //     dd($request->toArray());

    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'nullable|string',
    //         'images' => 'nullable|string',
    //         'persons' => 'nullable|integer|min:1',
    //         'price' => 'nullable|numeric|min:0',
    //         'duration' => 'nullable|string',
    //         'itinerary' => 'nullable|string',
    //         'accommodations' => 'nullable|string',
    //         'meals' => 'nullable|string',
    //         'transportation' => 'nullable|string',
    //         'tour_guides' => 'nullable|string',
    //         'status' => 'nullable|integer|in:0,1', // Assuming status is 0 or 1
    //     ]);
    // }

    // public function tourPackageStore(Request $request)
    // {
    //     // Validate the incoming request data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'nullable|string',
    //         'images' => 'nullable|array', // Update validation for images to accept an array
    //         'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image file
    //         'persons' => 'nullable|integer|min:1',
    //         'price' => 'nullable|numeric|min:0',
    //         'duration' => 'nullable|string',
    //         'itinerary' => 'nullable|string',
    //         'accommodations' => 'nullable|string',
    //         'meals' => 'nullable|string',
    //         'transportation' => 'nullable|string',
    //         'tour_guides' => 'nullable|string',
    //         'status' => 'nullable|integer|in:0,1',
    //     ]);

    //     // Create a new tour package instance
    //     $tourPackage = new PefectTourPackages();

    //     // Assign non-image data to the tour package instance
    //     $tourPackage->fill($validatedData);

    //     // Handle image uploads
    //     if ($request->hasFile('images')) {
    //         $imagePaths = [];
    //         foreach ($request->file('images') as $image) {
    //             $imageName = $image->getClientOriginalName(); // Use original file name
    //             $image->storeAs('public/upload_image', $imageName); // Store in public/upload_image folder
    //             $imagePaths[] = 'upload_image/' . $imageName; // Store image paths
    //         }
    //         $tourPackage->images = json_encode($imagePaths); // Store image paths as JSON
    //     }

    //     // Save the tour package to the database
    //     $tourPackage->save();

    //     // Optionally, you can return a response or redirect
    //     return response()->json(['message' => 'Tour package created successfully'], 201);
    // }

    public function tourPackageStore(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the single image
            'persons' => 'nullable|integer|min:1',
            'price' => 'nullable|numeric|min:0',
            'duration' => 'nullable|string',
            'itinerary' => 'nullable|string',
            'accommodations' => 'nullable|string',
            'meals' => 'nullable|string',
            'transportation' => 'nullable|string',
            'tour_guides' => 'nullable|string',
            'status' => 'nullable|integer|in:0,1',
        ]);

        // Create a new tour package instance
        $tourPackage = new PefectTourPackages();

        // Assign non-image data to the tour package instance
        $tourPackage->fill($validatedData);

        // Handle image upload
        if ($request->hasFile('images')) {
            $imageName = $request->file('images')->getClientOriginalName(); // Use original file name
            $request->file('images')->move(public_path('assets/frontend/img/packages'), $imageName); // Move to public/upload_image folder
            $tourPackage->images = 'assets/frontend/img/packages/' . $imageName; // Store image path
        }

        // Save the tour package to the database
        $result = $tourPackage->save();
        if($result){
            return redirect()->route('admin.tour.package.list')->with('success', 'Tour Package Added Successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong, Please try again');
        }

        // Optionally, you can return a response or redirect
        // return response()->json(['message' => 'Tour package created successfully'], 201);
    }



    public function tourPackageEdit($id)
    {
        $tour_package = PefectTourPackages::find($id);
        return view('admins.tour_package.edit', compact('tour_package'));
    }
    public function tourPackageUpdate(Request $request, $id)
    {
    }

    public function tourPackageShow($id)
    {
        $tour_package = PefectTourPackages::find($id);
        return view('admins.tour_package.show');
    }

    public function tourPackageDelete($id)
    {
        $tour_package = PefectTourPackages::find($id);
    }

    public function enquiriesList()
    {
        $enquiries = Enquiry::get();
        // dd($enquiries->toArray());
        return view('admins.enquiry.index', compact('enquiries'));
    }
}
