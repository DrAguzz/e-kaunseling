var currentDate = new Date();
var dataToSend = {
    key1: currentDate.toISOString() // Sending the current date in ISO format
};

fetch('index.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(dataToSend)
})
.then(response => response.json())
.then(data => {
    // Handle the response from the server
    console.log(data);
})
.catch(error => {
    console.error('Error:', error);
});