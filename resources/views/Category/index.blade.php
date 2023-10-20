<x-guest-layout>
    <div class="row">
        @foreach($category as $value)
        <div class="col-md-3 p-3">
            <div  style="background-color: white; box-shadow:rgb(38, 57, 77) 0px 20px 30px -10px ">
                <img src="{{Storage::url($value->image)}}" alt="" style="height:150px; width:100%" >
                <div>
                    <a href="{{route('categures.show',$value->id)}}">
                        <h1 class="text-primary  pt-2 text-xl" style="padding:0px 0 10px 10px;">{{$value->name}}</h1>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-guest-layout>