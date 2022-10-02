// function fetchNames(data) {
//     fetch('api-get-names6.php', {
//         method: 'POST',
//         body: JSON.stringify(data)
//     })
//         .then(res => res.json())
//         .catch(e => console.log('Error: ' + e))
// }

async function fetchNamesAs() {
    let conn = await fetch('api-get-names6.php');
    let data = await conn.json();
    console.log(data);
}