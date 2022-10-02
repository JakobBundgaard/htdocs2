// function fetchcheses(data) {
//     fetch('api-get-cheeses.php', {
//         method: 'POST',
//         body: JSON.stringified(data)
//     })
//         .then(res => res.json())
//         .catch(e => console.log('Error: ' + e))
// }

async function getCheeses() {
    let conn = await fetch('api-get-cheeses.php')
    let data = await conn.json()
}