<x-admin-layout>
    <div>
        <x-primary-button class="mb-3">
          <a href="{{url('/admin/tables/create')}}">Ajouter</a> 
        </x-primary-button>
        <table class="table table-fixed">
            <thead>
                <tr>
                  <th class="border border-slate-300 ...">ID</th>
                  <th class="border border-slate-300 ...">status</th>
                  <th class="border border-slate-300 ...">Nom</th>
                  <th class="border border-slate-300 ...">Location</th>
                  <th class="border border-slate-300 ...">Guesr Number</th>
                </tr>
            </thead>
            <tbody>
              @foreach($tables as $value)
                <tr>
                    <td class="border border-slate-300 ...">{{$value->id}}</td>
                    <td class="border border-slate-300 ...">{{$value->status}}</td>
                    <td class="border border-slate-300 ...">{{$value->name}}</td>
                    <td class="border border-slate-300 ...">{{$value->location}}</td>
                    <td class="border border-slate-300 ...">{{$value->guest_number}}</td>
                    <td class="border border-slate-300 ...">
                      <div class="d-flex justify-content-center">
                        <div class="pe-2">
                          <form action="{{route('admin.tables.destroy',$value)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="bg-danger text-light p-2"><i class="bi bi-x"></i><button>
                          </form>
                        </div>
                        <div class="">
                          <form action="{{route('admin.tables.edit',$value)}}" method="POST">
                            @method('get')
                            @csrf
                            <button class="text-light bg-primary p-2"><i class="bi bi-pencil"></i></button>
                          </form>
                        </div>
                      </div>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-center">{{$tables->links()}}</div>      
    </div>
</x-admin-layout>