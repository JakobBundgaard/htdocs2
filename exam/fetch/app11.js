function fetchNames(data) {
    fetch('api-get-cars.php', {
        method: 'POST',
        body: JSON.stringify()
    })
        .then(res => res.json())
        .catch(e => console.log('Error: ' + e))
}