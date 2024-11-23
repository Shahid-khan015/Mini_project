document.addEventListener('DOMContentLoaded', function() {
    // Toggle sidebar
    const menuIcon = document.querySelector('.menu-icon');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    
    menuIcon.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('expanded');
        
        if(sidebar.classList.contains('collapsed')) {
            sidebar.style.width = '72px';
            mainContent.style.marginLeft = '72px';
            mainContent.style.width = 'calc(100% - 72px)';
        } else {
            sidebar.style.width = '240px';
            mainContent.style.marginLeft = '240px';
            mainContent.style.width = 'calc(100% - 240px)';
        }
    });

});