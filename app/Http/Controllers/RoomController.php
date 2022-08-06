<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::paginate(10);
        return view('pages.erp.room.index', ['rooms' => $rooms]);
    }
    public function create()
    {
        return view("pages.erp.room.create");
    }

    public function store(Request $request)
    {
        //		room::create($request->all());

        $room = new room;
        $room->name = $request->txtName;
        $room->student_count = $request->txtCapacity;
        $room->save();
        return back()->with('success', 'Created Successfully.');
    }

    public function destroy(Room $room){
		$room->delete();
		return redirect()->route("rooms.index")->with('success','Deleted Successfully.');
	}


    public function show($id){
		$room=Room::find($id);
		return view("pages.erp.room.show",["room"=>$room]);
	}


    public function edit(Room $room){

		return view("pages.erp.room.edit",["room"=>$room]);
	}

    public function update(Request $request,Room $room){

       // echo "ok";

		$room->name=$request->txtName;
		$room->student_count=$request->capacity;
		$room->updated_at=date("Y-m-d");
		$room->update();
		return redirect()->route("rooms.index")->with('success','Updated Successfully.');
    }

}
