document.getElementById('menu-button').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
    document.getElementById('menu-button').firstElementChild.classList.toggle('hidden');
    document.getElementById('menu-button').lastElementChild.classList.toggle('hidden');
});

const inputFile = document.getElementById('image'),
    imagePreview = document.getElementById('preview');

if (inputFile) {
    inputFile.addEventListener('change', () => {
        const files = inputFile.files;

        if (!files) {
            imagePreview.src = "";
            return
        }

        imagePreview.src = URL.createObjectURL(files[0]);
    });
}