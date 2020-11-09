<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {

        $properties = Property::all();

        return view('property.index')->with('properties',$properties);

    }

    public function show($name)
    {
        $properties = Property::where('name', $name)->get();

        if(!empty($properties)){
            return view('property.show')->with('properties',$properties);
        } else {
            return redirect()->action('PropertyController@index');
        }

    }

    public function create()
    {

        return view('property.create');

    }

    public function store(Request $request)
    {
        $propertySlug = $this->setName($request->title);

        $property = [
            'title'=>$request->title,
            'name'=>$propertySlug,
            'description'=>$request->description,
            'rental_price'=>$request->rental_price,
            'sale_price'=>$request->sale_price
        ];

        Property::create($property);

        return redirect()->action('App\Http\Controllers\PropertyController@index');

    }

    public function edit($name)
    {
        $properties = Property::where('name', $name)->get();

        if(!empty($properties)){
            return view('property.edit')->with('properties',$properties);
        } else {
            return redirect()->action('App\Http\Controllers\PropertyController@index');
        }

    }

    public function update(Request $request, $id)
    {
        $propertySlug = $this->setName($request->title);

        $property = Property::find($id);

        $property->title = $request->title;
        $property->name = $propertySlug;
        $property->description = $request->description;
        $property->rental_price = $request->rental_price;
        $property->sale_price = $request->sale_price;

        $property->save();

        return redirect()->action('App\Http\Controllers\PropertyController@index');

    }

    public function destroy($name)
    {
        $properties = Property::where('name', $name)->get();

        if(!empty($properties)) {
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        }
        return redirect()->action('App\Http\Controllers\PropertyController@index');

    }

    private function setName($title)
    {
        $propertySlug = str_slug($title);

        $properties = Property::all();

        $t = 0;
        foreach ($properties as $property){
            if(str_slug($property->title) === $propertySlug){
                $t++;
            }
        }

        if($t > 0){
            $propertySlug = $propertySlug . '-' . $t;
        }

        return $propertySlug;
    }

}
