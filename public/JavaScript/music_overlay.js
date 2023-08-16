const tracks = document.querySelectorAll('.track');
const overlay = document.getElementById('overlay');
const audioSource = document.getElementById('audio_source');
const overlayChild = document.getElementById('overlay_child');

tracks.forEach(track => {
    track.addEventListener('click', () => {
        const src = track.getAttribute('data-src');
        audioSource.src = src;
        overlayChild.load();
        overlayChild.play();
        overlay.style.display = 'block';
    });
});

overlayChild.addEventListener('click', () => {
    overlayChild.pause();
    overlayChild.style.display = 'none';
});