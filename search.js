function searchEvents() {
    const searchTerm = document.getElementById('search').value.trim();

    fetch(`search.php?search=${searchTerm}`)
        .then(response => response.json())
        .then(data => {
            const eventsContainer = document.getElementById('events-container');
            eventsContainer.innerHTML = ''; // Clear previous results

            // Loop through retrieved data and filter based on search term
            data.forEach(event => {
                if (event.event_name.toLowerCase().includes(searchTerm.toLowerCase()) || 
                    event.category.toLowerCase().includes(searchTerm.toLowerCase())) {
                    const eventDiv = document.createElement('div');
                    eventDiv.innerHTML = `
                        <p>${event.event_name}</p>
                    `;
                    eventsContainer.appendChild(eventDiv);
                }
            });

        })
        .catch(error => console.error('Error fetching data:', error));
}


