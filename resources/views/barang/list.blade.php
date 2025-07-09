@extends('layout')
@section('judul', 'Kostum')
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Daftar Kostum Cosplayer</p>
        <p class="subtitle">Penyewaan Berbagai Pilihan Kostum</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns is-multiline">
            @foreach ($data as $index => $item)
            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            @if ($item->gambar)
                            <img src="{{ Storage::url($item->gambar) }}" alt="Gambar Kostum">
                            @else
                            <img src="https://via.placeholder.com/256x256" alt="Placeholder">
                            @endif
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $item->nama_barang }}</p>
                            </div>
                        </div>

                        <div class="content">
                            <p>{{ $item->deskripsi_kostum }}</p>
                            
                            
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/barang/{{ $item->id }}" class="card-footer-item">Detail Kostum</a>
                        
                        @if ($item->status == 'available')
                        <a href="/sewa/{{ $item->id }}" class="card-footer-item">Sewa</a>
                        @endif
                    </footer>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
