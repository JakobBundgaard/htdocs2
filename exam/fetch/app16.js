function fetchData(data) {
    fetch('api-get-dogs.php', {
        method: 'POST',
        body: JSON.stringify()
    })
        .then(res => res.json())
        .catch(e => console.log('Error: ' + e))
}