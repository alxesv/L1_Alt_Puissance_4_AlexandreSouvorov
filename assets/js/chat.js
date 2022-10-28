
function message() {

    let messagez = document.querySelector("#messagetxt");
    console.log(messagez.value);
}

// nvx message

function generateFetch(data) {
    const body = new URLSearchParams(data)
    return {
        method: POST,
        body: body,
        headers: {
            'content-Type': 'application/x-www-form-urlencoded'
        }
    }
}


const inputMessage = document.querySelector('#messagetxt')

inputMessage.addEventListener('keypress', (event) => {

    if (event.key == "Enter") {
        fetch('action/send_message.php', generateFetch({ message: event.target.value }))
            .then(res => res.json())
            .then(data => {
                console.log(data)

            })
    }
})