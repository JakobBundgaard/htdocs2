function fetchNames(data) {
    fetch('api-get-names3.php', {
        method: 'POST',
        body: JSON.stringify(data)
    })
        .then(res => res.json())
        .then(res => console.log(res))
        .catch(e => console.log('Error: ' + e))
}