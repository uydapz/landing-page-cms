<x-DashboardLayout :title="$title ?? ''">
    <x-CheckValidate />
    <x-Alert />
    @include('components.molecules.AddModalGallery')
    <x-DataTables :tabel="$title" jenis="multi-filter-select" modal="AddModalGallery">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Caption</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Caption</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($gallery as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage/gallery/' . $g->image) }}" class="img-fluid" style="max-width: 20%"
                            alt=""></td>
                    <td>{{ $g->caption }}</td>
                    <x-buttonAction modal="EditModalGallery-{{ $g->id }}" delete="gallery/{{ $g->id }}" />
                </tr>
                @include('components.molecules.EditModalGallery')
            @endforeach
        </tbody>
    </x-DataTables>
</x-DashboardLayout>
