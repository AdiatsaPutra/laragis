<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MapLocation extends Component
{
    public $long, $lat, $tgl;

    public function render()
    {
        return view('livewire.map-location');
    }

    // public function previewImage(){
    //     if(!$isEdit) {
    //         $this->validate([
    //             'image' => 'image|max:2048'
    //         ]);
    //     }        
    // }
    // public function store(){  
    //     $this->validate([
    //         'long' => 'required',
    //         'lat' => 'required',
    //         'title' => 'required',
    //         'description' => 'required',
    //         'image' => 'image|max:2048|required',
    //     ]);

    //     $imageName = md5($this->image.microtime()).'.'.$this->image->extension();

    //     Storage::putFileAs(
    //         'public/images',
    //         $this->image,
    //         $imageName
    //     );

    //     Marker::create([
    //         'long' => $this->long,
    //         'lat' => $this->lat,
    //         'title' => $this->title,
    //         'description' => $this->description,
    //         'image' => $imageName,
    //         'user_id' => Auth::id(),
    //     ]);

    //     session()->flash('info', 'Product Created Successfully');

    //     $this->clearForm();
    //     $this->getLocations();    
    //     $this->dispatchBrowserEvent('locationAdded', $this->geoJson);        
    // }

    // public function update(){  
    //     $this->validate([
    //         'long' => 'required',
    //         'lat' => 'required',
    //         'title' => 'required',
    //         'description' => 'required',
    //     ]);

    //     $location = Marker::findOrFail($this->locationId);

    //     if($this->image){
    //         $imageName = md5($this->image.microtime()).'.'.$this->image->extension();

    //         Storage::putFileAs(
    //             'public/images',
    //             $this->image,
    //             $imageName
    //         );

    //         $updateData = [
    //             'title' => $this->title,
    //             'description' => $this->description,
    //             'image' => $imageName,
    //         ];
    //     }else{
    //         $updateData = [
    //             'title' => $this->title,
    //             'description' => $this->description,
    //         ];
    //     }         
    // }
}
