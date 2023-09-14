<x-admin-layout>
    <div>
        <x-primary-button class="mb-3">
          <a href="{{url('/admin/catogures/create')}}">Ajouter</a> 
        </x-primary-button>
        <table class="table table-fixed">
            <thead>
                <tr>
                  <th class="border border-slate-300 ...">ID</th>
                  <th class="border border-slate-300 ...">Nom</th>
                  <th class="border border-slate-300 ...">Description</th>
                  <th class="border border-slate-300 ...">image</th>
                  <th class="border border-slate-300 ...">Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach($catogures as $value)
                <tr>
                    <td class="border border-slate-300 ...">{{$value->id}}</td>
                    <td class="border border-slate-300 ...">{{$value->name}}</td>
                    <td class="border border-slate-300 ...">{{$value->description}}</td>
                    <td class="border border-slate-300 ..."><img style="height: 30px; width:30px;" src="{{Storage::url($value->image)}}" alt=""></td>
                    <td class="border border-slate-300 ...">
                      <div class="d-flex justify-content-center">
                        <div class="pe-2">
                          <form action="{{route('admin.catogures.destroy',$value)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="bg-danger text-light p-2"><i class="bi bi-x"></i><button>
                          </form>
                        </div>
                        <div class="">
                          <form action="{{route('admin.catogures.edit',$value)}}" method="POST">
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

        <div class="d-flex justify-center">{{$catogures->links()}}</div>      


        <!-- <table class="border-collapse border border-slate-400 ...">
  <thead>
    <tr>
      <th class="border border-slate-300 ...">State</th>
      <th class="border border-slate-300 ...">City</th>
      <th class="border border-slate-300 ...">State</th>
      <th class="border border-slate-300 ...">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-slate-300 ...">Indiana</td>
      <td class="border border-slate-300 ...">Indianapolis</td>
      <td class="border border-slate-300 ...">Indiana</td>
      <td class="border border-slate-300 ...">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-slate-300 ...">Ohio</td>
      <td class="border border-slate-300 ...">Columbus</td>
      <td class="border border-slate-300 ...">Ohio</td>
      <td class="border border-slate-300 ...">Columbus</td>
    </tr>
    <tr>
      <td class="border border-slate-300 ...">Michigan</td>
      <td class="border border-slate-300 ...">Detroit</td>
      <td class="border border-slate-300 ...">Ohio</td>
      <td class="border border-slate-300 ...">Columbus</td>
    </tr>
  </tbody>
</table> -->
    </div>
</x-admin-layout>