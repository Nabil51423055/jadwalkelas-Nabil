document.addEventListener("DOMContentLoaded", function () {

    // Hapus data dengan konfirmasi
    const deleteButtons = document.querySelectorAll(".btn-delete");
    deleteButtons.forEach(button => {
        button.addEventListener("click", function (e) {
            const nama = this.dataset.nama || "data ini"; 
            if (!confirm(`Apakah kamu yakin ingin menghapus ${nama}?`)) {
                e.preventDefault(); 
            }
        });
    });

    // Edit data (redirect ke halaman edit.php)
    const editButtons = document.querySelectorAll(".btn-edit");
    editButtons.forEach(button => {
        button.addEventListener("click", function () {
            const id = this.dataset.id;
            window.location.href = `edit.php?id=${id}`;
        });
    });

});
