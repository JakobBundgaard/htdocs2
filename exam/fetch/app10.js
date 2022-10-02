function fetchData(data) {
    fetch('api-get-data.php', {
        method: 'POST',
        body: JSON.stringify(data)
    })
        .then(res => res.json())
        .catch(e => console.log('Error: ' + e))
}