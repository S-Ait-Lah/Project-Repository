<x-admin-layout>
<div class="container d-flex justify-center">
    <div class="p-3 bg-info w-50 rounded-md">
        <form class="" action="{{url('/admin/reservations')}}" method="POST">
            @csrf

            <div class="form-group">
                <x-input-label>Nom</x-input-label>
                <x-text-input name="first_name" placeholder="Nom" value="{{$reservation->first_name}}" class="form-control"/>
            </div>
            <div class="form-group">
                <x-input-label>Prenom</x-input-label>
                <x-text-input name="last_name" placeholder="Prenom" value="{{$reservation->last_name}}" class="form-control"/>
            </div>
            <div class="form-group">
                <x-input-label >Gmail</x-input-label>
                <x-text-input name="gmail" placeholder="Gmail" value="{{$reservation->gmail}}" class="form-control"/>
            </div>
            <div class="form-group">
                <x-input-label >Phone</x-input-label>
                <x-text-input name="tel_number" placeholder="Phone" value="{{$reservation->tel_number}}" class="form-control"/>
            </div>
            <div class="form-group">
                <x-input-label >Guest Number</x-input-label>
                <x-text-input name="guest_number" placeholder="0000" type="number" value="{{$reservation->guest_number}}" class="form-control"/>
            </div>
            <div class="form-group">
                <x-input-label name="location">Location</x-input-label>
                <x-text-input placeholder="Location" class="form-control"/>
            </div>
         @php/*@endphp   <div class="form-group">
                <x-input-label name="res_date"> Date Reservation</x-input-label>
                <select class="form-control">
                    @foreach(App\Enums\TableLocations::cases() as $value)
                        <option>{{$value->name}}</option>
                    @endforeach
                </select>
            </div>
            @php*/@endphp

            <div class="pt-3">
                <x-primary-button>Update</x-primary-button>
            </div>

        </form>
    </div>
</div>
</x-admin-layout>