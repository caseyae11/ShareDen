document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#deleteForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(form);

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Assuming the response text contains the upload status message
                    if (xhr.responseText === 'Record deleted successfully') {
                        // Display success message (You might want to use a function like showPopup here)
                        alert('Meme successfully deleted! Return To your Previous Page');
                    } else {
                        // Display error message (You might want to use a function like showPopup here)
                        alert('Failed to delete.');
                    }
                } else {
                    // Handle HTTP error
                    alert('An error occurred while uploading the meme.');
                }
            }
        };

        xhr.open('POST', 'delete.php', true);
        xhr.send(formData);
    });
});
