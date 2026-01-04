// auto slug
document.addEventListener('input', function (e) {
    // Cari elemen yang punya class 'slug-source'
    if (e.target.classList.contains('slug-source')) {
        const form = e.target.closest('form');
        const target = form.querySelector('.slug-target');

        if (target) {
            let slug = e.target.value.toLowerCase()
                .replace(/[^\w ]+/g, '')   // Hapus karakter spesial
                .replace(/ +/g, '-')       // Spasi jadi dash
                .replace(/^-+|-+$/g, '');  // Hapus dash di ujung
            
            target.value = slug;
        }
    }
});


// delete button 
 document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                const userId = this.getAttribute('data-id');
                const form = document.getElementById('delete-form-' + userId);

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    
// previe image
     var previewImage = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.classList.remove('d-none');
            output.onload = function() {
                URL.revokeObjectURL(output.src)
            }
        };