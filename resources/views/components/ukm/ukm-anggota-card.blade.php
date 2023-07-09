<div class="rounded-sm border border-slate-200 bg-white p-6 shadow-lg">
    <h2 class="text-lg font-semibold text-slate-800">Anggota UKM</h2>
    <div class="mt-4 space-y-4">
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Posisi</th>
                    <th class="px-4 py-2 text-left">Masa Jabatan</th>
                    <th class="px-4 py-2 text-left">Angkatan</th>
                    <th class="px-4 py-2 text-left">No. Telepon</th>
                    <th class="px-4 py-2 text-left">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach (['Leader', 'Secretary', 'Treasurer', 'Member'] as $posisi)
                    @foreach ($anggotaList as $anggota)
                        @if ($anggota->posisi == $posisi)
                            <tr>
                                <td class="px-4 py-2">{{ $anggota->nama }}</td>
                                <td class="px-4 py-2">{{ $anggota->posisi }}</td>
                                <td class="px-4 py-2">{{ $anggota->masa_jabatan }}</td>
                                <td class="px-4 py-2">{{ $anggota->angkatan }}</td>
                                <td class="px-4 py-2">{{ $anggota->no_telepon }}</td>
                                <td class="px-4 py-2">{{ $anggota->email }}</td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
