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
                        <h3>${event.event_name}</h3>
                        <p>Category: ${event.category}</p>
                        <img src="http://localhost/sharedenImg/${event.image_path}" alt="${event.event_name}" width="200">
                    `;
                    eventsContainer.appendChild(eventDiv);
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}


// Fetch data from backend using AJAX
fetch('fetch_events.php') // Update with your PHP file name
    .then(response => response.json())
    .then(data => {
        const eventsLibrary = document.getElementById('events-library');

        // Loop through retrieved data and create HTML elements to display it
        data.forEach(event => {
            const eventDiv = document.createElement('div');
            eventDiv.innerHTML = `
                <h3>${event.event_name}</h3>
                <p>Organizer: ${event.organizer}</p>
                <p>Category: ${event.category}</p>
                <p>Date & Time: ${event.date_time}</p>
                <p>Location: ${event.location}</p>
                <p>Description: ${event.description}</p>
                <img src="${event.image_path}" alt="${event.event_name}" width="200">
            `;
            eventsLibrary.appendChild(eventDiv);
        });
    })
    .catch(error => console.error('Error fetching data:', error));
