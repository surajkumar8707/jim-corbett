<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\PefectTourPackages;
use App\Models\HomePageCarousel;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Description of your controller function.
     * @Route : home
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = PefectTourPackages::where([
            'tour_category_id' => 2,
            'status' => 1,
        ])->get();

        $tour_packages = PefectTourPackages::where([
            'tour_category_id' => 1,
            'status' => 1,
        ])->get();

        $corbett_packages = PefectTourPackages::where([
            'tour_category_id' => 3,
            'status' => 1,
        ])->get();

        $home_page_carousel = HomePageCarousel::where('status', 1)->orderBy('status', 'DESC')->get();
        // dd($packages->toArray());
        return view('home', compact('packages', 'tour_packages', 'corbett_packages', 'home_page_carousel'));
    }

    /**
     * Description of your controller function.
     * @Route : package/{id}
     * @Route_name : package.show
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = PefectTourPackages::find($id);
        return view('package_details', compact('package'));
    }

    /**
     * Description of your controller function.
     * @Route : about
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Description of your controller function.
     * @Route : contact
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * This functions stores the contact information
     * Route Name : save.contact
     * Route : save-contact
     * Method : POST
     * @return \Illuminate\View\View
     */
    public function saveContact(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = Contact::create($validatedData);


        $to = "harshitajoshi@corbettnationalparkbooking.co.in"; // Admin's email address
        $subject = "New Contact Received from " . $validatedData['name']; // Email subject
        $message = "Name: " . $validatedData['name'] . "\n" .
            "Email: " . $validatedData['email'] . "\n" .
            // "Phone: " . $validatedData['phone'] . "\n" .
            "Message: " . $validatedData['message']; // Email message
        $headers = "From: " . $validatedData['email']; // Sender's email address as From

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            $message = "Enquiry submitted successfully!";
        } else {
            $message = "Failed to submit enquiry.";
        }

        // Optionally, you can add a success message or redirect to a thank-you page
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Description of your controller function.
     * @Route : jungle-safari
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function jungleSafari()
    {
        return view('jungle_safari');
    }

    /**
     * Description of your controller function.
     * @Route : canter-ride
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function canterRide()
    {
        return view('canter_ride');
    }

    /**
     * Description of your controller function.
     * @Route : resorts
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function resorts()
    {
        $packages = PefectTourPackages::where([
            'tour_category_id' => 2,
            'status' => 1,
        ])->get();
        // dd($packages);
        return view('resorts', compact('packages'));
    }

    /**
     * Description of your controller function.
     * @Route : school-group
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function schoolGroup()
    {
        return view('school_group');
    }

    /**
     * Description of your controller function.
     * @Route : destinationd-wedding
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destinationdWedding()
    {
        return view('destinationd_wedding');
    }

    /**
     * Description of your controller function.
     * @Route : coorporate-group
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function coorporateGroup()
    {
        return view('coorporate_group');
    }

    /**
     * Description of your controller function.
     * @Route : privacy-policy
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function privacyPolicy()
    {
        return view('privacy_policy');
    }

    /**
     * Description of your controller function.
     * @Route : term-condition
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function termCondition()
    {
        return view('term_condition');
    }

    public function enquirySubmit(Request $request)
    {
        // dd($request->all());
        // $enquiry = Enquiry::create([]);

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new Enquiry instance and store it in the database
        $enquiry = Enquiry::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'message' => $validatedData['message'],
        ]);

        // $main_email = "harshitajoshi@corbettnationalparkbooking.co.in";
        // $from = "harshitajoshi@corbettnationalparkbooking.co.in";
        // $to = "surraj8707@gmail.com"; // Receiver's email address
        // $subject = "Test Email"; // Email subject
        // $mail_message = "This is a test email sent using the PHP mail function."; // Email message
        // $headers = "From: " . $from . "\r\n" .
        //     "Reply-To: " . $from . "\r\n" .
        //     "X-Mailer: PHP/" . phpversion(); // Email headers

        // // Send email
        // if (mail($to, $subject, $mail_message, $headers)) {
        //     $message = "Email sent successfully.";
        // } else {
        //     $message = "Failed to send email.";
        // }

        // Construct email message
        $to = "harshitajoshi@corbettnationalparkbooking.co.in"; // Admin's email address
        $subject = "New Enquiry Received from " . $validatedData['name']; // Email subject
        $message = "Name: " . $validatedData['name'] . "\n" .
            "Email: " . $validatedData['email'] . "\n" .
            "Phone: " . $validatedData['phone'] . "\n" .
            "Message: " . $validatedData['message']; // Email message
        $headers = "From: " . $validatedData['email']; // Sender's email address as From

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            $message = "Enquiry submitted successfully!";
        } else {
            $message = "Failed to submit enquiry.";
        }

        return redirect()->back()->with('success', 'Enquiry submitted successfully!');
    }
}
