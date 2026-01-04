<x-DashboardLayout :title="$title ?? ''">
    <style>
        .custom-img {
            max-width: 100%;
            /* Pastikan gambar tidak melebihi lebar elemen induknya */
            height: auto;
            /* Pertahankan aspek rasio gambar */
            max-height: 100px;
            /* Sesuaikan tinggi maksimal gambar sesuai kebutuhan */
            width: auto;
            /* Pertahankan aspek rasio gambar */
        }
    </style>
    <x-CheckValidate />
    <x-Alert />
    @include('components.molecules.AddModalUser')
    <x-DataTables :tabel="$title" jenis="multi-filter-select" modal="AddModalUser">
        <thead>
            <tr>
                <th>No</th>
                <th>username</th>
                <th>nama</th>
                <th>foto</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>username</th>
                <th>nama</th>
                <th>foto</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($user as $u)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $u->username }}</td>
                    <td>{{ $u->nama }}</td>
                    <td>
                        <img src="{{ asset('storage/user/' . $u->foto) }}" class="img-fluid custom-img" alt="">
                    </td>
                    <td>{{ $u->caption }}</td>
                    <x-buttonAction modal="EditModalUser-{{ $u->id }}" delete="user/{{ $u->id }}" />
                </tr>
                @include('components.molecules.EditModalUser')
            @endforeach
        </tbody>
    </x-DataTables>
</x-DashboardLayout>
