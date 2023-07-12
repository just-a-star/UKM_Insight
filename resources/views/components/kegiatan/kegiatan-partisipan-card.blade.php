<div class="mt-4 rounded-sm border border-slate-200 bg-white p-6 shadow-lg">
    <h2 class="text-lg font-semibold text-slate-800">Partisipan Kegiatan</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="py-2 text-left">Role</th>
                    <th class="py-2 text-left">Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataKegiatan->partisipanKegiatan as $partisipan)
                    @php
                        $role = '';
                        if ($partisipan->role === 'peserta') {
                            $role = 'Peserta';
                        } elseif ($partisipan->role === 'panitia') {
                            $role = 'Panitia';
                        } elseif ($partisipan->role === 'pembicara') {
                            $role = 'Pembicara';
                        } elseif ($partisipan->role === 'penyelenggara') {
                            $role = 'Penyelenggara';
                        } elseif ($partisipan->role === 'sponsor') {
                            $role = 'Sponsor';
                        } elseif ($partisipan->role === 'penanggung_jawab') {
                            $role = 'Penanggung Jawab';
                        }
                    @endphp
                    <tr>
                        <td class="py-2">
                            <span class="rounded-sm bg-gray-200 px-2 py-1 text-sm">{{ $role }}</span>
                        </td>
                        <td class="py-2">{{ $partisipan->anggota?->nama ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
