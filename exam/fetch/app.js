function fetchNames(data) {
    fetch('api-get-names.php', {
        method: 'POST',
        body: JSON.stringify(data)
    })
        .then(res => res.json())
        .then(res => console.log(res))
        .catch(e => console.log('Error: ' + e))
}


// function search(data) {
//     // console.log(data);
//     fetchSearchData(data);
// }

// function viewSearchResult(data) {
//     const DataViewer = document.getElementById('dataViewer');

//     DataViewer.innerHTML = "";

//     for (let i = 0; i < data.length; i++) {
//         const li = document.createElement("li");
//         li.innerHTML = data[i]["name"];
//         DataViewer.appendChild(li);
//     }
// }

// function viewSearchResult(data) {
//     $('#results').html('');
//     let templateStr = $('#card_template').html();
//     let newStr = data.map(function (obj) {
//         let s = '' + templateStr;
//         s = s.replace(/{{:(.*)}}/gm, function (m, prop) {
//             return obj[prop];
//         })
//         return s;
//     }).join(' ')
//     $('#results').html(newStr);
// }


// function show_from_results() {
//     const the_input = document.querySelector("#from-input")
//     if (the_input.value.length > 0) {
//         document.querySelector("#from-results").style.display = "block"
//         get_cities_from()
//     } else {
//         document.querySelector("#from-results").style.display = "none"
//     }
//     // document.querySelector("#from-results").style.display = "block"
// }

// // ##############################
// function hide_from_results() {
//     document.querySelector("#from-results").style.display = "none"
// }

// // ##############################
// async function get_cities_from() {
//     let conn = await fetch('api-get-cities-from.php')
//     let data = await conn.json() // [{"city_name":"a"},{"city_name":"b"}]
//     let div_city = `<div class="from-city">
//                       <img src="#img#">
//                       <p>xxx</p>
//                       <p>Population: #population#</p>
//                     </div>`
//     let all_cities = ""
//     //        0                1                    2
//     // [{"city_name":"a"},{"city_name":"b"}, {"city_name":"c"}]
//     for (let i = 0; i < data.length; i++) {
//         let city = data[i] // {"city_name":"a"}
//         let city_name = city.city_name
//         console.log(city_name)
//         let copy_div_city = div_city
//         copy_div_city = copy_div_city.replace("xxx", city_name)
//         copy_div_city = copy_div_city.replace("#img#", city.city_image)
//         copy_div_city = copy_div_city.replace("#population#", city.city_population)
//         all_cities += copy_div_city
//     }
//     console.log(data)
//     document.querySelector("#from-results").insertAdjacentHTML("afterbegin", all_cities)
// }