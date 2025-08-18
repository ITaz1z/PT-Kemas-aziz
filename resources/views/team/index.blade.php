@extends('layouts.app')

@section('content')
<div class="teams-container">
    <!-- Header Section -->
    <div class="teams-header">
        <div class="container">
            <h1 class="teams-title">Tim Kami</h1>
            <p class="teams-subtitle">Bertemu dengan tim profesional yang berdedikasi untuk memberikan pelayanan terbaik</p>
        </div>
    </div>

    <!-- Teams Grid -->
    <div class="container">
        <div class="teams-grid">
            @foreach($teams as $team)
            <div class="team-card">
                <div class="team-card-inner">
                    <!-- Photo Section -->
                    <div class="team-photo-wrapper">
                        @if($team->photo)
                        <img src="{{ Storage::url($team->photo) }}"
                            class="team-photo"
                            alt="{{ $team->name }}"
                            loading="lazy">
                        @else
                        <div class="team-photo-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                        @endif
                        <div class="team-overlay">
                            <div class="team-social">
                                <!-- Anda bisa menambahkan social media links di sini -->
                            </div>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="team-content">
                        <h3 class="team-name">{{ $team->name }}</h3>
                        <span class="team-position">{{ $team->position }}</span>
                        <p class="team-bio">{{ Str::limit($team->bio, 120) }}</p>

                        <!-- Action Button -->
                        <button class="team-btn" onclick="showFullBio('{{ $team->name }}', '{{ $team->position }}', '{{ addslashes($team->bio) }}')">
                            Lihat Profil
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal untuk menampilkan bio lengkap -->
<div id="teamModal" class="team-modal">
    <div class="team-modal-content">
        <span class="team-modal-close">&times;</span>
        <div class="team-modal-body">
            <h3 id="modalName"></h3>
            <p id="modalPosition"></p>
            <p id="modalBio"></p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // JavaScript untuk modal teams - hanya berjalan di halaman teams
    document.addEventListener('DOMContentLoaded', function() {
        // Function untuk menampilkan modal
        window.showFullBio = function(name, position, bio) {
            document.getElementById('modalName').textContent = name;
            document.getElementById('modalPosition').textContent = position;
            document.getElementById('modalBio').textContent = bio;
            document.getElementById('teamModal').style.display = 'block';
        }

        // Close modal button
        const closeBtn = document.querySelector('.team-modal-close');
        if (closeBtn) {
            closeBtn.onclick = function() {
                document.getElementById('teamModal').style.display = 'none';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('teamModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    });
</script>
@endpush