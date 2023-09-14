
<x-admin-layout>
    <div class="container d-flex justify-center">
        <div class="p-3 bg-info w-50 rounded-md">
            <form action="{{route('admin.catogures.update',$catogure)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <x-input-label>Nom</x-input-label>
                    <x-text-input name="name" placeholder="Nom" class="form-control" value="{{$catogure->name}}"/>
                </div>
                <div class="form-group">
                    <x-input-label>Description</x-input-label>
                    <textarea name="description"  class="form-control">{{$catogure->description}}</textarea>
                </div>
                <div>
                    <div class="form-group">
                        <x-input-label >Image</x-input-label>
                        <input type="file" name="image" value="{{$catogure->image}}"/>
                    </div>
                    <div class="pt-1">
                        <img src="{{Storage::url($catogure->image)}}" alt=""style="height:100px; width:100px">
                    </div>
                </div>
                <div class="pt-3">
                    <x-primary-button>Update</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>