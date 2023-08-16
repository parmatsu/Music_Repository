const tracks = document.querySelectorAll('track');
const overlay = document.getElementById('overlay');
const audioSource = document.getElementById('audio_source');
const audioPlayer = document.getElementById('audio_player');

tracks.forEach(track => {
    track.addEventListener('click', () => {
        const src = track.getAttribute('data-src');
        audioSource.src = src;
        audioPlayer.load();
        audioPlayer.play();
        overlay.style.display = 'block';
    });
});

overlay.addEventListener('click', () => {
    audioPlayer.pause();
    overlay.style.display = 'none';
});