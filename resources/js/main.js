addEventListener("click", function (event) {
    // const button = document.querySelector("#deleteBtn")
    // let value = event.target.value


    if (event.target.className === "btn btn-dark") {
        const button = document.querySelector("#deleteBtn")
        let value = event.target.value
        console.log(value)

    }



})

// fetch("../models/delete.php", {
//     method: 'POST',
//     body: JSON.stringify({'user_id':value}),
// })
//     .then(res => res.json())
//     .then(data => {
//
//         let statusMsg = document.getElementById('reed_status');
//         console.log(data.status)
//         statusMsg.innerHTML=
//             `<div class="alert alert-success" role="alert">
//             ${data.status}
//             </div>`
//     })

// })

