document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tabs-list li');
    const tabsContent = document.querySelector('.tabs-content');
  
    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => {
        // Make the clicked tab active
        tabs.forEach((t) => t.classList.remove('active-tab'));
        tab.classList.add('active-tab');
  
        // Fetch and set the content of tabsContent from the server
        fetch('fetch-tabs.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({
            index: index,
          }),
        })
          .then(response => response.json())
          .then(data => {
            tabsContent.innerText = data[index]?.content || '';
          })
          .catch(error => console.error('Error fetching tab content:', error));
      });
    });
  });
  