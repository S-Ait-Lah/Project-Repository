<x-admin-layout>
    <div class="container d-flex justify-center">
        <div class="p-3 bg-info w-50 rounded-md">
            <form action="{{route('admin.menus.update',$menu)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <x-input-label>Nom</x-input-label>
                    <x-text-input name="name" placeholder="Nom" class="form-control" value="{{$menu->name}}"/>
                </div>
                <div class="form-group">
                    <x-input-label>Description</x-input-label>
                    <textarea name="description"  class="form-control" value="{{$menu->description}}">{{$menu->description}}</textarea>
                </div>
                <div class="form-group">
                    <x-input-label >Category</x-input-label>
                    <select class="form-control" name="catogure_id">
                        @foreach($categories as $value)
                            <option value="{{$menu->catogure_id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <x-input-label >Image</x-input-label>
                    <input type="file" name="image" value="{{$menu->image}}"/>
                </div>

                <div class="pt-3">
                    <x-primary-button>Update</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>