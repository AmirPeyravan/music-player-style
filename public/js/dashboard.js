    // Function to open a tab
    function openTab(tabId) {
        // Hide all tab contents
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        // Show the selected tab content
        document.getElementById(tabId).classList.add('active');

        // Update active state for nav items
        const navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(item => {
            item.classList.remove('active');
        });

        // Add active class to the clicked nav item
        event.currentTarget.classList.add('active');

        // Update page title
        document.querySelector('.page-title').textContent = event.currentTarget.querySelector('span').textContent;
    }

    // Function to show tab content
    function showTabContent(contentId) {
        // Hide all tab contents
        const tabContents = document.querySelectorAll('#songs .tab-content');
        tabContents.forEach(content => {
            content.classList.remove('active');
        });

        // Show the selected tab content
        document.getElementById(contentId).classList.add('active');

        // Update active state for tabs
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Add active class to the clicked tab
        event.currentTarget.classList.add('active');
    }

    // Function to open modal
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    // Function to close modal
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Function to play music
    function playMusic(songId) {
        const musicPlayer = document.querySelector('.music-player');
        musicPlayer.classList.add('active');

        // Here you would normally handle the actual music playback
        console.log('Playing song ID:', songId);
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }