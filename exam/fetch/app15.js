function fetchData(data) {
    fetch('api-get-cats.php', {
        metode: 'POST',
        body: JSON.stringify()
    })
        .then(res => res.json())
        .catch(e => console.log('Error: ' + e))
}