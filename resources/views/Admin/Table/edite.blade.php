<x-admin-layout>
    <div class="container d-flex justify-center">
        <div class="p-3 bg-info w-50 rounded-md">
            <form action="{{route('admin.tables.update',$table)}}" method="post">
                @method('put')
                @csrf
                <div class="form-group">
                    <x-input-label>Nom</x-input-label>
                    <x-text-input name="name" placeholder="Nom" class="form-control" value="{{$table->name}}"/>
                </div>
                <div class="form-group">
                    <x-input-label >Guest Number</x-input-label>
                    <x-text-input name="guest_number" placeholder="0000" type="number" class="form-control" value="{{$table->guest_number}}"/>
                </div>
                <div class="form-group">
                    <x-input-label>Location</x-input-label>
                    <select name="location" class="form-control">
                        <option value="" disabled selected hidden>Please Choose...</option>
                        @foreach(App\Enums\TableLocations::cases() as $value)
                            <option value="{{$value}}" @selected($table->location==$value)>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <x-input-label>Status</x-input-label>
                    <select name="status" class="form-control">
                        <option  disabled selected hidden>Please Choose...</option>
                        @foreach(App\Enums\TableStatus::cases() as $value)
                            <option value="{{$value}}" @selected($table->status==$value)>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
               

                <div class="pt-3">
                    <x-primary-button>Envoyer</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>