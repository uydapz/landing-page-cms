<x-DashboardLayout :title="$title ?? ''">
    <x-CheckValidate />
    <x-Alert />
    @include('components.molecules.AddModalCategory')
    <x-DataTables :tabel="$title" jenis="multi-filter-select" modal="AddModalCategory">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($category as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->slug }}</td>
                    <x-buttonAction modal="EditModalCategory-{{ $c->id }}" delete="category/{{ $c->id }}" />
                </tr>
                @include('components.molecules.EditModalCategory')
            @endforeach
        </tbody>
    </x-DataTables>
</x-DashboardLayout>
