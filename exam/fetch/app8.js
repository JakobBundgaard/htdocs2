// function fetchNames(data) {
//     fetch('api-get-names8.php', {
//         method: 'POST',
//         body: JSON.stringify(data)
//     })
//         .then(res => res.json())
//         .catch('Error: ' + e)
//         .finallly(console.log('Always called'))
// }

async function fetchcheeses() {
    let conn = await fetch('api-get-names8.php');
    let data = await conn.json();
}