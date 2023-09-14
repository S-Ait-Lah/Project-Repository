
<x-admin-layout>
    <div class="container d-flex justify-center">
        <div class="p-3 bg-info w-50 rounded-md">
            <form action="{{route('admin.catogures.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-input-label>Nom</x-input-label>
                    <x-text-input name="name" placeholder="Nom" class="form-control"/>
                </div>
                <div class="form-group">
                    <x-input-label>Description</x-input-label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <x-input-label >Image</x-input-label>
                    <input type="file" name="image" />
                </div>

                <div class="pt-3">
                    <x-primary-button>Envoyer</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>