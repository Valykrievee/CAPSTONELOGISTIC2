// scripts.js
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = e.target.getAttribute('data-target');
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(targetId).classList.add('active');
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.classList.remove('active');
            });
            e.target.classList.add('active');
        });
    });
});

function editAudit(button) {
    // Handle edit audit logic here
}

function deleteAudit(button) {
    // Handle delete audit logic here
}
