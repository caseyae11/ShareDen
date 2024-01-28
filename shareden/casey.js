// SEARCH CODE

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


//RECOMMENDED DOM CODE
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

// fetch('fetchEvents.php') // Update with your PHP file name
//     .then(response => response.json())
//     .then(data => {
//         const eventsContainer = document.getElementById('events-library');

//         // Loop through retrieved data and create HTML elements to display it
//         data.forEach(event => {
//             const eventDiv = document.createElement('div');
//             eventDiv.classList.add('event-container');

//             const eventLink = document.createElement('a');
//             eventLink.href = `eventDetailsPage.php?eventId=${event.event_id}`; // Replace with your event details page
//             eventLink.innerHTML = `
//                 <img src="${event.image_path}" alt="${event.event_name}" width="200">
//                 <h3>${event.event_name}</h3>
//                 <p>Date & Time: ${event.date_time}</p> 
//                 <p class="location">Location: ${event.location}</p>

//             `;
//             // <button class="like-button"><i class="fas fa-heart like-icon"></i></button>
//             eventDiv.appendChild(eventLink);
//             eventsContainer.appendChild(eventDiv);

//             // Attach event listener to the like button
//             const likeButton = eventLink.querySelector('.like-button');
//             likeButton.addEventListener('click', () => {
//                 // Perform like functionality here, e.g., update database or toggle class
//                 likeButton.classList.toggle('liked');
//             });
//         });
//     })
//     .catch(error => console.error('Error fetching data:', error));
