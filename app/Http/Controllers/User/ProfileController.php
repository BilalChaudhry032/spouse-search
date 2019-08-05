<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Slim;

use Illuminate\Support\Facades\App;
use Image;
use Auth;
use App\Photo;
use App\Contact;

class ProfileController extends Controller
{
    // Location Update

    // Basic Info Update
    public function updateBasicInfo(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->gender_id = $request->gender;
        $user->dob = $request->dob;
        $user->mother_language_id = $request->mother_language;
        $user->about = $request->about;
        $user->save();
        return redirect()->back();
    }

    // Photos Upload
    public function updateProfilePi(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $location = storage_path('uploads/avatar/');
            Image::make($avatar)->resize(300, 300)->save($location . $filename);
            $user = Auth::user();
            $user->profile_pic = $filename;
            $user->save();
        }
        return redirect()->back();
    }



    public function updateProfilePic(Request $request)
    {



        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        if ( $request->avatar )
        {
            // Pass Slim's getImages the name of your file input, and since we only care about one image, postfix it with the first array key
            $image = Slim::getImages('avatar')[0];
            //dd($image);
            // Grab the ouput data (data modified after Slim has done its thing)
            if ( isset($image['output']['data']) )
            {

                //dd($image);
                // Original file name
                $name = $image['output']['name'];

                // Base64 of the image
                $data = $image['output']['data'];

                // Server path
                $path = asset('../storage/uploads/avatar/');

                // Save the file to the server
                $file = Slim::saveFile($data, $name, $path);

                // Get the absolute web path to the image
                $imagePath = asset('../storage/uploads/avatar/' . $file['name']);

                $user->profile_pic = $imagePath;
                $user->save();
            }
        }

        return redirect()->back()->with('success', "User's profile picture has been updated!");
    }

    // Gallery Upload
    public function addGalleryPhoto(Request $request)
    {
        $photos = Photo::all();

        if ($request->hasFile('gallery_photo')) {

            // Check If user have already value
            $havePhoto = false;
            foreach($photos as $photo){
                if ($photo->user_id == Auth::user()->id){
                    $havePhoto = true;
                }
            }

            if ($havePhoto){

                $p = Photo::where('user_id','=',Auth::user()->id)->first();

                $avatar = $request->file('gallery_photo');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $location = public_path('uploads/gallery/');
                Image::make($avatar)->save($location . $filename);

                if (!$p->photo_1){
                    $p->photo_1 = $filename;
                }
                elseif (!$p->photo_2){
                    $p->photo_2 = $filename;
                }
                elseif (!$p->photo_3){
                    $p->photo_3 = $filename;
                }
                elseif (!$p->photo_4){
                    $p->photo_4 = $filename;
                }
                elseif (!$p->photo_5){
                    $p->photo_5 = $filename;
                }
                elseif (!$p->photo_6){
                    $p->photo_6 = $filename;
                }

                $p->save();


            }

            else{
                $photo = new Photo;
                $photo->user_id = Auth::user()->id;

                $avatar = $request->file('gallery_photo');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $location = public_path('uploads/gallery/');
                Image::make($avatar)->save($location . $filename);
                $photo->photo_1 = $filename;
                $photo->save();
            }


        }
        return redirect()->back();
    }


    public function updateLocation(Request $request)
    {
        $user = Auth::user();
        $user->country_id = $request->country;
        $user->state_id = $request->state;
        $user->city_id = $request->city;
        $user->save();
        return redirect()->back();
    }

    public function updateContact(Request $request, $id)
    {
        //dd($request->facebook);


        $contact = Contact::where('user_id', $id)->get();


        if($contact->isEmpty()){
            $contact_details = new Contact;
            $contact_details->user_id = Auth::user()->id;
            $contact_details->facebook = $request->facebook;
            $contact_details->whatsapp_no = $request->whatsapp;
            $contact_details->phone_one = $request->phone_one;
            $contact_details->phone_two = $request->phone_two;
            $contact_details->mobile_one = $request->mobile_one;
            $contact_details->mobile_two = $request->mobile_two;
            $contact_details->save();
            return redirect()->back();
        }
        else{
            $contact = Contact::find(Auth::user()->id);
            //dd($contact->facebook);
            $contact->facebook = $request->facebook;
            $contact->whatsapp_no = $request->whatsapp;
            $contact->phone_one = $request->phone_one;
            //dd($contact);
            $contact->phone_two = $request->phone_two;
            $contact->mobile_one = $request->mobile_one;
            $contact->mobile_two = $request->mobile_two;
            $contact->save();
            return redirect()->back();
        }
    }

    public function updateEducation(Request $request)
    {
        $user = Auth::user();
        $user->education_id = $request->education;
        $user->occupation_id = $request->occupation;
        $user->income_id = $request->income;
        $user->save();
        return redirect()->back();
    }


    // About Function Update

    // Education & Career Update
}
