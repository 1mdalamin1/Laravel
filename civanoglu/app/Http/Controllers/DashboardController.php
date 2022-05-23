<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Media;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function deleteMedia($media_id) {
        $media = Media::findOrFail($media_id);
        // delete the file
        Storage::delete('public/uploads/' . $media->name);

        // remove row
        $media->delete();

        return back();
    }

    public function messages() {
        return view('admin.message.index', ['messages' => Contact::latest()->paginate(30)]);
    }

    public function deleteMessage($message_id) {
        $contact = Contact::findOrFail($message_id);
        $contact->delete();

        return back();
    }

    public function properties()
    {
        $properties = Property::latest()->paginate(20);
        return view('admin.properties', ['properties' => $properties]);
    }
}
