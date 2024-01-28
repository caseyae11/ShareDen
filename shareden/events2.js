// Fetch data from backend using AJAX
fetch('fetchEvents.php') // Update with your PHP file name
    .then(response => response.json())
    .then(data => {
        const eventsContainer = document.getElementById('events-library');

        // Loop through retrieved data and create HTML elements to display it
        data.forEach(event => {
            const eventDiv = document.createElement('div');
            eventDiv.classList.add('event-container');

            const eventLink = document.createElement('a');
            eventLink.href = `eventDetailsPage.php?eventId=${event.event_id}`; // Replace with your event details page
            eventLink.innerHTML = `
                <img src="${event.image_path}" alt="${event.event_name}" width="200">
                <h3>${event.event_name}</h3>
                <p>Date & Time: ${event.date_time}</p> 
                <p class= "location">Location: ${event.location}</p>              
            `;
        
            eventDiv.appendChild(eventLink);
            eventsContainer.appendChild(eventDiv);
        });
    })
    .catch(error => console.error('Error fetching data:', error));
