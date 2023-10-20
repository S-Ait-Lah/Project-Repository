<x-guest-layout>
    <div class="d-flex  justify-content-center align-items-center" style="height:85vh">
        <div class=" w-50 bg-info p-3">
            <form action="{{route('reservation.step.tow.store')}}" method="POST">
                @csrf
                <div class="form-group" >
                    <x-input-label>Table</x-input-label>
                    <select name="table_id"  class="form-control">
                        <option value="" disabled selected hidden>Please Choose...</option>
                        @foreach($tables as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="pt-3">
                    <x-primary-button>Envoyer</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>