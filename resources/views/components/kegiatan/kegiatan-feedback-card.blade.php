<div class="p-6 mt-4 bg-white border rounded-sm shadow-lg border-slate-200">
    <h2 class="text-lg font-semibold text-slate-800">Feedback Kegiatan</h2>

    <table class="min-w-full mt-4 divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">No.</th>
                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Rating</th>
                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Komentar
                </th>
                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Nama</th>
                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Role</th>
                <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-500 uppercase">Tanggal</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($dataKegiatan->feedbackKegiatan as $index => $feedback)
                <tr>
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">
                        <span
                            class="@if ($feedback->rating === 'Excellent') bg-green-500 text-white
                                @elseif ($feedback->rating === 'Good') bg-blue-500 text-white
                                @elseif ($feedback->rating === 'Fair') bg-yellow-500 text-gray-900
                                @elseif ($feedback->rating === 'Poor') bg-red-500 text-white @endif inline-block rounded px-2 py-1 text-xs font-semibold">
                            {{ $feedback->rating }}
                        </span>
                    </td>
                    <td class="px-6 py-4">{{ $feedback->komentar }}</td>
                    <td class="px-6 py-4">
                        @if ($feedback->partisipan_kegiatan_id)
                            @php
                                $partisipan = \App\Models\PartisipanKegiatan::find($feedback->partisipan_kegiatan_id);
                            @endphp
                            @if ($partisipan)
                                {{ $partisipan->anggota->nama ?? 'N/A' }}
                            @else
                                N/A
                            @endif
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if ($feedback->partisipan_kegiatan_id)
                            @php
                                $partisipan = \App\Models\PartisipanKegiatan::find($feedback->partisipan_kegiatan_id);
                            @endphp
                            @if ($partisipan)
                                <span
                                    class="@if ($partisipan->role === 'peserta') bg-indigo-500 text-indigo-50
                                        @elseif ($partisipan->role === 'panitia') bg-purple-500 text-purple-50
                                        @elseif ($partisipan->role === 'pembicara') bg-green-500 text-green-50
                                        @elseif ($partisipan->role === 'penyelenggara') bg-yellow-500 text-yellow-50
                                        @elseif ($partisipan->role === 'sponsor') bg-blue-500 text-blue-50
                                        @elseif ($partisipan->role === 'penanggung_jawab') bg-red-500 text-red-50 @endif inline-block rounded px-2 py-1 text-xs font-semibold">
                                    {{ $partisipan->role }}
                                </span>
                            @else
                                N/A
                            @endif
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="px-6 py-4">{{ $feedback->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
