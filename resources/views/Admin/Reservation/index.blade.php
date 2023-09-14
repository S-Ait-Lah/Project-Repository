<x-admin-layout>
    <div>
        <x-primary-button class="mb-3">
          <a href="{{url('/admin/reservations/create')}}">Ajouter</a> 
        </x-primary-button>
        <table class="table table-fixed">
            <thead>
                <tr>
                  <th class="border border-slate-300 ...">ID</th>
                  <th class="border border-slate-300 ...">Nom</th>
                  <th class="border border-slate-300 ...">Prenom</th>
                  <th class="border border-slate-300 ...">Gmail</th>
                  <th class="border border-slate-300 ...">Phone</th>
                  <th class="border border-slate-300 ...">Guest Number</th>
                  <th class="border border-slate-300 ...">Reservation Date</th>
                </tr>
            </thead>
            <tbody>
              @foreach($reservations as $value)
                <tr>
                    <td class="border border-slate-300 ...">{{$value->id}}</td>
                    <td class="border border-slate-300 ...">{{$value->first_name}}</td>
                    <td class="border border-slate-300 ...">{{$value->last_name}}</td>
                    <td class="border border-slate-300 ...">{{$value->gmail}}</td>
                    <td class="border border-slate-300 ...">{{$value->tel_number}}</td>
                    <td class="border border-slate-300 ...">{{$value->guest_number}}</td>
                    <td class="border border-slate-300 ...">{{$value->res_date}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-center">{{$reservations->links()}}</div>      
    </div>
</x-admin-layout>