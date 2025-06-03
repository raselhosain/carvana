<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarFeature;
use App\Models\OtherImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cars = Car::paginate(3);

        return view('backend.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.car.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'reguller_price' => ['required', 'integer'],
            'selling_price' => ['required', 'integer'],
            'down_payment' => ['required', 'integer'],
            'weekly_rent' => ['required', 'integer'],
            'description' => ['required'],
            'cover_image' => ['required'],
            'status' => ['required']
        ]);

        $car = new Car();

        $car->title = $request->title;
        $car->slug = Str::slug($request->title);
        $car->reguller_price = $request->reguller_price;
        $car->selling_price = $request->selling_price;
        $car->down_payment = $request->down_payment;
        $car->weekly_rent = $request->weekly_rent;
        $car->description = $request->description;
        $car->status = $request->status;

        $image = $request->cover_image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $ext;
        $image->move('uploads/cars/cover_image/', $imageName);
        $imageUrl = 'uploads/cars/cover_image/' . $imageName;

        $car->cover_image = $imageUrl;

        $car->save();

        if ($request->hasFile('other_images')) {
            foreach ($request->other_images as $image) {
                $ext = $image->getClientOriginalExtension();
                $imageName = uniqid() . '.' . $ext;
                $image->move('uploads/cars/other_image/', $imageName);
                $imageUrl = 'uploads/cars/other_image/' . $imageName;

                $carImage = new OtherImage();
                $carImage->car_id = $car->id;
                $carImage->image = $imageUrl;
                $carImage->save();
            }
        }

        $features = $request->features;

        if ($features && is_array($features)) {
            foreach ($features as $feature) {
                if (!empty($feature)) {
                    $carFeature = new CarFeature();
                    $carFeature->car_id = $car->id;
                    $carFeature->feature = $feature;
                    $carFeature->save();
                }
            }
        }

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);

        return view('backend.car.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);

        return view('backend.car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'reguller_price' => ['required', 'integer'],
        'selling_price' => ['required', 'integer'],
        'down_payment' => ['required', 'integer'],
        'weekly_rent' => ['required', 'integer'],
        'description' => ['required'],
        'status' => ['required'],
        'cover_image' => ['nullable', 'image'],
        'other_images.*' => ['nullable', 'image'],
    ]);

    $car = Car::findOrFail($id);

    $car->title = $request->title;
    $car->slug = Str::slug($request->title);
    $car->reguller_price = $request->reguller_price;
    $car->selling_price = $request->selling_price;
    $car->down_payment = $request->down_payment;
    $car->weekly_rent = $request->weekly_rent;
    $car->description = $request->description;
    $car->status = $request->status;

    if ($request->hasFile('cover_image')) {
        if ($car->cover_image && file_exists(public_path($car->cover_image))) {
            unlink(public_path($car->cover_image));
        }

        $image = $request->file('cover_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/cars/cover_image/', $imageName);
        $car->cover_image = 'uploads/cars/cover_image/' . $imageName;
    }

    $car->save();

    if ($request->hasFile('other_images')) {

        foreach ($car->otherImage as $oldImage) {
            if ($oldImage->image && file_exists(public_path($oldImage->image))) {
                unlink(public_path($oldImage->image));
            }
            $oldImage->delete();
        }

        foreach ($request->file('other_images') as $image) {
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/cars/other_image/', $imageName);

            $carImage = new OtherImage();
            $carImage->car_id = $car->id;
            $carImage->image = 'uploads/cars/other_image/' . $imageName;
            $carImage->save();
        }
    }

    $car->carFeature()->delete();

    if ($request->has('features')) {
        foreach ($request->features as $feature) {
            if (!empty($feature)) {
                $carFeature = new CarFeature();
                $carFeature->car_id = $car->id;
                $carFeature->feature = $feature;
                $carFeature->save();
            }
        }
    }

    return redirect()->route('car.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findOrFail($id);

        if ($car->cover_image && file_exists(public_path($car->cover_image))) {
            unlink(public_path($car->cover_image));
        }

        if ($car->otherImage && $car->otherImage->count()) {
            foreach ($car->otherImage as $image) {

                if (file_exists(public_path($image->image))) {
                    unlink(public_path($image->image));
                }

                $image->delete();
            }
        }

        if ($car->carFeature && $car->carFeature->count()) {
            foreach ($car->carFeature as $feature) {

                $feature->delete();
            }
        }

        $car->delete();

        return back();
    }
}
