// function fetchData(data) {
//     fetch('api-get-fish.php', {
//         method: 'POST',
//         body: JSON.stringify()
//     })
//         .then(res => res.json())
//         .catch(e => console.log('Error: ' + e))
// }

async function fetchData2() {
    let conn = await fetch('api-get-fish.php');
    let data = await conn.json();
}