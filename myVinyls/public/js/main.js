console.log('Hallo hallo');


// FROM livesearch
function search(artist) {
    console.log(artist);
    fetchSearchData(artist);
}

function fetchSearchData(artist) {
    $('#results').html('blabla');
    fetch('albums/apisearch', {
        method: 'POST',
        body: new URLSearchParams('artist=' + artist)
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res))
        .catch(e => console.log('Error: ' + e))
}

function viewSearchResult(data) {
    $('#results').html('');
    let templateStr = $('#card_template').html();
    let newStr = data.map(function (obj) {
        let s = '' + templateStr;
        s = s.replace(/{{:(.*)}}/gm, function (m, prop) {
            return obj[prop];
        })
        return s;
    }).join(' ')
    $('#results').html(newStr);
}



// Search FROM CLASS
// function show_artist_results() {
//     const the_input = document.querySelector('#artist-input')
//     if (the_input.value.length > 0) {
//         console.log(the_input.value);
//         // document.querySelector('results').style.display = 'block'
//         get_albums_by_artist()
//     } else {
//         document.querySelector('#results').style.display = 'none'
//     }
// }

// async function get_albums_by_artist() {
//     console.log('From getByArtist');
//     // Clear from-results div
//     // document.querySelector('#results').innerHTML = ""
//     let conn = await fetch('api_search.php')
//     console.log(conn);
//     let data = await conn.json()

//     // let div_album = `
//     //                 <div class="album">
//     //                     <img class="img_city" src="#img#" alt="Destination">
//     //                     <div class="from_city_name">
//     //                         <p>xxx</p>
//     //                         <p>Population: #pop#</p>
//     //                     </div>
//     //                     <div class="checkbox">
//     //                         <input type="checkbox">
//     //                     </div>
//     //                 </div>
//     //                 `

//     let all_cities = ""
//     for (let i = 0; i < data.length; i++) {
//         let city = data[i]
//         let city_name = city.city_name
//         // console.log(city_name)

//         // Making a copy, so we dont touch the original blueprint
//         let copy_div_city = div_city

//         copy_div_city = copy_div_city.replace("xxx", city_name)
//         copy_div_city = copy_div_city.replace("#img#", city.city_image)
//         copy_div_city = copy_div_city.replace("#pop#", city.population)

//         all_cities += copy_div_city
//     }
//     // console.log(data)
//     document.querySelector('#from-results').insertAdjacentHTML('afterbegin', all_cities)
//     all_cities = ""
// }