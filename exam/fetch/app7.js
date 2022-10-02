function fetchNames(data) {
    fetch('api-get-names7.php', {
        method: 'POST',
        body: JSON.stringify(data)
    })
        .then(res => res.json())
        .catch(e => console.log('Error: ' + e))
}