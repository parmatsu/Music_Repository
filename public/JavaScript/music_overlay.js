const tracks = document.querySelectorAll('.track');
const overlay = document.getElementById('overlay');
const audioSource = document.getElementById('audio_source');
const audioPlayer = audioSource.parentElement; // audioPlayerの定義を追加
tracks.forEach(track => {
    track.addEventListener('click', () => {
        const src = track.getAttribute('data-src');
        if (src) {
            audioSource.src = src;
            audioPlayer.load();
            audioPlayer.play();
            overlay.style.display = 'block';
        }
    });
});

/*overlayChild.addEventListener('click', () => {
    overlayChild.pause();
    overlayChild.style.display = 'none';
});
*/