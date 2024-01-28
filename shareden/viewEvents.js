// Fetch data from backend using AJAX
fetch('fetch_events.php') // Update with your PHP file name
    .then(response => response.json())
    .then(data => {
        const eventsContainer = document.getElementById('events-library');

        // Loop through retrieved data and create HTML elements to display it
        data.forEach(event => {
            const eventDiv = document.createElement('div');
            eventDiv.innerHTML = `
                <h3>${event.event_name}</h3>
                <p>Organizer: ${event.organizer}</p>
                <p>Category: ${event.category}</p>
                <p>Date & Time: ${event.date_time}</p>
                <p>Date: ${event.date}</p>
                <p>Time: ${event.time}</p>
                <p>Location: ${event.location}</p>
                <p>Description: ${event.description}</p>
                <img src="${event.image_path}" alt="${event.event_name}" width="200">
            `;
            eventsContainer.appendChild(eventDiv);
        });
    })
    .catch(error => console.error('Error fetching data:', error));
