<x-guest-layout>
    <div class="row">
        @foreach($category->menus as $value)
        <div class="col-md-3 p-3">
            <div  style="background-color: white; box-shadow:rgb(38, 57, 77) 0px 20px 30px -10px ">
                <img src="{{Storage::url($value->image)}}" alt="" style="height:150px; width:100%" >
                <div  style="padding:0px 10px 10px 10px;">
                    <h1 class="text-primary  pt-2 text-xl">{{$value->name}}</h1>
                    <p style="color:grey">{{$value->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-guest-layout>