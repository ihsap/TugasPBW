// Simple confirmation for delete action
document.addEventListener('DOMContentLoaded', function () {
    const deleteLinks = document.querySelectorAll('a[onclick]');
    
    deleteLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            const confirmDelete = confirm('Yakin ingin menghapus data ini?');
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});
